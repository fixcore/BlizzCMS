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

	public function getShopID($id)
	{
		return $this->db->query("SELECT * FROM fx_shop WHERE id = '".$id."'");
	}

	public function getPrincipalNew()
	{
		$qq = $this->db->query("SELECT * FROM fx_news_top ORDER BY id DESC LIMIT 1");

		foreach ($qq->result() as $row) {
			return $row->id_new;
		}
	}

	public function getNewSpecifyID($id)
	{
		return $this->db->query("SELECT * FROM fx_news WHERE id = '".$id."'");
	}

	public function getNewsTree()
	{
		return $this->db->query("SELECT * FROM fx_news ORDER BY id DESC LIMIT 3");
	}

	public function getEventsLimitFive()
	{
		return $this->db->query("SELECT * FROM fx_events ORDER BY id DESC LIMIT 5");
	}

	public function getMonth($id)
	{
		switch ($id) {
			case 1: return $this->lang->line('month_January'); break;
			case 2: return $this->lang->line('month_February'); break;
			case 3: return $this->lang->line('month_March'); break;
			case 4: return $this->lang->line('month_April'); break;
			case 5: return $this->lang->line('month_May'); break;
			case 6: return $this->lang->line('month_June'); break;
			case 7: return $this->lang->line('month_July'); break;
			case 8: return $this->lang->line('month_August'); break;
			case 9: return $this->lang->line('month_September'); break;
			case 10: return $this->lang->line('month_October'); break;
			case 11: return $this->lang->line('month_November'); break;
			case 12: return $this->lang->line('month_December'); break;
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
}
