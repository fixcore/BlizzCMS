<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        $this->auth = $this->load->database('auth', TRUE);
        $this->characters = $this->load->database('characters', TRUE);
        parent::__construct();
    }

    public function restartNowServer()
    {
        $this->m_soap->commandSoap('.server restart');
        echo 'Restarting...';
    }

    public function insertShop($itemid, $type, $name, $pricedp, $pricevp, $iconname, $groups, $image)
    {
        if ($pricevp == '0' && $pricedp == '0')
        redirect(base_url('admin/shop?p'),'refresh');

        if ($pricedp == '0')
            $pricedp = NULL;

        if ($pricevp == '0')
            $pricevp = NULL;

        $data = array(
        'itemid' => $itemid,
        'type' => $type,
        'name' => $name,
        'price_dp' => $pricedp,
        'price_vp' => $pricevp,
        'iconname' => $iconname,
        'groups' => $groups,
        'image' => $image,
        );

        $this->db->insert('fx_shop', $data);
        
        redirect(base_url('admin/shop'),'refresh');
    }

    public function getCategoryStore()
    {
        return $this->db->query("SELECT * FROM fx_shop_groups");
    }

    public function insertChangelog($title, $desc)
    {
        $date = $this->m_data->getTimestamp();

        $data = array(
        'title' => $title,
        'description' => $desc,
        'date' => $date,
        );

        $this->db->insert('fx_changelogs', $data);

        redirect(base_url('admin/managechangelogs'),'refresh');
    }

    public function insertPage($title, $desc)
    {
        $date = $this->m_data->getTimestamp();

        $data = array(
        'title' => $title,
        'description' => $desc,
        'date' => $date,
        );

        $this->db->insert('fx_pages', $data);

        $idd = $this->db->query("SELECT id FROM fx_pages WHERE title = '".$title."'")->row()->id;

        redirect(base_url('admin/managepages?newpage='.$idd),'refresh');
    }

    public function delShopItm($id)
    {
        $this->db->query("DELETE FROM fx_shop WHERE id = '$id'");
        $this->db->query("DELETE FROM fx_shop_top WHERE id_shop = '$id'");
        redirect(base_url('admin/mshop'),'refresh');
    }

    public function getShopAll()
    {
        return $this->db->query("SELECT * FROM fx_shop ORDER BY id ASC");
    }

    public function getChangelogs()
    {
        return $this->db->query("SELECT * FROM fx_changelogs")->result();
    }

    public function getPages()
    {
        return $this->db->query("SELECT * FROM fx_pages")->result();
    }

    public function delPage($id)
    {
        $this->db->query("DELETE FROM fx_pages WHERE id = $id");
        redirect(base_url('admin/managepages'),'refresh');
    }

    public function delChangelog($id)
    {
        $this->db->query("DELETE FROM fx_changelogs WHERE id = '$id'");
        redirect(base_url('admin/managechangelogs'),'refresh');
    }

    public function insertApiCharType($id, $type)
    {
        $data = array(
        'id' => $id,
        'type' => $type,
        'active' => '1'
        );

        $this->db->insert('fx_api_generator', $data);

        redirect(base_url('admin/capic/?generated=').$id,'refresh');
    }

    public function getUltimateApiCharID()
    {
        $qq = $this->db->query("SELECT id FROM fx_api_generator ORDER BY id DESC LIMIT 1")->row()->id;
        return $qq+1;
    }

    public function delSpecifyNew($id)
    {
        $this->db->query("DELETE FROM fx_news WHERE id = '".$id."'");
        $this->db->query("DELETE FROM fx_news_top WHERE id_new = '".$id."'");
        redirect(base_url('admin/managenews'),'refresh');
    }

    public function getGeneralNewsSpecifyName($id)
    {
        return $this->db->query("SELECT title FROM fx_news WHERE id = '".$id."'")->row()->title;
    }

    public function getGeneralNewsSpecifyDesc($id)
    {
        return $this->db->query("SELECT description FROM fx_news WHERE id = '".$id."'")->row()->description;
    }

    public function getGeneralNewsSpecifyRows($id)
    {
        return $this->db->query("SELECT * FROM fx_news WHERE id = '".$id."'")->num_rows();
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

        $data = array(
        'iduser' => $id,
        'annotation' => $reason,
        'date' => $date,
        );

        $this->db->insert('fx_users_annotations', $data);

        redirect(base_url().'admin/manageaccount/'.$id,'refresh');
    }

    public function getADDADMRank($id)
    {
        $data1 = array(
        'id' => $id,
        'permission' => '1',
        );

        $this->db->insert('fx_ranks', $data1);

        $date 	= $this->m_data->getTimestamp();
        $reason = $this->lang->line('receive_addmAnnoW');

        $data2 = array(
        'iduser' => $id,
        'annotation' => $reason,
        'date' => $date,
        );

        $this->db->insert('fx_users_annotations', $data2);

        redirect(base_url().'admin/manageaccount/'.$id,'refresh');
    }

    public function deleteCategory($id)
    {
        $this->db->query("DELETE FROM fx_forum_category WHERE id = '$id'");
        redirect(base_url('admin/mcategory'),'refresh');
    }

    public function insertCategory($name)
    {
        $data = array(
        'categoryName' => $name,
        );

        $this->db->insert('fx_forum_category', $data);

        redirect(base_url('admin/mcategory'),'refresh');
    }

    public function insertForum($name, $category, $description, $icon, $type)
    {
        $data = array(
        'name' => $name,
        'category' => $category,
        'description' => $description,
        'icon' => $icon,
        'type' => $type,
        );

        $this->db->insert('fx_forum_forums', $data);

        redirect(base_url('admin/mforum'),'refresh');
    }

    public function deleteForum($id)
    {
        $this->db->query("DELETE FROM fx_forum_forums WHERE id = '$id'");
        redirect(base_url('admin/mforum'),'refresh');
    }

    public function getForumCategoryList()
    {
        return $this->db->query("SELECT * FROM fx_forum_category ORDER BY id ASC");
    }

    public function getForumForumList()
    {
        return $this->db->query("SELECT * FROM fx_forum_forums ORDER BY id ASC");
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

        $data1 = array(
        'idchar' => $id,
        'annotation,' => $reason,
        'date' => $date,
        );

        $this->db->insert('fx_chars_annotations', $data1);

        $data2 = array(
        'guid' => $id,
        'bandate,' => $date,
        'unbandate' => $date,
        'bannedby' => $idsession,
        'banreason' => $reason,
        );

        $this->characters->insert('character_banned', $data2);

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function insertCustomizeChar($id)
    {
        if ($this->m_general->getCharActive($id) == 1)
            redirect(base_url().'admin/managecharacter/'.$id.'?char','refresh');

        $date 		= $this->m_data->getTimestamp();
        $annotation = $this->lang->line('char_customAction');

        $data = array(
        'idchar' => $id,
        'annotation,' => $annotation,
        'date' => $date,
        );

        $this->db->insert('fx_chars_annotations', $data);

        $this->characters = $this->load->database('characters', TRUE);
        $this->characters->query("UPDATE characters SET at_login = 8 WHERE guid= '$id'");

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function getAdminNewsList()
    {
        return $this->db->query("SELECT id, title, date FROM fx_news ORDER BY id ASC");
    }

    public function createNewADM($title, $image, $description, $type)
    {
        $date = $this->m_data->getTimestamp();

        $data = array(
        'title' => $title,
        'image' => $image,
        'description' => $description,
        'date' => $date,
        );

        $this->db->insert('fx_news', $data);

        if ($type == 2)
        {
            $id = $this->getNewIDperDate($date);

            $data = array(
            'id_new' => $id,
            );

            $this->db->insert('fx_news_top', $data);
        }

        redirect(base_url('admin/managenews'),'refresh');
    }

    public function updateNewADM($id, $title, $image, $description, $type)
    {
        $unlink = $this->getFileNameImage($id);
        unlink('./assets/images/news/'.$unlink);

        $date = $this->m_data->getTimestamp();

        $this->db->query("UPDATE fx_news SET title = '$title', image = '$image', description = '$description', date = '$date' WHERE id = '$id'");

        $this->db->query("DELETE FROM fx_news_top WHERE id_new = '$id'");

        if ($type == 2)
        {
            $data = array(
            'id_new' => $id,
            );

            $this->db->insert('fx_news_top', $data);
        }

        redirect(base_url('admin/managenews'),'refresh');
    }

    public function getNewIDperDate($date)
    {
        return $this->db->query("SELECT id FROM fx_news WHERE date = '".$date."'")->row()->id;
    }

    public function getFileNameImage($id)
    {
        return $this->db->query("SELECT image FROM fx_news WHERE id = '".$id."'")->row_array()['image'];
    }

    public function insertChangeFactionChar($id)
    {
        if ($this->m_general->getCharActive($id) == 1)
            redirect(base_url().'admin/managecharacter/'.$id.'?char','refresh');

        $date 		= $this->m_data->getTimestamp();
        $annotation = $this->lang->line('char_chanfactAction');

        $data = array(
            'idchar' => $id,
            'annotation' => $annotation,
            'date' => $date,
            );

        $this->db->insert('fx_chars_annotations', $data);

        $this->characters->query("UPDATE characters SET at_login = 64 WHERE guid= '$id'");

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function insertChangeRaceChar($id)
    {
        if ($this->m_general->getCharActive($id) == 1)
            redirect(base_url().'admin/managecharacter/'.$id.'?char','refresh');

        $date 		= $this->m_data->getTimestamp();
        $annotation = $this->lang->line('char_chanraceAction');

        $data = array(
            'idchar' => $id,
            'annotation' => $annotation,
            'date' => $date,
            );

        $this->db->insert('fx_chars_annotations', $data);

        $this->characters->query("UPDATE characters SET at_login = 128 WHERE guid= '$id'");

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function insertUnbanChar($id)
    {
        $this->characters->query("DELETE FROM character_banned WHERE guid = '".$id."'");

        $date 		= $this->m_data->getTimestamp();
        $annotation = $this->lang->line('unbanned');

        $data = array(
            'idchar' => $id,
            'annotation' => $annotation,
            'date' => $date,
            );

        $this->db->insert('fx_chars_annotations', $data);

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function insertCharRename($id, $name)
    {
        if ($this->m_general->getCharActive($id) == 1)
            redirect(base_url().'admin/managecharacter/'.$id.'?char','refresh');

        if ($this->m_general->getCharNameAlreadyExist($name)->num_rows() > 0)
            redirect(base_url().'admin/managecharacter/'.$id.'?name','refresh');

        $date 		= $this->m_data->getTimestamp();
        $annotation = $this->lang->line('char_newname').' -> '.$name.' | '.$this->lang->line('char_oldname').' -> '.$this->m_general->getCharName($id);

        $data = array(
            'idchar' => $id,
            'annotation' => $annotation,
            'date' => $date,
            );

        $this->db->insert('fx_chars_annotations', $data);

        $this->characters->query("UPDATE characters SET name = '$name' WHERE guid = $id");

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function insertChangeLevelChar($id, $level)
    {
        if ($this->m_general->getCharActive($id) == 1)
            redirect(base_url().'admin/managecharacter/'.$id.'?char','refresh');

        $date 		= $this->m_data->getTimestamp();
        $annotation = $this->lang->line('char_newlevel').' -> '.$level.' | '.$this->lang->line('char_oldlevel').' -> '.$this->m_general->getCharLevel($id);

        $data = array(
            'idchar' => $id,
            'annotation' => $annotation,
            'date' => $date,
            );

        $this->db->insert('fx_chars_annotations', $data);

        $this->characters = $this->load->database('characters', TRUE);
        $this->characters->query("UPDATE characters SET level = $level WHERE guid = $id");

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function getAnnotationsSpecifyChar($id)
    {
        return $this->db->query("SELECT * FROM fx_chars_annotations WHERE idchar = '".$id."'");
    }

    public function insertRankAcc($id, $gmlevel)
    {
        $data = array(
            'id' => $id,
            'gmlevel' => $gmlevel,
            'RealmID' => '-1',
            );

        $this->auth->insert('account_access', $data);

        $date 	= $this->m_data->getTimestamp();
        $reason = $this->lang->line('receive_gmAnno');

        $data = array(
            'iduser' => $id,
            'annotation' => $reason,
            'date' => $date,
            );

        $this->db->insert('fx_users_annotations', $data);

        redirect(base_url().'admin/manageaccount/'.$id,'refresh');
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

        $data = array(
            'iduser' => $id,
            'annotation' => $reason,
            'date' => $date,
            );

        $this->db->insert('fx_users_annotations', $data);

        $this->auth->query("DELETE FROM account_banned WHERE id = $id");

        if ($this->m_general->getExpansionAction() == 2)
            $this->auth->query("DELETE FROM battlenet_account_bans WHERE id = $id");

        redirect(base_url().'admin/manageaccount/'.$id,'refresh');
    }

    public function removeRankAcc($id)
    {
        $this->auth->query("DELETE FROM account_access WHERE id = $id");

        $date 	= $this->m_data->getTimestamp();
        $reason = $this->lang->line('remove_gmAnnotation');

        $data = array(
            'iduser' => $id,
            'annotation' => $reason,
            'date' => $date,
            );

        $this->db->insert('fx_users_annotations', $data);

        redirect(base_url().'admin/manageaccount/'.$id,'refresh');
    }

    public function insertBanAcc($iduser, $reason)
    {
        $date = $this->m_data->getTimestamp();
        $id   = $this->session->userdata('fx_sess_id');

        if (empty($reason))
            $reason = $this->lang->line('was_ban');

        $data1 = array(
            'iduser' => $iduser,
            'annotation' => $reason,
            'date' => $date,
            );

        $this->db->insert('fx_users_annotations', $data1);

        $data2 = array(
            'id' => $iduser,
            'bandate' => $date,
            'unbandate' => $date,
            'bannedby' => $id,
            'banreason' => $reason,
            );

        $this->auth->insert('account_banned', $data2);

        if ($this->m_general->getExpansionAction() == 2)
            $this->auth->insert('battlenet_account_bans', $data2);

        redirect(base_url().'admin/manageaccount/'.$iduser,'refresh');
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
