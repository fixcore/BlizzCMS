<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getShopTop10()
    {
        return $this->db->query("SELECT id_shop FROM fx_shop_top ORDER BY id DESC LIMIT 10");
    }

    public function getExistItem($id)
    {
        return $this->db->query("SELECT * FROM fx_shop WHERE id = '".$id."'")->num_rows();
    }

    public function getType($id)
    {
        return $this->db->query("SELECT type FROM fx_shop WHERE id = '".$id."'")->row()->type;
    }

    public function getItem($id)
    {
        return $this->db->query("SELECT itemid FROM fx_shop WHERE id = '".$id."'")->row()->itemid;
    }

    public function getQuery($id)
    {
        return $this->db->query("SELECT qquery FROM fx_shop WHERE id = '".$id."'")->row()->qquery;
    }

    public function getIcon($id)
    {
        return $this->db->query("SELECT iconname FROM fx_shop WHERE id = '".$id."'")->row()->iconname;
    }

    public function getName($id)
    {
        return $this->db->query("SELECT name FROM fx_shop WHERE id = '".$id."'")->row_array()['name'];
    }

    public function getPriceType($id, $type)
    {
        if ($type == "dp")
            return $this->db->query("SELECT price_dp FROM fx_shop WHERE id = '".$id."'")->row()->price_dp;
        if ($type == "vp")
            return $this->db->query("SELECT price_vp FROM fx_shop WHERE id = '".$id."'")->row()->price_vp;
    }

    public function getVPTrue($id)
    {
        $qq = $this->db->query("SELECT price_vp FROM fx_shop WHERE id = '".$id."'")->row()->price_vp;
        if (!is_null($qq) && $qq > 0)
            return true;
        else
            redirect(base_url('store'),'refresh');
    }

    public function getDPTrue($id)
    {
        $qq = $this->db->query("SELECT price_dp FROM fx_shop WHERE id = '".$id."'")->row()->price_dp;
        if (!is_null($qq) && $qq > 0)
            return true;
        else
            redirect(base_url('store'),'refresh');
    }

    public function getShopGeneral()
    {
        if (isset($_GET['group']))
        {
            $gp = $_GET['group'];
            return $this->db->query("SELECT * FROM fx_shop WHERE groups = '".$gp."'");
        }
        else
            return $this->db->query("SELECT * FROM fx_shop");
    }

    public function getGroups()
    {
        return $this->db->query("SELECT * FROM fx_shop_groups");
    }

    public function getSpecifyGroup($id)
    {
        return $this->db->query("SELECT name FROM fx_shop_groups WHERE id = '".$id."'")->row_array()['name'];
    }

    public function insertHistory($idshop, $itemid, $accountid, $charid, $method, $price)
    {
        $date = $this->m_data->getTimestamp();

        $getCharName = $this->m_general->getNameCharacterSpecifyGuid($charid);
        $subject = $this->lang->line('store_senditem_subject');
        $message = $this->lang->line('store_senditem_text');

        $this->m_soap->commandSoap('.send items '.$getCharName.' "'.$subject.'" "'.$message.'" '.$itemid);

        
        $this->db->query("INSERT INTO fx_shop_history (idshop, itemid, date, accountid, charid, method) VALUES ('$idshop', '$itemid', '$date', '$accountid', '$charid', '$method')");

        if ($method == "dp")
            $this->db->query("UPDATE fx_credits SET dp = (dp - '$price') WHERE accountid = '$accountid'");
        else
            $this->db->query("UPDATE fx_credits SET vp = (vp - '$price') WHERE accountid = '$accountid'");

        redirect(base_url('store?complete'),'refresh');
    }
}
