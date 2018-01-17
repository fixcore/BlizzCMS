<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getName($id)
    {
        return $this->db->select('title')
                ->where('id', $id)
                ->get('fx_pages')
                ->row_array()['title'];
    }

    public function getDesc($id)
    {
        return $this->db->select('description')
                ->where('id', $id)
                ->get('fx_pages')
                ->row_array()['description'];
    }

    public function getDate($id)
    {
        return $this->db->select('date')
                ->where('id', $id)
                ->get('fx_pages')
                ->row_array()['date'];
    }

    public function getVerifyExist($id)
    {
        return $this->db->select('id')
                ->where('id', $id)
                ->get('fx_pages')
                ->num_rows();
    }
}
