<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		# Check Session
		# if (empty($this->session->userdata('puserId'))) {
		# 	redirect('auth/login');
		# }

		$this->load->model('Mcompany', 'model');
	}

	public function index()
	{

		# Define data buat di load di view
		$data = array(
			'header' 		=> 'Companies',
			'name_menu'		=> 'Masters Menu',
			'is_dashboard' 	=> FALSE,
			'companies'		=> $this->model->getCompanyTable(),
		);

		# Define path JS file
		$js = array(
			'company' => 'content/company/company.js',
		);

		# Define path modal file
		$modals = array(
			'add_modal'    => $this->load->view('content/company/add_company', $data, TRUE),
			'delete_modal' => $this->load->view('content/company/delete_company', $data, TRUE)
		);

		# Define apa yg mau di load di view
		$page['JS']	 	 	  = $js;
		$page['modals']	 	  = $modals;
		$page['sidebar'] 	  = $this->load->view('template/sidebar', $data, TRUE);
		$page['main_content'] = $this->load->view('content/company/company', $data, TRUE);

		# Show Layout
		$this->load->view('template/layout', $page);
	}

	public function insert_db()
	{

		# Parsing form yg dari ajax JS
		$form = array();
		parse_str($this->input->post('form'), $form);

		# Validation
		$this->validation_form($form);

		# Pengkondisian untuk mengecek apakah perlu generate UUID atau ngambil id yg sudah ada
		if ($form['company_id'] == '') : # Action Add
			$id_company = $this->db->query("SELECT UUID() AS uuid")->row_array()['uuid'];
		else :
			$id_company = $form['company_id']; # Action Update
		endif;

		# Define payload buat disimpan ke db
		$payload = array(
			't_company_id' 			=> $id_company,
			'company_name' 			=> $form['company_name'],
			'company_phone' 		=> $form['company_phone'],
			'company_email' 		=> $form['company_email'],
			'company_website' 		=> $form['company_website'],
			'company_address' 		=> $form['company_address'],
			'company_type' 			=> $form['company_type'],
			'company_description' 	=> $form['company_description'],
			'created_by' 			=> 10,
		);

		# Pengkondisian untuk menyimpan payload ke db
		if ($form['company_id'] == '') : # Action Save
			$query  = $this->db->insert('t_company', $payload);
			$action = 'created';
		else : # Action Update
			$query  = $this->db
				->set($payload)
				->where('t_company_id', $id_company)
				->update('t_company');
			$action = 'updated';
		endif;

		# Show Notification
		$this->show_notification($query, $action);
	}

	public function get_form_data()
	{
		$id      = $this->input->post('id');
		$query   = $this->db->get_where('t_company', ['t_company_id' => $id]);
		$result  = $query->row_array();

		echo json_encode($result);
	}

	public function delete_db()
	{
		$id    = $this->input->post('id');
		$query = $this->db
			->set('is_delete', true)
			->where('t_company_id', $id)
			->update('t_company');

		# Show Notification
		$this->show_notification($query, 'deleted');
	}

	private function validation_form($form)
	{

		$required = array();
		$validate = array();
		$validate['field'] 	 = array();
		$validate['message'] = array();
		$validate['status']  = TRUE;

		$is_not_required = array(
			'company_id'		  => $form['company_id'],
			'company_website' 	  => $form['company_website'],
			'company_description' => $form['company_description']
		);

		foreach ($form as $key => $val) :
			# Jika ada kolom yg tidak mandatory maka kolom tsb tidak perlu di validasi
			if (array_key_exists($key, $is_not_required)) {
				unset($form[$key]);
				$required = $form;
			}
		endforeach;

		foreach ($required as $key => $value) :
			# Mengubah simbol _ menjadi format tertentu
			$check 	  = strpos($key, '_');
			$message  = $check ? ucfirst(str_replace("_", " ", $key)) : $key;

			# Memunculkan keterangan error form dan border merah
			if ($value == '') {
				$validate['field'][]   = "$key";
				$validate['message'][] = '- ' . "$message" . ' column is required -';
				$validate['status']    = FALSE;
			}
		endforeach;

		/* ======= EXIT Jika status validasi FALSE ======= */
		if ($validate['status'] === FALSE) {
			echo json_encode($validate);
			exit();
		}
	}

	private function show_notification($res_query, $action)
	{

		if ($res_query) :
			$notification = array(
				'status'    => TRUE,
				'icon'      => 'success',
				'title'     => 'Success!',
				'message'   => 'Company data is ' . $action . ' successfully'
			);
		else :
			$notification = array(
				'status'    => FALSE,
				'icon'      => 'error',
				'title'     => 'Error!',
				'message'   => 'Company data is failed to  ' . $action . ' '
			);
		endif;

		echo json_encode($notification);
	}
}
