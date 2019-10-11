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
        $id_role =  $this->session->userdata('role');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $res = $this->um->get_role($id_role);

        // print_r($arr_menu);

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('administrator/dashboard', $data);
        $this->load->view('templates_administrator/footer');
    }
}
