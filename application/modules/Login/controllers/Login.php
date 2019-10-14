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

}


/* End of file HalamanDepan.php */
/* Location: ./application/controllers/HalamanDepan.php */