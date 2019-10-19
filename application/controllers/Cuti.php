<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
        $this->load->model('departemen_model');
        $this->load->model('cuti_model');
    }

    public function index()
    {
        $data['title'] = 'Cuti Pegawai';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $data['row'] = $this->cuti_model->get();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('cuti/cuti', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_cuti()
    {
        $data['title'] = 'Tambah Cuti';
        $data['user'] = $this->session->userdata('login');
        $res = $this->um->get_role($this->session->userdata('role'));
        $data['row'] = $this->cuti_model->get();

        $data['departemen'] = $this->departemen_model->get();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('cuti/tambah_cuti', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function get_detail()
    {
        $post = $this->input->post();

        $this->db->where('nomor', $post['id']);
        $data = $this->db->get('trn_cuti');

        if ($data->num_rows() > 0) {
            $res = array('error' => false, "data" => $data->row_array());
        } else {
            $res = array('error' => true, 'message' => 'Data tidak ditemukan');
        }

        echo json_encode($res);
    }
}
