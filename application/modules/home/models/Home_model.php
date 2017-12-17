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

    public function getDiscordInfo()
    {
    	$invitation = $this->config->item('discord_inv');
    	$discord = file_get_contents('https://discordapp.com/api/v6/invite/'.$invitation.'?with_counts=true');
    	$vars = json_decode($discord, true);
    	return $vars;
    }
}
