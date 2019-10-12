<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
    }

    public function get($id = null)
    {
        $this->db->from('mst_pegawai');
        if ($id != null) {
            $this->db->where('nip', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
