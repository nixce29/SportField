<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('Product_model');
    }

    public function index()
    {
        // echo 'hello';exit();
        header('Location: welcome/home');
    }

    public function home()
    {
        $this->template->set('title', 'HOME');
        $this->template->load('template/dark', 'blank');
    }
    public function AddProduct_form()
    {

        //$product_data = $this->input->post("ProductDetails");
        $product_name = $this->input->post("productName");
        $product_price = $this->input->post("productPrice");
        $product_amount = $this->input->post("productAmount");

        $this->Product_model->insert($product_name, $product_price, $product_amount);
        // header("location:" . site_url("Product/Show_Product"));
        return true;
    }
    public function Show_product()
    {
        $products = $this->Product_model->ShowProduct();
        $data = [
            'products' => $products

        ];

        $this->template->set('title', 'Show Product');
        $this->template->load('template/dark', 'Product/ShowProduct', $data);

        // var_dump(json_encode($data));
        return true;
    }
    public function Edit_product()
    {
        $product_id = $this->input->post("editProductId");
        $product_name = $this->input->post("editProductName");
        $product_price = $this->input->post("editProductPrice");
        $product_amount = $this->input->post("editProductAmount");
        $this->Product_model->editProduct($product_id, $product_name, $product_price, $product_amount);
        // header("location:" . site_url("Product/Show_Product"));
        return true;
    }
    public function Delete_product()
    {
        $product_id = $this->input->post("deleteProductId");
        $product_name = $this->input->post("deleteProductName");
        $product_price = $this->input->post("deleteProductPrice");
        $product_amount = $this->input->post("deleteProductAmount");
        $this->Product_model->deleteProduct($product_id, $product_name, $product_price, $product_amount);
        // header("location:" . site_url("Product/Show_Product"));
        return true;
    }
    public function get_all_products()
    {

        $products = $this->Product_model->ShowProduct();
        //success
        if ($products !== null) {
            $return_data['data'] = $products;
            $return_data['state'] = 1;
        }
        //fail
        else {
            $return_data['data'] = null;
            $return_data['state'] = 0;
        }
        echo json_encode($return_data);
    }
}
