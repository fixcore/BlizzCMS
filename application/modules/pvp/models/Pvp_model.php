<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pvp_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getTop20PVP($MultiRealm)
    {
        $this->multirealm = $MultiRealm;
        
        return $this->multirealm->select('name, race, totalKills, todayKills, yesterdayKills')
        		->order_by('totalKills', 'DESC')
        		->limit('20')
        		->get('characters');
    }
}
