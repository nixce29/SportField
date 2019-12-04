<?php
class Users_model extends CI_Model
{
    public function addUsers($username, $password, $email, $mobile)
    {
        $data = array(
            'username' => $username,
            'password'  => $password,
            'email'  => $email,
            'mobile' => $mobile
        );

        $this->db->insert('users', $data);

        return true;
    }
}
