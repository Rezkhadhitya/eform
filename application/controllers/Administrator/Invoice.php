<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Rekap Barcoding';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('invoice_model');
        $data['row'] = $this->invoice_model->get_invoice_barcoding();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('invoice/invoice_barcoding', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function mybiro()
    {
        $data['title'] = 'Data Rekap Mybiro';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('invoice_model');
        $data['row'] = $this->invoice_model->get_invoice_mybiro();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('invoice/invoice_mybiro', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function msb()
    {
        $data['title'] = 'Data Rekap Mybiro';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('invoice_model');
        $data['row'] = $this->invoice_model->get_invoice_msb();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('invoice/invoice_msb', $data);
        $this->load->view('templates_administrator/footer');
    }
}
