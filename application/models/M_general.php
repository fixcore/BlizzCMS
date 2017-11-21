<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_general extends CI_Model {

	public function getSlides()
	{
		return $this->db->query("SELECT * FROM fx_slides");
	}

	public function getShopTop10()
	{
		return $this->db->query("SELECT id_shop FROM fx_shop_top ORDER BY id DESC LIMIT 10");
	}

	public function getGmCount()
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT id FROM account_access")->num_rows();
	}

	public function getGmSpecify($id)
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT id FROM account_access WHERE id = '".$id."'");
	}

	public function createNewADM($title, $image, $description, $type)
	{
		$date = $this->m_data->getTimestamp();
		$this->db->query("INSERT INTO fx_news (title, image, description, date) VALUES ('$title', '$image', '$description', '$date')");

		if ($type == 2) {
			$id = $this->getNewIDperTitle($date);
			$this->db->query("INSERT INTO fx_news_top (id_new) VALUES ($id)");
		}

		redirect(base_url(),'refresh');
	}

	public function getNewIDperTitle($date)
	{
		$qq = $this->db->query("SELECT id FROM fx_news WHERE date = '".$date."'");
		foreach ($qq->result() as $row) {
			return $row->id;
		}
	}

	public function getAdminCharactersList()
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT guid, account, name FROM characters ORDER BY name ASC");
	}

	public function getAnnotationsSpecify($id)
	{
		return $this->db->query("SELECT * FROM fx_users_annotations WHERE iduser = '".$id."'");
	}

	public function insertBanAcc($iduser, $reason)
	{
		$this->db = $this->load->database('default', TRUE);
		$this->auth = $this->load->database('auth', TRUE);
		
		$date = $this->m_data->getTimestamp();
		$id   = $this->session->userdata('fx_sess_id');

		if (empty($reason))
			$reason = $this->lang->line('was_ban');

		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$iduser', '$reason', '$date')");

		$this->auth->query("INSERT INTO account_banned (id, bandate, unbandate, bannedby, banreason) VALUES ('$iduser', '$date', '$date', '$id','$reason')");

		redirect(base_url().'admin/alist/'.$iduser,'refresh');
	}

	public function getRemoveADMRank($id)
	{
		$this->db->query("DELETE FROM fx_ranks WHERE id = '".$id."'");

		$date = $this->m_data->getTimestamp();
		$reason = $this->lang->line('remove_addmAnnoW');
		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function getGeneralCharactersSpecifyAcc($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT * FROM characters WHERE account = '".$id."'");
	}

	public function getSpecifyQuestion($id)
	{
		$qq = $this->db->query("SELECT question FROM fx_questions WHERE id = '".$id."'");
		foreach ($qq->result() as $row) {
			return $row->question;
		}
	}

	public function getUserInfoGeneral($id)
	{
		return $this->db->query("SELECT * FROM fx_users WHERE id = '".$id."'");
	}

	public function getADDADMRank($id)
	{
		$this->db->query("INSERT INTO fx_ranks (id, permission) VALUES ('$id', '1')");

		$date = $this->m_data->getTimestamp();
		$reason = $this->lang->line('receive_addmAnnoW');
		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function inserUnBanAcc($id)
	{
		$this->auth = $this->load->database('auth', TRUE);
		$this->auth->query("DELETE FROM account_banned WHERE id = $id");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function removeRankAcc($id)
	{
		$this->auth = $this->load->database('auth', TRUE);
		$this->auth->query("DELETE FROM account_access WHERE id = $id");

		$date = $this->m_data->getTimestamp();
		$reason = $this->lang->line('remove_gmAnnotation');

		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function insertRankAcc($id, $gmlevel)
	{
		$this->auth = $this->load->database('auth', TRUE);
		$this->auth->query("INSERT INTO account_access (id, gmlevel, RealmID) VALUES ('$id', '$gmlevel', '-1')");

		$date = $this->m_data->getTimestamp();
		$reason = $this->lang->line('receive_gmAnno');

		$this->db->query("INSERT INTO fx_users_annotations (iduser, annotation, date) VALUES ('$id', '$reason', '$date')");

		redirect(base_url().'admin/alist/'.$id,'refresh');
	}

	public function getAccountExist($id)
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT * FROM account WHERE id = '".$id."'");
	}

	public function getAdminAccountsList()
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT id, username, email FROM account ORDER BY username ASC");
	}

	public function getBanCount()
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT id FROM account_banned")->num_rows();
	}

	public function getBanSpecify($id)
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT * FROM account_banned WHERE id = '".$id."'");
	}

	public function getAccCreated()
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT id FROM account")->num_rows();
	}

	public function getShopID($id)
	{
		return $this->db->query("SELECT * FROM fx_shop WHERE id = '".$id."'");
	}

	public function getCharOn()
	{
    	$this->characters = $this->load->database('characters', TRUE);
    	$qq = $this->characters->query("SELECT * FROM characters WHERE online = 1");

    	return $qq->num_rows();
	}

	public function getPermissions($id)
	{
		$qq = $this->db->query("SELECT permission FROM fx_ranks WHERE id = '".$id."'");
		foreach ($qq->result() as $row) {
			return $row->permission;
		}
	}

	public function getPrincipalNew()
	{
		$qq = $this->db->query("SELECT * FROM fx_news_top ORDER BY id DESC LIMIT 1");

		foreach ($qq->result() as $row) {
			return $row->id_new;
		}
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

	public function getNewsTopsList()
	{
		return $this->db->query("SELECT id_new FROM fx_news_top ORDER BY id DESC LIMIT 5");
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

	public function getEventsLimitFive()
	{
		return $this->db->query("SELECT * FROM fx_events ORDER BY id DESC LIMIT 5");
	}

	public function getMonth($id)
	{
		switch ($id) {
			case 1: 	return $this->lang->line('month_January'); 		break;
			case 2: 	return $this->lang->line('month_February'); 	break;
			case 3: 	return $this->lang->line('month_March'); 		break;
			case 4: 	return $this->lang->line('month_April'); 		break;
			case 5: 	return $this->lang->line('month_May'); 			break;
			case 6: 	return $this->lang->line('month_June'); 		break;
			case 7: 	return $this->lang->line('month_July'); 		break;
			case 8: 	return $this->lang->line('month_August'); 		break;
			case 9: 	return $this->lang->line('month_September');	break;
			case 10: 	return $this->lang->line('month_October'); 		break;
			case 11: 	return $this->lang->line('month_November');		break;
			case 12: 	return $this->lang->line('month_December');		break;
		}
	}

	public function getExpansionAction()
	{
		$expansion = $this->config->item('expansion_id');
		switch ($expansion) {
			case 1: return "1"; break;
			case 2: return "1"; break;
			case 3: return "1"; break;
			case 4: return "1"; break;
			case 5: return "1"; break;
			case 6: return "2"; break;
			case 7: return "2"; break;
			case 8: return "2"; break;
		}
	}

	public function getRealExpansionDB()
	{
		$expansion = $this->config->item('expansion_id');
		switch ($expansion) {
			case 1: return "0"; break;
			case 2: return "1"; break;
			case 3: return "2"; break;
			case 4: return "3"; break;
			case 5: return "4"; break;
			case 6: return "5"; break;
			case 7: return "6"; break;
			case 8: return "7"; break;
		}
	}

	public function getRaceName($race)
    {
        switch ($race)
        {
            case 1: 	return $this->lang->line('race_human'); 		break;
            case 2: 	return $this->lang->line('race_orc'); 			break;
            case 3: 	return $this->lang->line('race_dwarf'); 		break;
            case 4: 	return $this->lang->line('race_night_elf'); 	break;
            case 5: 	return $this->lang->line('race_undead'); 		break;
            case 6: 	return $this->lang->line('race_tauren'); 		break;
            case 7: 	return $this->lang->line('race_gnome'); 		break;
            case 8: 	return $this->lang->line('race_troll'); 		break;
            case 9: 	return $this->lang->line('race_goblin'); 		break;
            case 10: 	return $this->lang->line('race_blood_elf'); 	break;
            case 11: 	return $this->lang->line('race_draenei'); 		break;
            case 22: 	return $this->lang->line('race_worgen'); 		break;
            case 24: 	return $this->lang->line('race_panda_neutral'); break;
            case 25: 	return $this->lang->line('race_panda_alli'); 	break;
            case 26: 	return $this->lang->line('race_panda_horde'); 	break;
        }
    }

    public function getNameClass($class)
    {
        switch ($class) 
        {
            case 1: 	return $this->lang->line('class_warrior'); 		break;
            case 2: 	return $this->lang->line('class_paladin'); 		break;
            case 3: 	return $this->lang->line('class_hunter'); 		break;
            case 4: 	return $this->lang->line('class_rogue'); 		break;
            case 5: 	return $this->lang->line('class_priest'); 		break;
            case 6: 	return $this->lang->line('class_dk'); 			break;
            case 7: 	return $this->lang->line('class_shamman'); 		break;
            case 8: 	return $this->lang->line('class_mage'); 		break;
            case 9: 	return $this->lang->line('class_warlock'); 		break;
            case 10: 	return $this->lang->line('class_monk'); 		break;
            case 11: 	return $this->lang->line('class_druid');  		break;
            case 12: 	return $this->lang->line('class_demonhunter'); 	break;
        	}
    }

    public function getGender($gender)
    {
        switch ($gender) 
        {
            case 0: return $this->lang->line('gender_male'); 	break;
            case 1: return $this->lang->line('gender_female'); 	break;
        }
    }
}
