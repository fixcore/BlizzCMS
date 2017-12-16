<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arena_model extends CI_Model {

    public function __construct()
    {
        $this->characters = $this->load->database('characters', TRUE);
        parent::__construct();
    }

    public function getTopArena2v2()
    {
    	return $this->characters->query("SELECT rating, seasonWins, arenaTeamId, name FROM arena_team WHERE type = '2' ORDER BY rating DESC LIMIT 10");
    }

    public function getTopArena3v3()
    {
    	return $this->characters->query("SELECT rating, seasonWins, arenaTeamId, name FROM arena_team WHERE type = '3' ORDER BY rating DESC LIMIT 10");
    }

    public function getTopArena5v5()
    {
    	return $this->characters->query("SELECT rating, seasonWins, arenaTeamId, name FROM arena_team WHERE type = '5' ORDER BY rating DESC LIMIT 10");
    }

    public function getMemberTeam($id)
    {
    	return $this->characters->query("SELECT * FROM arena_team_member WHERE arenaTeamId = '".$id."'");
    }

    public function getRaceGuid($id)
    {
        return $this->characters->query("SELECT race FROM characters WHERE guid = '".$id."'")->row_array()['race'];
    }

    public function getNameGuid($id)
    {
    	return $this->characters->query("SELECT name FROM characters WHERE guid = '".$id."'")->row_array()['name'];
    }
}
