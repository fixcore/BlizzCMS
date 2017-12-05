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

    public function addtoCar($item, $type, $price, $mode, $queryorcommand)
    {
        $session = $this->session->userdata('fx_sess_id');
        $this->db->query("INSERT INTO fx_shop_cart (type, accountid, itemid, price, mode, queryorcommand) VALUES ('$type', '$session', '$item', '$price', '$mode', '$queryorcommand')");
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
            redirect(base_url('shop'),'refresh');
    }

    public function getDPTrue($id)
    {
        $qq = $this->db->query("SELECT price_dp FROM fx_shop WHERE id = '".$id."'")->row()->price_dp;
        if ($qq > 0)
            return true;
        else
            redirect(base_url('shop'),'refresh');
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
}
