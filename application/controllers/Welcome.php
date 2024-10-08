<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');

		if (!$this->session->userdata('user_id')) {
			redirect('auth/login/');
		}
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
