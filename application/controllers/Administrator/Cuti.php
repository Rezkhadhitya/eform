<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Cuti Pegawai';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->model('cuti_model');
        $data['row'] = $this->cuti_model->get();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('cuti/cuti', $data);
        $this->load->view('templates_administrator/footer');
    }
}
