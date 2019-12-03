<?php
class Product_model extends CI_Model
{


    public function insert($product_name, $product_price, $product_amount)
    {
        $data = array(
            'name' => $product_name,
            'price'  => $product_price,
            'amount'  => $product_amount
        );

        $this->db->insert('products', $data);
        return true;
    }
}
