<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getName($id)
    {
        return $this->db->query("SELECT title FROM fx_pages WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getDesc($id)
    {
        return $this->db->query("SELECT description FROM fx_pages WHERE id = '".$id."'")->row_array()['description'];
    }

    public function getDate($id)
    {
        return $this->db->query("SELECT date FROM fx_pages WHERE id = '".$id."'")->row_array()['date'];
    }

    public function getVerifyExist($id)
    {
        return $this->db->query("SELECT id FROM fx_pages WHERE id = '".$id."'")->num_rows();
    }

}
