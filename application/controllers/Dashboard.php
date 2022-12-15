<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{

		//Define data buat di load di view
		$data = array(
			'header' 				=> 'Dashboard',
			'description_header' 	=> 'Summary your activity & performance',
			'is_dashboard' 			=> TRUE
		);

		//Define path JS file
		$js = array(
			'form' => 'content/company/form.js',
			'ajax' => 'content/company/ajax.js',
		);

		//Define path modal file
		$modals = array(
			'add_modal'    => $this->load->view('content/company/add_company', $data, TRUE),
			'delete_modal' => $this->load->view('content/company/delete_company', $data, TRUE)
		);

		//Define apa yg mau di load di view
		$page['JS']	 	 	  = $js;
		$page['modals']	 	  = $modals;
		$page['sidebar'] 	  = $this->load->view('template/sidebar', $data, TRUE);
		$page['main_content'] = $this->load->view('content/dashboard/dashboard', $data, TRUE);

		$this->load->view('template/layout', $page);
	}
}
