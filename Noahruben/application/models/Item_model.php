<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Item_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get item by id
     */
    function get_item($id)
    {
        return $this->db->get_where('items',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all items count
     */
    function get_all_items_count()
    {
        $this->db->from('items');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all items
     */
    function get_all_items($params = array())
    {
       $this->db->order_by('id', 'desc');
       if(isset($params) && !empty($params))
       {
           $this->db->limit($params['limit'], $params['offset']);
       }
      $this->db->order_by('id', 'desc');
        return $this->db->get('items')->result_array();
    }
    /*
     * Get Item Price
     */
    function get_item_price($item_id)
    {
        $this->db->select('items.saleprice');
        $this->db->from('items');
        $this->db->where('id', $item_id);
        return $this->db->get()->row_array();
    }
        
    /*
     * function to add new item
     */
    function add_item($params)
    {
        $this->db->insert('items',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update item
     */
    function update_item($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('items',$params);
    }
    
    /*
     * function to delete item
     */
    function delete_item($id)
    {
        return $this->db->delete('items',array('id'=>$id));
    }
    /*
     * function get all stock
     */
    function get_stock()
    {
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        $this->db->select("sum(qty) as quntity,sum(total_amount) as total,items.name as item_name");
        $this->db->group_by('item_id');
        $this->db->from('purchase');
        $this->db->join('items','purchase.item_id=items.id','left outer');
        $this->db->where('purchase.item_id=items.id');
        return $this->db->get()->result_array();
    }
    /*
     * function get all used product 
     */
    function get_usedProducts()
    {
        $this->db->group_by('item_id');
        $this->db->select("sum(qty) as rec_qty,sum(recovery_amount) as rec_total,items.name as item_name");
        $this->db->from('itemused');
        $this->db->join('items','itemused.item_id=items.id','left outer');
        $this->db->where('itemused.item_id=items.id');
        return $this->db->get()->result_array();
    }
    function get_sum_profit_count()
    {

        $this->db->select_sum('Profits');
        $this->db->from('customers');
        
        return $this->db->get()->result_array();

    }
     function get_sum_total_price()
    {

        $this->db->select_sum('grand_total');
        $this->db->from('orders');
        
        return $this->db->get()->result_array();
    }

    function price_of_product()
    {

        $this->db->select_sum('price');
        $this->db->from('items');
        
        return $this->db->get()->result_array();
    }
    function customer_name()
    {
        

      return $this->db->query('SELECT  `customer_name`,
             COUNT(`customer_name`) AS `value_occurrence` 
    FROM     `customers`
    GROUP BY `customer_name`
    ORDER BY `value_occurrence` DESC
    LIMIT    1;')->result_array();

    
       }

    function customer_products()
    {
        

      return $this->db->query('SELECT  `products_ordered`,
             COUNT(`products_ordered`) AS `value_occurrence` 
    FROM     `customers`
    GROUP BY `products_ordered`
    ORDER BY `value_occurrence` DESC
    LIMIT    1;')->result_array();

    
       }




    


}
