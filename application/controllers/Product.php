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
        $this->template->load('template/light', 'blank');
    }
    public function demo()
    {
        $this->template->set('title', 'demo');
        $this->template->load('template/light', 'demo');
    }
    public function AddProduct()
    {
        $this->template->set('title', 'Add Product');
        $this->template->load('template/light', 'Product/AddProduct');
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
        $this->template->load('template/light', 'Product/ShowProduct', $data);

        return true;
    }
}
