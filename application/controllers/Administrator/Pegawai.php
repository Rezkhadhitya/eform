<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
    }

    public function index()
    {
        $data['title'] = 'Master Pegawai';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('pegawai_model');
        $data['row'] = $this->pegawai_model->get();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('pegawai/pegawai', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_pegawai()
    {
        $data['title'] = 'Tambah Pegawai';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->form_validation->set_rules('nip', 'Username', 'trim|required');
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'trim|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'trim|required');
        $this->form_validation->set_rules('jumlah_anak', 'Jumlah Anak', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat Tinggal', 'trim|required');
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
        $this->form_validation->set_rules('penempatan', 'Penempatan', 'trim|required');

        $this->form_validation->set_message('required', '{field}  wajib diisi!');
        $this->form_validation->set_message('valid_email',  '{field} ini tidak dapat digunakan / tidak valid!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $res);
            $this->load->view('pegawai/tambah_pegawai', $data);
            $this->load->view('templates_administrator/footer');
        } else { }
    }
}
