<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		$this->load->view('content/auth/sign_in');
	}

	public function registration()
	{
		$this->load->view('content/auth/sign_up');
	}

	public function submit_login()
	{
		redirect('dashboard');
	}
}
