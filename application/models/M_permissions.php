<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_permissions extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	private function getUserIDRank($id)
	{
		return $this->db->query("SELECT permission FROM fx_ranks WHERE id = '$id'")->row()->permission;
	}

	public function getRankGroupSpecifyPermission($id)
	{
		$qq = $this->db->query("SELECT id_default FROM fx_ranks_groups WHERE id = '$id'");

		if ($qq->num_rows() > 0)
			return true;
		else
			return false;
	}

}
