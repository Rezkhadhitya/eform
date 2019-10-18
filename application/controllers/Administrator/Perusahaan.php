<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
        $this->load->model('perusahaan_model');
    }

    public function index()
    {
        $data['title'] = 'Konfigurasi Perusahaan';
        $data['user'] = $this->session->userdata('login');

        $data['rows'] = $this->perusahaan_model->get();


        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('perusahaan/konf_perusahaan', $data);
        $this->load->view('templates_administrator/footer');
    }
}
