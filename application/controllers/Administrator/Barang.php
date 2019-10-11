<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Master Barang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('barang_model');
        $data['row'] = $this->barang_model->get();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('barang/barang', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_barang()
    {
        $data['title'] = 'Tambah Barang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'trim|required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('merk', 'Merk', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        $this->form_validation->set_message('required', '{field}  wajib diisi!');
        $this->form_validation->set_message('valid_email',  '{field} ini tidak dapat digunakan / tidak valid!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('barang/tambah_barang', $data);
            $this->load->view('templates_administrator/footer');
        } else { }
    }
}
