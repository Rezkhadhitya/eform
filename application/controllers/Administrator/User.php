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
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

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
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]', ['required' => 'Kolom Username wajib diisi!', 'min_length' => 'Username minimal 3 karakter!']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]', ['required' => 'Kolom Password wajib diisi!', 'min_length' => 'Password minimal 3 karakter!']);
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'trim|required|matches[password]|min_length[3]', ['required' => 'Kolom Konfirmasi Password wajib diisi!', 'min_length' => 'Konfirmasi Password minimal 3 karakter!', 'matches' => 'Password dan Konfirmasi Password tidak sama!']);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', ['required' => 'Kolom Nama Lengkap wajib diisi!']);
        $this->form_validation->set_rules('email', 'Alamat Email', 'trim|required|valid_email', ['required' => 'Kolom Alamat Email wajib diisi!', 'valid_email' => 'Sertakan @ pada alamat email!']);
        $this->form_validation->set_rules('level', 'Level', 'trim|required', ['required' => 'Kolom Level wajib diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('user/tambah_user', $data);
            $this->load->view('templates_administrator/footer');
        } else { }
    }
}
