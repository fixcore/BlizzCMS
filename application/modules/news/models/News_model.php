<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getNewTitle($id)
	{
		$qq = $this->db->query("SELECT title FROM fx_news WHERE id = '".$id."'");
		foreach ($qq->result() as $row) {
			return $row->title;
		}
	}

	public function getNewImage($id)
	{
		$qq = $this->db->query("SELECT image FROM fx_news WHERE id = '".$id."'");
		foreach ($qq->result() as $row) {
			return $row->image;
		}
	}

	public function getNewDescription($id)
	{
		$qq = $this->db->query("SELECT description FROM fx_news WHERE id = '".$id."'");
		foreach ($qq->result() as $row) {
			return $row->description;
		}
	}

	public function getCommentCount($id)
	{
		return $this->db->query("SELECT id FROM fx_news_comments WHERE id_new = '".$id."'");
	}

	public function getNewSpecifyID($id)
	{
		return $this->db->query("SELECT * FROM fx_news WHERE id = '".$id."'");
	}

	public function getNewsTree()
	{
		return $this->db->query("SELECT * FROM fx_news ORDER BY id DESC LIMIT 3");
	}

	public function getNewsList()
	{
		return $this->db->query("SELECT * FROM fx_news ORDER BY id DESC LIMIT 30");
	}

	public function getNewsTopsList()
	{
		return $this->db->query("SELECT id_new FROM fx_news_top ORDER BY id DESC LIMIT 5");
	}

	public function getPrincipalNew()
	{
		$qq = $this->db->query("SELECT * FROM fx_news_top ORDER BY id DESC LIMIT 1");

		foreach ($qq->result() as $row) {
			return $row->id_new;
		}
	}
}