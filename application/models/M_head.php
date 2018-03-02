<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_head extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getImageItem($id)
    {
    	return $this->db->select('icon_name')
    			->where('item_id', $id)
    			->get('fx_head_items')
    			->row_array()['icon_name'];
    }

    public function getHtmlTooltip($lang, $id)
    {
    	return $this->db->select('htmlTooltip_'.$lang)
    			->where('id', $id)
    			->get('fx_head_items_local')
    			->row_array()['htmlTooltip_'.$lang];
    }

}
