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

    public function insertComment($comment, $topic, $author)
    {
        $date = $this->m_data->getTimestamp();

        $this->db->query("INSERT INTO fx_forum_comments (topic, author, commentary, date) VALUES ('$topic' ,'$author' ,'$comment' ,'$date')");

        redirect(base_url('forums/topic/'.$topic),'refresh');
    }

    public function getComments($id)
    {
        return $this->db->query("SELECT * FROM fx_forum_comments WHERE topic = '".$id."'");
    }

    public function getCountPostAuthor($id)
    {
        return $this->db->query("SELECT author FROM fx_forum_topics WHERE author = '".$id."'")->num_rows();
    }

    public function removeComment($id, $link)
    {
        $this->db->query("DELETE FROM fx_forum_comments WHERE id = '$id'");
        redirect(base_url('forums/topic/').$link,'refresh');
    }

    public function getRowTopicExist($id)
    {
        return $this->db->query("SELECT id FROM fx_forum_topics WHERE id = '".$id."'")->num_rows();
    }

    public function insertTopic($idlink, $title, $userid, $description, $lock, $highl)
    {
        $date = $this->m_data->getTimestamp();

        $data = array(
        'forums' => $idlink,
        'title' => $title,
        'author' => $userid,
        'date' => $date,
        'content' => $description,
        'locked' => $lock,
        'pined' => $highl,
        );

        $this->db->insert('fx_forum_topics', $data);

        redirect(base_url('forums/category/').$idlink,'refresh');
    }

    public function getType($id)
    {
        return $this->db->query("SELECT type FROM fx_forum_forums WHERE id = '".$id."'")->row()->type;
    }

    public function getCategoryForums($category)
    {
        return $this->db->select('id, name, category, description, icon, type')->from('fx_forum_forums')->where('category', $category)->get()->result();
    }

    public function getCategoryName($id)
    {
        return $this->db->query("SELECT name FROM fx_forum_forums WHERE id = '".$id."'")->row()->name;
    }

    public function getForumName($id)
    {
        return $this->db->query("SELECT name FROM fx_forum_forums WHERE id = '".$id."'")->row_array()['name'];
    }

    public function getSpecifyCategoryPosts($id)
    {
        return $this->db->query("SELECT * FROM fx_forum_topics WHERE forums = '".$id."' ORDER BY id DESC");
    }

    public function getSpecifyCategoryPostsPined($id)
    {
        return $this->db->query("SELECT * FROM fx_forum_topics WHERE forums = '".$id."' AND pined = '1' ORDER BY id DESC");
    }

    public function getSpecifyPostName($id)
    {
        return $this->db->query("SELECT title FROM fx_forum_topics WHERE id = '".$id."'")->row()->title;
    }

    public function getSpecifyPostAuthor($id)
    {
        return $this->db->query("SELECT author FROM fx_forum_topics WHERE id = '".$id."'")->row()->author;
    }

    public function getSpecifyPostDate($id)
    {
        return $this->db->query("SELECT date FROM fx_forum_topics WHERE id = '".$id."'")->row()->date;
    }

    public function getSpecifyPostContent($id)
    {
        return $this->db->query("SELECT content FROM fx_forum_topics WHERE id = '".$id."'")->row()->content;
    }

    public function getTopicLocked($id)
    {
        return $this->db->query("SELECT locked FROM fx_forum_topics WHERE id = '".$id."'")->row()->locked;
    }

    public function getTopicForum($id)
    {
        return $this->db->query("SELECT forums FROM fx_forum_topics WHERE id = '".$id."'")->row()->forums;
    }
}
