<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
    }

    public function get()
    {
        $this->db->from('mst_pegawai');
        $query = $this->db->get();
        return $query;
    }
}
