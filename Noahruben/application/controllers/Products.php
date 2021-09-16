<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows();
        
        // Load the product list view

        $data['_view'] = 'products/index';
        $this->load->view('layouts/main',$data);
      }
    function products_single($id){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows($id);
        $data['comments'] = $this->product->get_comments($id);
        
        // Load the product list view

        // $data['_view'] = 'products/products_single';
        $this->load->view('products/products_single',$data);
      }

          function products_single_comment_add($id)
    {
        $id = $id;
      
         $params = array(
                'comment_text' => $this->input->post('comment_text'),
                'rating' => $this->input->post('rating'),
                'name' => $this->input->post('name'),
                'blog_id' => $id,
               
            );
           $insert_id = $this->product->add_comment($params);
              function_alert("Comment Posted . . ."); 
         redirect('Products/products_single/'.$id);
                          
    }

    function declare_usefulness($comId, $id) {
        $rating = $this->input->post('usefulness');
        if ($rating == '1') {
            $this->db->where('id', $comId);
            $this->db->set('num_useful', 'num_useful+1', FALSE);
            $this->db->update('comments');
        }
        if ($rating == '0') {
            $this->db->where('id', $comId);
            $this->db->set('num_not', 'num_not+1', FALSE);
            $this->db->update('comments');
        }
        if ($rating == '2') {
            $this->db->where('id', $comId);
            $this->db->set('num_very', 'num_very+1', FALSE);
            $this->db->update('comments');
        }
        function_alert("Rating Successful");
        redirect('Products/products_single/'.$id);
    }
    

    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->product->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['name'],
            
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
} 
