<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load form library & helper
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
        
        $this->controller = 'checkout';
    }
    
    function index(){
        // Redirect if the cart is empty
        if($this->cart->total_items() <= 0){
            redirect('products/');
        }
        
        $custData = $data = array();
        
        // If order request is submitted
        $submit = $this->input->post('placeOrder');
        if(isset($submit)){
            // Form field validation rules
            $this->form_validation->set_rules('customer_name', 'Name', 'required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('delivery', 'Email', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $data['cartItems'] = $this->cart->contents();
            
            $custData = array(


                  
                'customer_name' => strip_tags($this->input->post('customer_name')),
                'phone' => strip_tags($this->input->post('phone')),
                'city' => strip_tags($this->input->post('city')),
                'address' => strip_tags($this->input->post('address')),
                'delivery' => strip_tags($this->input->post('delivery')),
              
               
                'tracking_code' => strip_tags($this->input->post('tracking_code')),
                'total_price' => $cartItems['price'],
                'delete_id' => 1


            );
           
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Insert customer data
                $insert = $this->product->insertCustomer($custData);
                
                // Check customer data insert status
                if($insert){
                    // Insert order
                    $order = $this->placeOrder($insert);
                    
                    // If the order submission is successful
                    if($order){
                        $this->session->set_userdata('success_msg', 'Order placed successfully.');
                        redirect($this->controller.'/orderSuccess/'.$order);
                    }else{
                        $data['error_msg'] = 'Order submission failed, please try again.';
                    }
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        
        // Customer data
        $data['custData'] = $custData;
        
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();

        $data['_view'] = 'Checkout/index';
        $this->load->view('layouts/main',$data);
    }
    
    function placeOrder($custID){
        // Insert order data
        $ordData = array(
            'customer_id' => $custID,
            'grand_total' => $this->cart->total()
        );
        $insertOrder = $this->product->insertOrder($ordData);
        
        if($insertOrder){
            // Retrieve cart data from the session
            $cartItems = $this->cart->contents();
            
            // Cart items
            $ordItemData = array();
            $i=0;
            foreach($cartItems as $item){
                $ordItemData[$i]['order_id']     = $insertOrder;
                $ordItemData[$i]['product_id']     = $item['id'];
                $ordItemData[$i]['quantity']     = $item['qty'];
                $ordItemData[$i]['sub_total']     = $item["subtotal"];
                $stock = $this->db->select('stock')
                  ->get_where('items', array('id' => $item['id']))
                  ->row()
                  ->stock;
                $newstock = $stock - $item['qty'];
                $this->db->where('id', $item['id']);
                $this->db->set('stock', $newstock, FALSE);
                $this->db->update('items');
                $i++;
            }
            
            if(!empty($ordItemData)){
                // Insert order items
                $insertOrderItems = $this->product->insertOrderItems($ordItemData);
                
                if($insertOrderItems){
                    // Remove items from the cart
                    $this->cart->destroy();
                    
                    // Return order ID
                    return $insertOrder;
                }
            }
        }
        return false;
    }
    
    function orderSuccess($ordID){
        // Fetch order data from the database
        $data['order'] = $this->product->getOrder($ordID);
        
        // Load order details view

        $data['_view'] = 'Checkout/order-success';
        $this->load->view('layouts/main',$data);
    }
    
}