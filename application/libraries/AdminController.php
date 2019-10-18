<?php
class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// $this->load->model("core_model","cm");

	}

	function set_content($str)
	{
		$this->content['content'] = $str;
	}

	function set_title($str)
	{
		$this->content['title'] = $str;
	}

	function render()
	{
		$this->load->view("AdminTemplate", $this->content);
	}
}
