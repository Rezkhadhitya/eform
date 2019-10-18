<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Departemen_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
        $this->load->model('departemen_model');
    }

    public function get()
    {
        $this->db->from('mst_departemen');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['departemen'] = $post['nama_departemen'];
        $params['nama_pejabat'] = $post['nama_pejabat'];
        $this->db->insert('mst_departemen', $params);
    }

    public function delete($nama)
    {
        $this->db->where('departemen', $nama);
        $this->db->delete('mst_departemen');
    }
}
