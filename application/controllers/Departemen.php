<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Departemen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
        $this->load->model('departemen_model');
    }

    public function index()
    {
        $data['title'] = 'Master Departemen';
        $data['user'] = $this->session->userdata('login');

        $data['rows'] = $this->departemen_model->get();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('departemen/departemen', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Master Departemen';
        $data['user'] = $this->session->userdata('login');

        $data['row'] = $this->departemen_model->get();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->form_validation->set_rules('nama_departemen', 'Nama Departemen', 'trim|required');
        $this->form_validation->set_rules('nama_pejabat', 'Nama Pejabat', 'trim|required');

        $this->form_validation->set_message('required', '{field}  wajib diisi!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $res);
            $this->load->view('departemen/tambah_departemen', $data);
            $this->load->view('templates_administrator/footer');
        } else {
            $post = $this->input->post(null, true);
            $this->departemen_model->add($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show tiga" role="alert">
                    <strong>Berhasil!</strong> menambahkan data departemen.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('departemen');
            }
        }
    }

    public function edit()
    {
        $data['title'] = 'Edit Departemen';
        $data['user'] = $this->session->userdata('login');

        $data['row'] = $this->departemen_model->get();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->form_validation->set_rules('nama_departemen', 'Nama Departemen', 'trim|required');
        $this->form_validation->set_rules('nama_pejabat', 'Nama Pejabat', 'trim|required');

        $this->form_validation->set_message('required', '{field}  wajib diisi!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $res);
            $this->load->view('departemen/edit_departemen', $data);
            $this->load->view('templates_administrator/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show tiga" role="alert">
                <strong>Tidak ditemukan!</strong> data departemen.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('departemen');
        }
    }

    public function delete()
    {
        $nama =  $this->input->post('departemen_name');
        $this->departemen_model->delete($nama);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show tiga" role="alert">
                <strong>Berhasil!</strong> menghapus data departemen.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        }
        echo "<Script>window.location='" . site_url('departemen') . "';</Script>";
    }

    public function get_detail()
    {
        $post = $this->input->post();

        $this->db->where('id', $post['id']);
        $data = $this->db->get('mst_departemen');

        if ($data->num_rows() > 0) {
            $res = array('error' => false, "data" => $data->row_array());
        } else {
            $res = array('error' => true, 'message' => 'Data tidak ditemukan');
        }

        echo json_encode($res);
    }
}
