<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
    }

    public function index()
    {
        $data['title'] = 'Master User';
        $data['user'] = $this->session->userdata('login');

        $this->load->model('user_model');
        $data['row'] = $this->user_model->get();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('user/user', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_user()
    {
        $data['title'] = 'Tambah User';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'trim|required|matches[password]|min_length[3]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('email', 'Alamat Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('level', 'Level', 'trim|required');

        $this->form_validation->set_message('required',     '{field} wajib diisi!');
        $this->form_validation->set_message('min_length',   '{field} min 3 karakter!');
        $this->form_validation->set_message('valid_email',  '{field} ini tidak dapat digunakan / tidak valid!');
        $this->form_validation->set_message('matches',      '{field} tidak sama!');
        $this->form_validation->set_message('is_unique',    '{field} ini sudah ada, silakan ganti dengan username lain!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $res);
            $this->load->view('user/tambah_user', $data);
            $this->load->view('templates_administrator/footer');
        } else { }
    }
}
