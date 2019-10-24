<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
        $this->load->model('admin_model');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->session->userdata('login');

        $data['ri'] = $this->admin_model->get();

        $res = $this->um->get_role($this->session->userdata('role'));

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $res);
        $this->load->view('administrator/role', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_role()
    {
        $this->form_validation->set_rules('nama_role', 'Nama Role', 'trim|required');
        $this->form_validation->set_message('required', '{field} wajib diisi!');

        $data['title'] = 'Role';
        $data['user'] = $this->session->userdata('login');

        $res = $this->um->get_role($this->session->userdata('role'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $res);
            $this->load->view('administrator/tambah_role', $data);
            $this->load->view('templates_administrator/footer');
        } else {
            $post = $this->input->post(null, true);
            $this->admin_model->add($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show tiga" role="alert">
                    <strong>Berhasil!</strong> menambahkan data Role.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('admin/role');
            }
        }
    }

    public function delete()
    {
        $nama =  $this->input->post('roles');
        $this->admin_model->delete($nama);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show tiga" role="alert">
            <strong>Berhasil!</strong> menghapus data role.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        }
        echo "<Script>window.location='" . site_url('admin/role') . "';</Script>";
    }

    public function get_detail()
    {
        $post = $this->input->post();

        $this->db->where('id', $post['id']);
        $data = $this->db->get('mst_role');

        if ($data->num_rows() > 0) {
            $res = array('error' => false, "data" => $data->row_array());
        } else {
            $res = array('error' => true, 'message' => 'Data tidak ditemukan');
        }

        echo json_encode($res);
    }
}
