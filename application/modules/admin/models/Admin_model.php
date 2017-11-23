<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->auth = $this->load->database('auth', TRUE);
		$this->characters = $this->load->database('characters', TRUE);
		parent::__construct();
	}

	public function getAdminAccountsList()
	{
		return $this->auth->query("SELECT id, username, email FROM account ORDER BY id ASC");
	}

	public function getRemoveADMRank($id)
	{
		$this->db->query("DELETE FROM fx_ranks WHERE id = '".$id."'");

		$date 	= $this->m_data->getTimestamp();
		$reason = $this->lang->line('remove_addmAnnoW');
		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function getADDADMRank($id)
	{
		$this->db->query("INSERT INTO fx_ranks (id, permission) VALUES ('$id', '1')");

		$date 	= $this->m_data->getTimestamp();
		$reason = $this->lang->line('receive_addmAnnoW');
		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function getAdminCharactersList()
	{
		return $this->characters->query("SELECT guid, account, name FROM characters ORDER BY name ASC");
	}

	public function insertBanChar($id, $reason)
	{
		$date 		= $this->m_data->getTimestamp();
		$idsession	= $this->session->userdata('fx_sess_id');

		if (empty($reason))
			$reason = $this->lang->line('was_ban');

		$this->db->query("INSERT INTO fx_chars_annotations (idchar, annotation, date) VALUES ('$id', '$reason', '$date')");

		$this->characters->query("INSERT INTO character_banned (guid, bandate, unbandate, bannedby, banreason) VALUES ('$id', '$date', '$date', '$idsession','$reason')");

		redirect(base_url().'admin/clist/'.$id,'refresh');
	}

	public function insertCustomizeChar($id)
	{
		if ($this->m_general->getCharActive($id) == 1)
			redirect(base_url().'admin/clist/'.$id.'?char','refresh');

		$date 		= $this->m_data->getTimestamp();
		$annotation = $this->lang->line('char_customAction');
		$this->db->query("INSERT INTO fx_chars_annotations (idchar, annotation, date) VALUES ('$id', '$annotation', '$date')");

		$this->characters = $this->load->database('characters', TRUE);
		$this->characters->query("UPDATE characters SET at_login = 8 WHERE guid= '$id'");

		redirect(base_url().'admin/clist/'.$id,'refresh');
	}

	public function getAdminNewsList()
	{
		return $this->db->query("SELECT id, title, date FROM fx_news ORDER BY id ASC");
	}

	public function createNewADM($title, $image, $description, $type)
	{
		$date = $this->m_data->getTimestamp();
		$this->db->query("INSERT INTO fx_news (title, image, description, date) VALUES ('$title', '$image', '$description', '$date')");

		if ($type == 2)
		{
			$id = $this->m_general->getNewIDperTitle($date);
			$this->db->query("INSERT INTO fx_news_top (id_new) VALUES ($id)");
		}

		redirect(base_url(),'refresh');
	}

	public function insertChangeFactionChar($id)
	{
		if ($this->m_general->getCharActive($id) == 1)
			redirect(base_url().'admin/clist/'.$id.'?char','refresh');

		$date 		= $this->m_data->getTimestamp();
		$annotation = $this->lang->line('char_chanfactAction');
		$this->db->query("INSERT INTO fx_chars_annotations (idchar, annotation, date) VALUES ('$id', '$annotation', '$date')");

		$this->characters->query("UPDATE characters SET at_login = 64 WHERE guid= '$id'");

		redirect(base_url().'admin/clist/'.$id,'refresh');
	}

	public function insertChangeRaceChar($id)
	{
		if ($this->m_general->getCharActive($id) == 1)
			redirect(base_url().'admin/clist/'.$id.'?char','refresh');

		$date 		= $this->m_data->getTimestamp();
		$annotation = $this->lang->line('char_chanraceAction');
		$this->db->query("INSERT INTO fx_chars_annotations (idchar, annotation, date) VALUES ('$id', '$annotation', '$date')");

		$this->characters->query("UPDATE characters SET at_login = 128 WHERE guid= '$id'");

		redirect(base_url().'admin/clist/'.$id,'refresh');
	}

	public function insertUnbanChar($id)
	{
		$this->characters->query("DELETE FROM character_banned WHERE guid = '".$id."'");

		$date 		= $this->m_data->getTimestamp();
		$annotation = $this->lang->line('unbanned');
		$this->db->query("INSERT INTO fx_chars_annotations (idchar, annotation, date) VALUES ('$id', '$annotation', '$date')");

		redirect(base_url().'admin/clist/'.$id,'refresh');
	}

	public function insertCharRename($id, $name)
	{
		if ($this->m_general->getCharActive($id) == 1)
			redirect(base_url().'admin/clist/'.$id.'?char','refresh');

		if ($this->m_general->getCharNameAlreadyExist($name)->num_rows() > 0)
			redirect(base_url().'admin/clist/'.$id.'?name','refresh');

		$date 		= $this->m_data->getTimestamp();
		$annotation = $this->lang->line('char_newname').' -> '.$name.' | '.$this->lang->line('char_oldname').' -> '.$this->m_general->getCharName($id);
		
		$this->db->query("INSERT INTO fx_chars_annotations (idchar, annotation, date) VALUES ('$id', '$annotation', '$date')");

		$this->characters->query("UPDATE characters SET name = '$name' WHERE guid = $id");

		redirect(base_url().'admin/clist/'.$id,'refresh');
	}

	public function insertChangeLevelChar($id, $level)
	{
		if ($this->m_general->getCharActive($id) == 1)
			redirect(base_url().'admin/clist/'.$id.'?char','refresh');

		$date 		= $this->m_data->getTimestamp();
		$annotation = $this->lang->line('char_newlevel').' -> '.$level.' | '.$this->lang->line('char_oldlevel').' -> '.$this->m_general->getCharLevel($id);
		
		$this->db->query("INSERT INTO fx_chars_annotations (idchar, annotation, date) VALUES ('$id', '$annotation', '$date')");

		$this->characters = $this->load->database('characters', TRUE);
		$this->characters->query("UPDATE characters SET level = $level WHERE guid = $id");

		redirect(base_url().'admin/clist/'.$id,'refresh');
	}

	public function getAnnotationsSpecifyChar($id)
	{
		return $this->db->query("SELECT * FROM fx_chars_annotations WHERE idchar = '".$id."'");
	}

	public function insertRankAcc($id, $gmlevel)
	{
		$this->auth->query("INSERT INTO account_access (id, gmlevel, RealmID) VALUES ('$id', '$gmlevel', '-1')");

		$date 	= $this->m_data->getTimestamp();
		$reason = $this->lang->line('receive_gmAnno');

		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function getAnnotationsSpecify($id)
	{
		return $this->db->query("SELECT * FROM fx_users_annotations WHERE iduser = '".$id."'");
	}

	public function inserUnBanAcc($id)
	{
		$date = $this->m_data->getTimestamp();

		if (empty($reason))
			$reason = $this->lang->line('unbanned');

		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		$this->auth->query("DELETE FROM account_banned WHERE id = $id");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function removeRankAcc($id)
	{
		$this->auth->query("DELETE FROM account_access WHERE id = $id");

		$date 	= $this->m_data->getTimestamp();
		$reason = $this->lang->line('remove_gmAnnotation');

		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function insertBanAcc($iduser, $reason)
	{
		$date = $this->m_data->getTimestamp();
		$id   = $this->session->userdata('fx_sess_id');

		if (empty($reason))
			$reason = $this->lang->line('was_ban');

		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$iduser', '$reason', '$date')");

		$this->auth->query("INSERT INTO account_banned (id, bandate, unbandate, bannedby, banreason) VALUES ('$iduser', '$date', '$date', '$id','$reason')");

		redirect(base_url().'admin/alist/'.$iduser,'refresh');
	}

	public function getBanCount()
	{
		return $this->auth->query("SELECT id FROM account_banned")->num_rows();
	}

	public function getBanSpecify($id)
	{
		return $this->auth->query("SELECT * FROM account_banned WHERE id = '".$id."'");
	}

	public function getGmCount()
	{
		return $this->auth->query("SELECT id FROM account_access")->num_rows();
	}

	public function getAccCreated()
	{
		return $this->auth->query("SELECT id FROM account")->num_rows();
	}

	public function getCharOn()
	{
    	return $this->characters->query("SELECT * FROM characters WHERE online = 1")->num_rows();
	}
}