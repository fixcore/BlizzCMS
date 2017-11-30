<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getSlides()
    {
        return $this->db->query("SELECT * FROM fx_slides ORDER BY id ASC");
    }
}
