<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('Users_model');
    }

    public function index()
    {
        // echo 'hello';exit();
        header('Location: welcome/home');
    }
    public function Register()
    {
        $this->template->set('title', 'Register');
        $this->template->load('template/light', 'Users/Register');
    }
    public function addUser()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $email = $this->input->post("email");
        $mobile = $this->input->post("mobile");

        $this->Users_model->addUsers($username, $password, $email, $mobile);

        return true;
    }
}
