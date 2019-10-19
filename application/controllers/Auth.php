<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login page';
        $this->load->view('templates_administrator/auth_header', $data);
        $this->load->view('administrator/login');
        $this->load->view('templates_administrator/auth_footer');
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->form_validation->set_message('required', '{field} wajib diisi!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/auth_header');
            $this->load->view('administrator/login');
            $this->load->view('templates_administrator/auth_footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = sha1($password);

            $cek = $this->login_model->cek_login($user, $pass);

            if ($cek->num_rows() > 0) {
                $data_pengguna = $cek->row_array();
                unset($data_pengguna['password']);

                $this->session->set_userdata('login', $data_pengguna);

                redirect('dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger tiga" role="alert">
                <strong>Username</strong> atau <strong>Password</strong> anda salah.
                </div>');
                redirect('administrator/auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('pesan', '<div class="alert alert-info tiga" role="alert">
        Anda berhasil <strong>Log Out</strong>.
        </div>');
        redirect('administrator/auth');
        $this->session->sess_destroy();
    }

    public function registrasi()
    {
        $data['title'] = 'Registrasi akun baru';

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password1', 'Konf. Password', 'trim|required|min_length[3]|matches[password]');

        $this->form_validation->set_message('required',     '{field} wajib diisi!');
        $this->form_validation->set_message('min_length',   '{field} min 3 karakter!');
        $this->form_validation->set_message('valid_email',  '{field} ini tidak dapat digunakan / tidak valid!');
        $this->form_validation->set_message('matches',      '{field} tidak sama!');
        $this->form_validation->set_message('is_unique',    '{field} ini sudah ada!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/auth_header', $data);
            $this->load->view('administrator/registrasi', $data);
            $this->load->view('templates_administrator/auth_footer');
        } else { }
    }

    public function lupa_password()
    {
        $data['title'] = 'Lupa password';

        $this->form_validation->set_rules('email', 'Alamat Email', 'trim|required|valid_email');
        $this->form_validation->set_message('required',     '{field} wajib diisi!');
        $this->form_validation->set_message('valid_email',  '{field} ini tidak dapat digunakan / tidak valid!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/auth_header', $data);
            $this->load->view('administrator/lupa_password', $data);
            $this->load->view('templates_administrator/auth_footer');
        }
    }
}
