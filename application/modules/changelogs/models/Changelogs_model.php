<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changelogs_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getChangelogs()
    {
        return $this->db->query("SELECT title, id, date FROM fx_changelogs ORDER BY id DESC LIMIT 20");
    }

    public function getLastID()
    {
        return $this->db->query("SELECT id FROM fx_changelogs ORDER BY id DESC LIMIT 1")->row()->id;
    }

    public function getChanglogTitle($id)
    {
        return $this->db->query("SELECT title FROM fx_changelogs WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getChanglogDate($id)
    {
        return $this->db->query("SELECT date FROM fx_changelogs WHERE id = '".$id."'")->row()->date;
    }

    public function getChanglogDesc($id)
    {
        return $this->db->query("SELECT description FROM fx_changelogs WHERE id = '".$id."'")->row_array()['description'];
    }
}
