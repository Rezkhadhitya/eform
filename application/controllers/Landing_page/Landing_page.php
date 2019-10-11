<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PT. Tigapilar Maju Mandiri';

        $this->load->view('landing_page/index', $data);
    }
}
