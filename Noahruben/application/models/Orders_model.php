<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Orders_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get customers by id
     */
    function get_customers($id)
    {
        
        return $this->db->get_where('customers',array('id'=>$id))->row_array();
    }

     function get_order($id)
    {
        return $this->db->get_where('orders',array('id'=>$id))->row_array();
    }
  
        function delete_order($id)
{
   $this->db->where('id', $id);
   $this->db->delete('orders'); 
}
    

     function get_order_items($id)
    {
        return $this->db->get_where('get_order_items',array('id'=>$id))->row_array();
    }

    function delete_order_items($id)
    {
        return $this->db->get_where('get_order_items',array('id'=>$id))->row_array();
    }

  
    
    /*
     * Get all customers count
     */
    function get_all_customers_count()
    {
        $this->db->from('customers');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all customers
     */
    function get_all_Order()
    {
        $this->db->order_by('id', 'desc');
        
            $this->db->select('orders.*,customers.customer_name');
            $this->db->from('orders');
        $this->db->join('customers', 'orders.customer_id = customers.id');
            return $this->db->get()->result_array();
    }

    function get_all_Order_items()
    {
        $this->db->order_by('id', 'desc');
        
            $this->db->select('order_items.*,items.name');
            $this->db->from('order_items');
        $this->db->join('items', 'order_items.product_id = items.id');
            return $this->db->get()->result_array();
    }
        
    /*
     * function to add new customers
     */
    function add_customers($params)
    {


        $this->db->insert('customers',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update customers
     */
    function update_customers($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('customers',$params);
    }
    
    /*
     * function to delete customers
     */
    function delete_customers($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('customers',$params);
//        return $this->db->delete('customers',array('id'=>$id));
    }
    /*
    * function to insert delete Record
    */
    function insert_deleterec($params)
    {
        return $this->db->insert('deleterec',$params);

    }
}
