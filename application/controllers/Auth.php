<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		// cek session
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('content/auth/sign_in');
		} else {
			$this->submit_login();
		}
	}

	public function registration()
	{
		// cek session
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_users.user_email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[confirm-password]', [
			'matches' => 'Password doesn\'t match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('content/auth/sign_up');
		} else {
			$this->submit_register();
		}
	}

	public function submit_register()
	{
	}

	public function submit_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('t_users', ['user_email' => $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['user_password'])) {
				$data = [
					'id' => $user['id'],
					'name' => $user['name'],
					'email' => $user['email'],
				];
				$this->session->set_userdata($data);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger text-white" role="alert">Wrong password!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-white" role="alert">Email is not registered!</div>');
			redirect('auth');
		}
	}
}
