<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changelogs_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->select('id')
            ->get('fx_changelogs');
    }

    public function getChangelogs()
    {
        return $this->db->select('id, title, image, date')
                ->order_by('id', 'DESC')
                ->limit('20')
                ->get('fx_changelogs');
    }

    public function getLastID()
    {
        return $this->db->select('id')
                ->order_by('id', 'DESC')
                ->get('fx_changelogs')
                ->row('id');
    }

    public function getChanglogTitle($id)
    {
        return $this->db->select('title')
                ->where('id', $id)
                ->get('fx_changelogs')
                ->row_array()['title'];
    }

    public function getChanglogImage($id)
    {
        return $this->db->select('image')
                ->where('id', $id)
                ->get('fx_changelogs')
                ->row_array()['image'];
    }

    public function getChanglogDate($id)
    {
        return $this->db->select('date')
                ->where('id', $id)
                ->get('fx_changelogs')
                ->row('date');
    }

    public function getChanglogDesc($id)
    {
        return $this->db->select('description')
                ->where('id', $id)
                ->get('fx_changelogs')
                ->row_array()['description'];
    }
}
