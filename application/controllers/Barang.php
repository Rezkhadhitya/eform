<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
        $this->load->model('barang_model');
    }

    public function index()
    {
        $data['title'] = 'Master Barang';
        $data['user'] = $this->session->userdata('login');

        $data['row'] = $this->barang_model->get();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('barang/barang', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_barang()
    {
        $data['title'] = 'Tambah Barang';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('merk', 'Merk', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
        $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        $this->form_validation->set_message('required', '{field}  wajib diisi!');
        $this->form_validation->set_message('valid_email',  '{field} ini tidak dapat digunakan / tidak valid!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $res);
            $this->load->view('barang/tambah_barang', $data);
            $this->load->view('templates_administrator/footer');
        } else { }
    }
}
