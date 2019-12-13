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

        $u_id = $this->input->post("addUserId");
        $username = $this->input->post("addUserUsername");
        $password = $this->input->post("addUserPassword");
        $email = $this->input->post("addUserEmail");
        $status = $this->input->post("addUserStatus");
        $this->Users_model->addUsers($u_id, $username, $password, $email, $status);
        // header("location:" . site_url("Product/Show_Product"));
        return true;
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

    public function get_all_users()
    {

        $user = $this->Users_model->showUsers();
        if ($user !== null) {
            $return_data['data'] = $user;
            $return_data['status'] = 1;
        } else {
            $return_data['data'] = null;
            $return_data['status'] = 0;
        }
        echo json_encode($return_data);
    }

    public function showUsers()
    {
        $users = $this->Users_model->showUsers();
        $data = [
            'users' => $users

        ];

        $this->template->set('title', 'Users Story');
        $this->template->load('template/dark', 'Users/ShowUsers', $data);

        // var_dump(json_encode($data));
        return true;
    }
    public function Edit_users()
    {
        $u_id = $this->input->post("editUserId");
        $username = $this->input->post("editUserUsername");
        $password = $this->input->post("editUserPassword");
        $email = $this->input->post("editUserEmail");
        $status = $this->input->post("editUserStatus");
        $this->Users_model->editUsers($u_id, $username, $password, $email, $status);
        // header("location:" . site_url("Product/Show_Product"));
        return true;
    }
    public function Delete_users()
    {
        $u_id = $this->input->post("deleteUserId");
        $username = $this->input->post("deleteUserUsername");
        $password = $this->input->post("deleteUserPassword");
        $email = $this->input->post("deleteUserEmail");
        $status = $this->input->post("deleteUserStatus");
        $this->Users_model->deleteUsers($u_id, $username, $password, $email, $status);
        // header("location:" . site_url("Product/Show_Product"));
        return true;
    }
}
