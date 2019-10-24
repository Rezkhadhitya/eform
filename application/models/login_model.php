<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends  CI_Model
{
    public function cek_login($username, $password)
    {
        $this->db->select('u.*, rl.role as nama_role')->from('user u');
        $this->db->join('mst_role rl', 'rl.id=u.id_role');
        $this->db->where("u.username", $username);
        $this->db->where("u.password", $password);
        $query = $this->db->get();
        return $query;
    }
}
