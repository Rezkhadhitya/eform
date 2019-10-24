<?php

class LoginModel extends  CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek_login($username, $password)
    {
        $this->db->select('u.*, rl.role as nama_role')->from('user u');
        $this->db->join('mst_role rl', 'rl.id=u.id_role');
        $this->db->where("u.username", $username);
        $this->db->where("u.password", $password);
        return $this->db->get();
    }
}
