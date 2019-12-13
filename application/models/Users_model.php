<?php
class Users_model extends CI_Model
{
    public function addUsers($u_id, $username, $password, $email, $status)
    {
        $Add = array(
            'uid' => $u_id,
            'username' => $username,
            'password'  => $password,
            'email'  => $email,
            'status'  => $status
        );
        $this->db->insert('users', $Add);

        return true;
    }
    public function showUsers()
    {
        $query = $this->db->get('users');

        return $query->result();
    }
    public function editUsers($u_id, $username, $password, $email, $status)
    {
        $Edit = array(
            'uid' => $u_id,
            'username' => $username,
            'password'  => $password,
            'email'  => $email,
            'status'  => $status
        );
        $this->db->where('uid', $u_id);
        $this->db->update('Users', $Edit);

        return true;
    }
    public function deleteUsers($u_id, $username, $password, $email, $status)
    {
        $Delete = array(
            'uid' => $u_id,
            'username' => $username,
            'password'  => $password,
            'email'  => $email,
            'status'  => $status
        );
        $this->db->where('uid', $u_id);
        $this->db->delete('Users');

        return true;
    }
}
