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
    public function ShowProduct()
    {
        $query = $this->db->get('products');

        return $query->result();
    }
    public function editProduct($product_id, $product_name, $product_price, $product_amount)
    {
        $Edit = array(
            'id' => $product_id,
            'name' => $product_name,
            'price'  => $product_price,
            'amount'  => $product_amount
        );
        $this->db->where('id', $product_id);
        $this->db->update('products', $Edit);

        return true;
    }

    public function deleteProduct($product_id, $product_name, $product_price, $product_amount)
    {
        $Delete = array(
            'id' => $product_id,
            'name' => $product_name,
            'price'  => $product_price,
            'amount'  => $product_amount
        );
        $this->db->where('id', $product_id);
        $this->db->delete('products');

        return true;
    }
}
