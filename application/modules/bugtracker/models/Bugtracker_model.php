<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bugtracker_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getBugtracker()
    {
    	return $this->db->query("SELECT * FROM fx_bugtracker WHERE close = 0");
    }

}
