<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

	public function index()
	{

		//Define data buat di load di view
		$data = array(
			'header' 		=> 'Tickets',
			'name_menu'		=> 'Contents Menu',
			'is_dashboard' 	=> FALSE
		);

		//Define path JS file
		$js = array(
			'form' => 'content/ticket/form.js',
			'ajax' => 'content/ticket/ajax.js',
		);

		//Define path modal file
		$modals = array(
			'add_modal'    => $this->load->view('content/ticket/add_ticket', $data, TRUE),
			'delete_modal' => $this->load->view('content/ticket/delete_ticket', $data, TRUE)
		);

		//Define apa yg mau di load di view
		$page['JS']	 	 	  = $js;
		$page['modals']	 	  = $modals;
		$page['sidebar'] 	  = $this->load->view('template/sidebar', $data, TRUE);
		$page['main_content'] = $this->load->view('content/ticket/ticket', $data, TRUE);

		//Show Layout
		$this->load->view('template/layout', $page);
	}
}
