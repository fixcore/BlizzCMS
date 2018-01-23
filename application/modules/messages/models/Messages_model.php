<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getGroupsUsersPM($id)
    {
    	return $this->db->select('author')
    			->where('from', $id)
    			->group_by('author')
    			->get('fx_messages');
    }

    public function getMessagesSpecificAuthor($id, $me)
    {
    	return $this->db->select('*')
    			->where('author ='.$id.' AND from = '. $me)
    			->or_where('author ='.$me.' AND from = '. $id)
    			->order_by('id', 'DESC')
    			->get('fx_messages');
    }

    public function insertReply($me, $id, $message)
    {
    	$data = array(
    		'author' => $me,
    		'from' => $id,
    		'message' => $message,
    		'date' => $this->m_data->getTimestamp()
    	);

    	$notification = array(
    		'author' => $id
    	);

    	$this->db->insert('fx_messages', $data);
    	$this->db->insert('fx_messages_notify', $notification);
    	redirect(base_url('pm'),'refresh');
    }

    public function getNotifyRows($id)
    {
    	return $this->db->select('id')
    			->where('author', $id)
    			->get('fx_messages_notify')
    			->num_rows();
    }

    public function verify($id)
    {
    	$this->db->where('author', $id)
    			->delete('fx_messages_notify');
    	redirect(base_url('pm'),'refresh');
    }

}