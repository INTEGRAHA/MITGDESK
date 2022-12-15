<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Mcompany extends CI_Model
{
	public function getCompanyTable()
	{
		return $this->db
			->select('t_company_id, company_name, company_phone, company_email, company_address')
			->where('is_delete', FALSE)
			->get('t_company')
			->result_array();
	}
}
