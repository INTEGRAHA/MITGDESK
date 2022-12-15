<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department extends CI_Controller
{

	public function index()
	{

		//Define data buat di load di view
		$data = array(
			'header' 		=> 'Department',
			'name_menu'		=> 'Masters Menu',
			'is_dashboard' 	=> FALSE
		);

		//Define path JS file
		$js = array(
			'form' => 'content/department/form.js',
			'ajax' => 'content/department/ajax.js',
		);

		//Define path modal file
		$modals = array(
			'add_modal'    => $this->load->view('content/department/add_department', $data, TRUE),
			'delete_modal' => $this->load->view('content/department/delete_department', $data, TRUE)
		);

		//Define apa yg mau di load di view
		$page['JS']	 	 	  = $js;
		$page['modals']	 	  = $modals;
		$page['sidebar'] 	  = $this->load->view('template/sidebar', $data, TRUE);
		$page['main_content'] = $this->load->view('content/department/department', $data, TRUE);

		//Show Layout
		$this->load->view('template/layout', $page);
	}
}
