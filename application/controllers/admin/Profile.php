<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model("admin/Profile_model", 'Profile_model');
		if ($this->session->userdata("logged_in") !== "admin") {
			redirect("/");
		}
	}

	public function _getLoginInfo()
	{
		return $this->db->get_where("admins", ["email" => $this->session->userdata("email")])->row_array();
	}

}
