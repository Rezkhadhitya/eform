<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller HalamanDepan
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Login extends LoginController
{
    
  public function __construct()
  {
    parent::__construct();
    $this->controller = get_class($this);
    $this->load->model('LoginModel','fm');
  }

 function index()
  {
    $data = array();
		$data['title'] = "Login";
		$content = $this->load->view($this->controller."View",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
    
  }


  public function CekLogin()
  {
      $this->form_validation->set_rules('username', 'Username', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      $this->form_validation->set_message('required', '{field} wajib diisi!');

      if ($this->form_validation->run() == FALSE) {
          $res = array("error" => true, "message" => validation_errors());
      } else {
          $username = $this->input->post('username');
          $password = $this->input->post('password');

          $user = $username;
          $pass = MD5($password);

          $cek = $this->fm->cek_login($user, $pass);

          if ($cek->num_rows() > 0) {
              $data_pengguna = $cek->row_array();
              unset($data_pengguna['password']);

              $this->session->set_userdata('login', $data_pengguna);

              $res = array('error' => false, 'message' => 'Selamat Datang', 'url' => site_url('DashboardAdmin'));
          } else {
            $res = array("error" => true, "message" => "Username Atau Password Anda Salah");
          }
      }
      exit();
      echo json_encode($res);
  }

}


/* End of file HalamanDepan.php */
/* Location: ./application/controllers/HalamanDepan.php */