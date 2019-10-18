<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
    }

    public function index()
    {
        $data['title'] = 'Cuti Pegawai';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->model('cuti_model');
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

        $this->load->model('cuti_model');
        $data['row'] = $this->cuti_model->get();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('cuti/tambah_cuti', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function riwayat_cuti()
    {
        $data['title'] = 'Riwayat Cuti';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->model('cuti_model');
        $data['row'] = $this->cuti_model->get();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('cuti/riwayat_cuti', $data);
        $this->load->view('templates_administrator/footer');
    }
}
