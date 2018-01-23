<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_permissions extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    private function getUserIDRank($id)
    {
        return $this->db->select('permission')
                ->where('id', $id)
                ->get('fx_ranks')
                ->row('permission');
    }

    public function getRankGroupSpecifyPermission($id)
    {
        $qq = $this->db->select('id_default')
                ->where('id', $id)
                ->get('fx_ranks_groups');

        if ($qq->num_rows())
            return true;
        else
            return false;
    }
}
