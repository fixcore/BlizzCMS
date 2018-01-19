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
        redirect(base_url('admin/manageitems?p'),'refresh');

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
        
        redirect(base_url('admin/manageitems'),'refresh');
    }

    public function getCategoryStore()
    {
        return $this->db->select('*')
                ->get('fx_shop_groups');
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

        $idd = $this->db->select('id')
                ->where('title', $title)
                ->get('fx_pages')
                ->row('id');

        redirect(base_url('admin/managepages?newpage='.$idd),'refresh');
    }

    public function delShopItm($id)
    {
        $this->db->where('id', $id)
                ->delete('fx_shop');

        $this->db->where('id_shop', $id)
                ->delete('fx_shop_top');

        redirect(base_url('admin/manageitems'),'refresh');
    }

    public function getShopAll()
    {
        return $this->db->select('*')
                ->order_by('id', 'ASC')
                ->get('fx_shop');
    }

    public function getChangelogs()
    {
        return $this->db->select('*')
                ->get('fx_changelogs')
                ->result();
    }

    public function getPages()
    {
        return $this->db->select('*')
                ->get('fx_pages')
                ->result();
    }

    public function delPage($id)
    {
        $this->db->where('id', $id)
                ->delete('fx_pages');

        redirect(base_url('admin/managepages'),'refresh');
    }

    public function delChangelog($id)
    {
        $this->db->where('id', $id)
                ->delete('fx_changelogs');

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

        redirect(base_url('admin/manageapi/?generated=').$id,'refresh');
    }

    public function getUltimateApiCharID()
    {
        $qq = $this->db->select('id')
            ->order_by('id', 'DESC')
            ->limit('1')
            ->get('fx_api_generator')
            ->row('1');

        return ($qq+1);
    }

    public function delSpecifyNew($id)
    {
        $this->db->where('id', $id)
                ->delete('fx_news');

        $this->db->where('id_new', $id)
                ->delete('fx_news_top');

        redirect(base_url('admin/managenews'),'refresh');
    }

    public function getGeneralNewsSpecifyName($id)
    {
        return $this->db->select('title')
                ->where('id', $id)
                ->get('fx_news')
                ->row('title');
    }

    public function getGeneralNewsSpecifyDesc($id)
    {
        return $this->db->select('description')
                ->where('id', $id)
                ->get('fx_news')
                ->row_array()['description'];
    }

    public function getGeneralNewsSpecifyRows($id)
    {
        return $this->db->select('*')
                ->where('id', $id)
                ->get('fx_news')
                ->num_rows();
    }

    public function getAdminAccountsList()
    {
        return $this->auth->select('id, username, email')
                ->order_by('id', 'ASC')
                ->get('account');
    }

    public function getRemoveADMRank($id)
    {
        $this->db->where('id', $id)
                ->delete('fx_ranks');

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
        $this->db->where('id', $id)
                ->delete('fx_forum_category');

        redirect(base_url('admin/managecategories'),'refresh');
    }

    public function insertCategory($name)
    {
        $data = array(
            'categoryName' => $name,
        );

        $this->db->insert('fx_forum_category', $data);

        redirect(base_url('admin/managecategories'),'refresh');
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

        redirect(base_url('admin/manageforums'),'refresh');
    }

    public function deleteForum($id)
    {
        $this->db->where('id', $id)
                ->delete('fx_forum_forums');

        redirect(base_url('admin/manageforums'),'refresh');
    }

    public function getForumCategoryList()
    {
        return $this->db->select('*')
            ->order_by('id', 'ASC')
            ->get('fx_forum_category');
    }

    public function getForumForumList()
    {
        return $this->db->select('*')
            ->order_by('id', 'ASC')
            ->get('fx_forum_forums');
    }

    public function getAdminCharactersList()
    {
        return $this->characters->select('guid, account, name')
            ->order_by('name', 'ASC')
            ->get('characters');
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

        $this->db->set('at_login', '8')
                ->where('guid', $id)
                ->update('characters');

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function getAdminNewsList()
    {
        return $this->db->select('id, title, date')
            ->order_by('id', 'ASC')
            ->get('fx_news');
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

        $update1 = array(
            'title' => $title,
            'image' => $image,
            'description' => $description,
            'date' => $date
        );

        $this->db->where('id', $id)
                ->update('fx_news', $update1);

        $this->db->where('id_new', $id)
                ->delete('fx_news_top');

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
        return $this->db->select('id')
            ->where('date', $date)
            ->get('fx_news')
            ->row('id');
    }

    public function getFileNameImage($id)
    {
        return $this->db->select('image')
            ->where('id', $id)
            ->get('fx_news')
            ->row_array()['image'];
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

        $this->db->set('at_login', '64')
                ->where('guid', $id)
                ->update('characters');

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

        $this->db->set('at_login', '128')
                ->where('guid', $id)
                ->update('characters');

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function insertUnbanChar($id)
    {
        $this->characters->where('guid', $id)
                ->delete('character_banned');

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

        if ($this->m_general->getCharNameAlreadyExist($name)->num_rows())
            redirect(base_url().'admin/managecharacter/'.$id.'?name','refresh');

        $date 		= $this->m_data->getTimestamp();
        $annotation = $this->lang->line('char_newname').' -> '.$name.' | '.$this->lang->line('char_oldname').' -> '.$this->m_general->getCharName($id);

        $data = array(
                'idchar' => $id,
                'annotation' => $annotation,
                'date' => $date,
            );

        $this->db->insert('fx_chars_annotations', $data);

        $this->characters->set('name', $name)
                ->where('guid', $id)
                ->update('characters');

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

        $this->characters->set('level', $level)
                ->where('guid', $guid)
                ->update('characters');

        redirect(base_url().'admin/managecharacter/'.$id,'refresh');
    }

    public function getAnnotationsSpecifyChar($id)
    {
        return $this->db->select('*')
            ->where('idchar', $id)
            ->get('fx_chars_annotations');
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
        return $this->db->select('*')
            ->where('iduser', $id)
            ->get('fx_users_annotations');
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

        $this->auth->where('id', $id)
                ->delete('account_banned');

        if ($this->m_general->getExpansionAction() == 2)
            $this->auth->where('id', $id)
                    ->delete('battlenet_account_bans');

        redirect(base_url().'admin/manageaccount/'.$id,'refresh');
    }

    public function removeRankAcc($id)
    {
        $this->auth->where('id', $id)
                ->delete('account_access');

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
        return $this->auth->select('id')
            ->get('account_banned')
            ->num_rows();
    }

    public function getBanSpecify($id)
    {
        return $this->auth->select('*')
            ->where('id', $id)
            ->get('account_banned');
    }

    public function getGmCount()
    {
        return $this->auth->select('id')
            ->get('account_access')
            ->num_rows();
    }

    public function getAccCreated()
    {
        return $this->auth->select('id')
            ->get('account')
            ->num_rows();
    }

    public function getCharOn()
    {
        return $this->characters->select('*')
            ->where('online', '1')
            ->get('characters')
            ->num_rows();
    }
}
