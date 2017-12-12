<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pvp_model extends CI_Model {

    public function __construct()
    {
        $this->characters = $this->load->database('characters', TRUE);
        parent::__construct();
    }

    public function getTop20PVP()
    {
    	return $this->characters->query("SELECT name, race, totalKills, todayKills, yesterdayKills FROM characters ORDER BY totalKills DESC LIMIT 20");
    }

}
