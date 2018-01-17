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
        return $this->characters->select('rating, seasonWins, arenaTeamId, name')
                ->where('type', '2')
                ->order_by('rating', 'DESC')
                ->limit('10')
                ->get('arena_team');
    }

    public function getTopArena3v3()
    {
        return $this->characters->select('rating, seasonWins, arenaTeamId, name')
                ->where('type', '3')
                ->order_by('rating', 'DESC')
                ->limit('10')
                ->get('arena_team');
    }

    public function getTopArena5v5()
    {
        return $this->characters->select('rating, seasonWins, arenaTeamId, name')
                ->where('type', '5')
                ->order_by('rating', 'DESC')
                ->limit('10')
                ->get('arena_team');
    }

    public function getMemberTeam($id)
    {
        return $this->characters->select('*')
                ->where('arenaTeamId', $id)
                ->get('arena_team_member');
    }

    public function getRaceGuid($id)
    {
        return $this->characters->select('race')
                ->where('guid', $id)
                ->get('characters')
                ->row_array()['race'];
    }

    public function getNameGuid($id)
    {
        return $this->characters->select('name')
                ->where('guid', $id)
                ->get('characters')
                ->row_array()['name'];
    }
}
