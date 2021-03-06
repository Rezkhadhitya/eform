<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
    }

    public function index()
    {
        $data['title'] = 'Profile Saya';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('profile/profile', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function konf_profile()
    {
        $data['title'] = 'Konfigurasi Profile';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('profile/konf_profile', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function edit_profile()
    {
        $data['title'] = 'Perbaharui profile';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('profile/edit_profile', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function ubah_password()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('profile/ubah_password', $data);
        $this->load->view('templates_administrator/footer');
    }
}
