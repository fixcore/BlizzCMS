<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_general extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->auth = $this->load->database('auth', TRUE);
		$this->characters = $this->load->database('characters', TRUE);
	}

	public function getGmSpecify($id)
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT id FROM account_access WHERE id = '".$id."'");
	}

	public function getGeneralCharactersSpecifyAcc($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT * FROM characters WHERE account = '".$id."'");
	}

	public function getSpecifyQuestion($id)
	{
		return $this->db->query("SELECT question FROM fx_questions WHERE id = '".$id."'")->row()->question;
	}

	public function getUserInfoGeneral($id)
	{
		return $this->db->query("SELECT * FROM fx_users WHERE id = '".$id."'");
	}

	public function getAccountExist($id)
	{
		$this->auth = $this->load->database('auth', TRUE);
		return $this->auth->query("SELECT * FROM account WHERE id = '".$id."'");
	}

	public function getGeneralCharactersSpecifyGuid($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT * FROM characters WHERE guid = '".$id."'");
	}

	public function getNameCharacterSpecifyGuid($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT name FROM characters WHERE guid = '".$id."'")->row()->name;
	}

	public function getShopID($id)
	{
		return $this->db->query("SELECT * FROM fx_shop WHERE id = '".$id."'");
	}

	public function getPermissions($id)
	{
		return $this->db->query("SELECT permission FROM fx_ranks WHERE id = '".$id."'")->row()->permission;
	}

	public function getCharNameAlreadyExist($name)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT name FROM characters WHERE name = '".$name."'");
	}

	public function getCharBanSpecifyGuid($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT guid FROM character_banned WHERE guid = '".$id."' AND active = 1");
	}

	public function getCharName($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT name FROM characters WHERE guid = '".$id."'")->row()->name;
	}

	public function getCharLevel($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT level FROM characters WHERE guid = '".$id."'")->row()->level;
	}

	public function getCharActive($id)
	{
		$this->characters = $this->load->database('characters', TRUE);
		return $this->characters->query("SELECT online FROM characters WHERE guid = '".$id."'")->row()->online;
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

	public function getMaxLevel()
	{
		$expansion = $this->config->item('expansion_id');
		switch ($expansion) {
			case 1: return "60"; break;
			case 2: return "70"; break;
			case 3: return "80"; break;
			case 4: return "85"; break;
			case 5: return "90"; break;
			case 6: return "100"; break;
			case 7: return "110"; break;
			case 8: return "120"; break;
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

    public function getCharactersOnlineAlliance()
    {
    	$this->characters = $this->load->database('characters', TRUE);
    	return $this->characters->query("SELECT guid FROM characters WHERE online = 1 AND race = '1,3,4,7,11,22,25'")->num_rows();
    }

    public function getCharactersOnlineHorde()
    {
    	$this->characters = $this->load->database('characters', TRUE);
    	return $this->characters->query("SELECT guid FROM characters WHERE online = 1 AND race = '2,5,6,8,10,9,26'")->num_rows();
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
