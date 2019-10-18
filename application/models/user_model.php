<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('u.*, r.role as role')->from('user u');
        $this->db->join('mst_role r', 'r.id=u.id_role');

        if ($id != null) {
            $this->db->where('u.username', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    function get_role($id_role)
    {
        $this->db->select('m.*')->from('mst_akses ma');
        $this->db->join('mst_module m', 'm.id=ma.id_module');
        $this->db->where('ma.id_mst_role', $id_role);
        $res['arr_menu'] = $this->db->get()->result_array();
        return $res;
    }
}
