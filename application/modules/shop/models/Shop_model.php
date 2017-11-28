<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getShopTop10()
	{
		return $this->db->query("SELECT id_shop FROM fx_shop_top ORDER BY id DESC LIMIT 10");
	}
}