<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function index()
	{

		//Define data buat di load di view
		$data = array(
			'header' 		=> 'Contact',
			'name_menu'		=> 'Masters Menu',
			'is_dashboard' 	=> FALSE
		);

		//Define path JS file
		$js = array(
			'form' => 'content/contact/form.js',
			'ajax' => 'content/contact/ajax.js',
		);

		//Define path modal file
		$modals = array(
			'add_modal'    => $this->load->view('content/contact/add_contact', $data, TRUE),
			'delete_modal' => $this->load->view('content/contact/delete_contact', $data, TRUE)
		);

		//Define apa yg mau di load di view
		$page['JS']	 	 	  = $js;
		$page['modals']	 	  = $modals;
		$page['sidebar'] 	  = $this->load->view('template/sidebar', $data, TRUE);
		$page['main_content'] = $this->load->view('content/contact/contact', $data, TRUE);

		//Show Layout
		$this->load->view('template/layout', $page);
	}
}
