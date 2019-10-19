<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
    }

    function index()
    {
        $data['title'] = 'Dashboard';
        // print_r($this->session->userdata());
        $data['user'] = $this->session->userdata('login');
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // echo $this->db->last_query();
        $id_role =  $this->session->userdata('role');
        // print_r($data);
        $res = $this->um->get_role($id_role);

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('administrator/dashboard', $data);
        $this->load->view('templates_administrator/footer');
    }
}
