<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get()
    {
        $this->db->from('mst_role');
        return $this->db->get();
    }

    public function add($post)
    {
        $params['role'] = $post['nama_role'];
        $this->db->insert('mst_role', $params);
    }

    public function delete($nama)
    {
        $this->db->where('id', $nama);
        $this->db->delete('mst_role');
    }
}
