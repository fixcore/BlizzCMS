<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getEventsLimitFive()
	{
		return $this->db->query("SELECT * FROM fx_events ORDER BY id DESC LIMIT 5");
	}
}