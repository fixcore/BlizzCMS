<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->auth = $this->load->database('auth', TRUE);
	}

	public function changePasswordI($id, $password)
	{
		$this->auth->query("UPDATE account SET sha_pass_hash = '$password' WHERE id = '$id'");
		redirect(base_url('user/logout'),'refresh');
	}

	public function changePasswordII($id, $password, $passbnet)
	{
		$this->auth->query("UPDATE account SET sha_pass_hash = '$password' WHERE id = '$id'");
		$this->auth->query("UPDATE battlenet_accounts SET sha_pass_hash = '$passbnet' WHERE id = '$id'");
		redirect(base_url('user/logout'),'refresh');
	}

}