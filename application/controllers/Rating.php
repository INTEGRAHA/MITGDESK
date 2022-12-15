<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
{

	public function index()
	{

		//Define data buat di load di view
		$data = array(
			'header' 		=> 'Rating',
			'name_menu'		=> 'Contents Menu',
			'is_dashboard' 	=> FALSE
		);

		//Define path JS file
		$js = array(
			'form' => 'content/rating/form.js',
			'ajax' => 'content/rating/ajax.js',
		);

		//Define path modal file
		$modals = array(
			'add_modal'    => $this->load->view('content/rating/add_rating', $data, TRUE),
			'delete_modal' => $this->load->view('content/rating/delete_rating', $data, TRUE)
		);

		//Define apa yg mau di load di view
		$page['JS']	 	 	  = $js;
		$page['modals']	 	  = $modals;
		$page['sidebar'] 	  = $this->load->view('template/sidebar', $data, TRUE);
		$page['main_content'] = $this->load->view('content/rating/rating', $data, TRUE);

		//Show Layout
		$this->load->view('template/layout', $page);
	}
}
