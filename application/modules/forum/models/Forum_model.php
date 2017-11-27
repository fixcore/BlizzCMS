<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getCategory()
    {
      return $this->db->select('id, categoryName')->from('fx_forum_category')->get()->result();
    }

    public function getCategoryForums($category)
    {
      return $this->db->select('id, name, category, description, icon')->from('fx_forum_forums')->where('category', $category)->get()->result();
    }

    public function getCategoryName($id)
    {
    	return $this->db->query("SELECT name FROM fx_forum_forums WHERE id = '".$id."'")->row()->name;
    }

    public function getSpecifyCategoryPosts($id)
    {
    	return $this->db->query("SELECT * FROM fx_forum_topics WHERE forums = '".$id."'");
    }

    public function getSpecifyPostName($id)
    {
    	return $this->db->query("SELECT title FROM fx_forum_topics WHERE forums = '".$id."'")->row()->title;
    }

    public function getSpecifyPostAuthor($id)
    {
    	return $this->db->query("SELECT author FROM fx_forum_topics WHERE forums = '".$id."'")->row()->author;
    }

    public function getSpecifyPostDate($id)
    {
    	return $this->db->query("SELECT date FROM fx_forum_topics WHERE forums = '".$id."'")->row()->date;
    }

    public function getSpecifyPostContent($id)
    {
    	return $this->db->query("SELECT content FROM fx_forum_topics WHERE forums = '".$id."'")->row()->content;
    }

}