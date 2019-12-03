<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
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
    public function demo(){
        $this->template->set('title', 'demo');
        $this->template->load('template/light', 'demo');
    }
    public function AddProduct(){
        $this->template->set('title', 'Add Product');
        $this->template->load('template/light', 'Product/AddProduct');
    }
}