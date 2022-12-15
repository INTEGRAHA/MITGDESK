<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{

	public function index()
	{

		//Define data buat di load di view
		$data = array(
			'header' 		=> 'Forum',
			'name_menu'		=> 'Contents Menu',
			'is_dashboard' 	=> FALSE
		);

		//Define path JS file
		$js = array(
			'form' => 'content/forum/form.js',
			'ajax' => 'content/forum/ajax.js',
		);

		//Define path modal file
		$modals = array(
			'add_modal'    => $this->load->view('content/forum/add_forum', $data, TRUE),
			'delete_modal' => $this->load->view('content/forum/delete_forum', $data, TRUE)
		);

		//Define apa yg mau di load di view
		$page['JS']	 	 	  = $js;
		$page['modals']	 	  = $modals;
		$page['sidebar'] 	  = $this->load->view('template/sidebar', $data, TRUE);
		$page['main_content'] = $this->load->view('content/forum/forum', $data, TRUE);

		//Show Layout
		$this->load->view('template/layout', $page);
	}
}
