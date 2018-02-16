<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insertComment($commentary, $idlink, $idsession)
    {
        $date = $this->m_data->getTimestamp();

        $data = array(
        'id_new' => $idlink,
        'commentary' => $commentary,
        'date' => $date,
        'author' => $idsession,
        );

        $this->db->insert('fx_news_comments', $data);

        redirect(base_url('news/'.$idlink),'refresh');
    }

    public function removeComment($id, $link)
    {
        $this->db->where('id', $id)
            ->delete('fx_news_comments');

        redirect(base_url('news/'.$link),'refresh');
    }

    public function getComments($idlink)
    {
        return $this->db->select('*')
                ->where('id_new', $idlink)
                ->get('fx_news_comments');
    }

    public function getNewTitle($id)
    {
        return $this->db->select('title')
                ->where('id', $id)
                ->get('fx_news')
                ->row_array()['title'];
    }

    public function getNewImage($id)
    {
        return $this->db->select('image')
                ->where('id', $id)
                ->get('fx_news')
                ->row_array()['image'];
    }

    public function getNewDescription($id)
    {
        return $this->db->select('description')
                ->where('id', $id)
                ->get('fx_news')
                ->row_array()['description'];
    }

    public function getNewlogDate($id)
    {
        return $this->db->select('date')
                ->where('id', $id)
                ->get('fx_news')
                ->row('date');
    }

    public function getCommentCount($id)
    {
        return $this->db->select('id')
                ->where('id_new', $id)
                ->get('fx_news_comments');
    }

    public function getNewSpecifyID($id)
    {
        return $this->db->select('*')
                ->where('id', $id)
                ->get('fx_news');
    }

    public function getNewsTree()
    {
        return $this->db->select('*')
                ->order_by('id', 'DESC')
                ->limit('3')
                ->get('fx_news');
    }

    public function getNewsList()
    {
        return $this->db->select('*')
                ->order_by('id', 'DESC')
                ->limit('30')
                ->get('fx_news');
    }

    public function getNewsTopsList()
    {
        return $this->db->select('id_new')
                ->order_by('id', 'DESC')
                ->limit('5')
                ->get('fx_news_top');
    }

    public function getPrincipalNew()
    {
        $qq = $this->db->select('id_new')
                ->order_by('id', 'DESC')
                ->limit('1')
                ->get('fx_news_top');

        if ($qq->num_rows())
            return $qq->row('id_new');
        else
            return false;
    }
}
