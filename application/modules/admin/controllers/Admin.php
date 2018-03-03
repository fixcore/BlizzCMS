<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');

        if(!ini_get('date.timezone'))
           date_default_timezone_set($this->config->item('timezone'));

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if (!$this->m_permissions->getMyPermissions('Permission_ACP'))
            redirect(base_url(),'refresh');
        
        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');
    }

    public function index()
    {
        $this->load->view('general/header');
        $this->load->view('index');
        $this->load->view('general/footer');
    }

    public function managerealms()
    {
        $this->load->view('general/header');
        $this->load->view('settings/managerealms');
        $this->load->view('general/footer');
    }

    public function manageslides()
    {
        $this->load->view('general/header');
        $this->load->view('settings/manageslides');
        $this->load->view('general/footer');
    }

    public function accounts()
    {
        $this->load->view('general/header');
        $this->load->view('account/accounts');
        $this->load->view('general/footer');
    }

    public function manageitems()
    {
        $this->load->view('general/header');
        $this->load->view('shop/manageitems');
        $this->load->view('general/footer');
    }

    public function managegroups()
    {
        $this->load->view('general/header');
        $this->load->view('shop/managegroups');
        $this->load->view('general/footer');
    }

    public function manageapi()
    {
        $this->load->view('general/header');
        $this->load->view('api/manageapi');
        $this->load->view('general/footer');
    }

    public function managechangelogs()
    {
        $this->load->view('general/header');
        $this->load->view('changelogs/managechangelogs');
        $this->load->view('general/footer');
    }

    public function editchangelogs($id)
    {
        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getChangelogSpecifyRows($id) < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('changelogs/editchangelogs', $data);
        $this->load->view('general/footer');
    }

    public function managenews()
    {
        $this->load->view('general/header');
        $this->load->view('news/managenews');
        $this->load->view('general/footer');
    }

    public function editnews($id)
    {
        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getNewsSpecifyRows($id) < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('news/editnews', $data);
        $this->load->view('general/footer');
    }

    public function characters()
    {
        $this->load->view('general/header');
        $this->load->view('characters/characters');
        $this->load->view('general/footer');
    }

    public function managecategories()
    {
        $this->load->view('general/header');
        $this->load->view('forum/managecategories');
        $this->load->view('general/footer');
    }

    public function manageforums()
    {

        $this->load->view('general/header');
        $this->load->view('forum/manageforums');
        $this->load->view('general/footer');
    }

    public function manageaccount($id)
    {
        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->m_data->getAccountExist($id)->num_rows() < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('account/manageaccount', $data);
        $this->load->view('general/footer');
    }

    public function managecharacter($id = '', $realm = '')
    {
        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if (is_null($realm) || empty($realm))
            redirect(base_url(),'refresh');

        foreach ($this->m_data->getRealm($realm)->result() as $charsMultiRealm) { 
            $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
        }

        if (!$this->m_characters->getGeneralCharactersSpecifyGuid($id, $multiRealm)->num_rows())
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;
        $data['idrealm'] = $realm;
        $data['multiRealm'] = $multiRealm;

        $this->load->view('general/header');
        $this->load->view('characters/managecharacter', $data);
        $this->load->view('general/footer');
    }

    public function managepages()
    {
        $this->load->view('general/header');
        $this->load->view('pages/managepages');
        $this->load->view('general/footer');
    }

    public function editpages($id)
    {
        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getGeneralPagesSpecifyRows($id) < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('pages/editpages', $data);
        $this->load->view('general/footer');
    }

    public function settings()
    {
        $this->load->view('general/header');
        $this->load->view('settings/index');
        $this->load->view('general/footer');
    }

    public function managetickets()
    {
        $this->load->view('general/header');
        $this->load->view('shop/managetickets');
        $this->load->view('general/footer');
    }

    public function viewticket()
    {
        $this->load->view('general/header');
        $this->load->view('shop/viewticket');
        $this->load->view('general/footer');
    }

    public function checkSoap()
    {
        foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 

            echo $this->m_soap->commandSoap('.server info', $charsMultiRealm->console_username, $charsMultiRealm->console_password, $charsMultiRealm->console_hostname, $charsMultiRealm->console_port, $charsMultiRealm->emulator).'<br>';
        }
    }

    //nonscript
    public function nonitemsteptwo()
    {
        ini_set('max_execution_time', 186400);

        echo 'defining langs, DE - ES - FR - IT - PT - RU - KO - CN - EN';

        $startitem = 1;
        $maxitemid = 160000;

        echo 'count starting to: '.$startitem;
        
        echo 'max item id: '.$maxitemid;

        for ($i = $startitem; $i < $maxitemid; $i++) {

            $xml_de = $this->m_general->getXML("http://de.wowhead.com/item=".$i."&xml");
            $xml_es = $this->m_general->getXML("http://es.wowhead.com/item=".$i."&xml");
            $xml_fr = $this->m_general->getXML("http://fr.wowhead.com/item=".$i."&xml");
            $xml_it = $this->m_general->getXML("http://it.wowhead.com/item=".$i."&xml");
            $xml_pt = $this->m_general->getXML("http://pt.wowhead.com/item=".$i."&xml");
            $xml_ru = $this->m_general->getXML("http://ru.wowhead.com/item=".$i."&xml");
            $xml_ko = $this->m_general->getXML("http://ko.wowhead.com/item=".$i."&xml");
            $xml_cn = $this->m_general->getXML("http://cn.wowhead.com/item=".$i."&xml");
            $xml_en = $this->m_general->getXML("http://www.wowhead.com/item=".$i."&xml");

            if (!$xml_en->error)
            {

                $input = 'http://wow.zamimg.com/images/wow/icons/large/'.$xml_en->item->icon.'.jpg';
                $output = 'assets/images/icons/items/'.$xml_en->item->icon.'.jpg';
                file_put_contents($output, file_get_contents($input));


                $items = array(
                    'item_id' => $xml_en->item['id'],
                    'level' => $xml_en->item->level,
                    'quality_id' => $xml_en->item->quality['id'],
                    'class_id' => $xml_en->item->class['id'],
                    'subclass_id' => $xml_en->item->subclass['id'],
                    'display_id' => $xml_en->item->icon['displayId'],
                    'inventorySlot_id' => $xml_en->item->inventorySlot['id'],
                    'icon_name' => $xml_en->item->icon
                );
                
                $this->db->insert('fx_head_items', $items);

                $data = array(
                    'id' => $xml_es->item['id'],
                    //spanish
                    'name_es' => $xml_es->item->name,
                    'quality_es' => $xml_es->item->quality,
                    'class_es' => $xml_es->item->class,
                    'subclass_es' => $xml_es->item->subclass,
                    'inventorySlot_es' => $xml_es->item->inventorySlot,
                    'htmlTooltip_es' => $xml_es->item->htmlTooltip,
                    'json_es' => $xml_es->item->json,
                    'jsonEquip_es' => $xml_es->item->jsonEquip,

                    //english
                    'name_en' => $xml_en->item->name,
                    'quality_en' => $xml_en->item->quality,
                    'class_en' => $xml_en->item->class,
                    'subclass_en' => $xml_en->item->subclass,
                    'inventorySlot_en' => $xml_en->item->inventorySlot,
                    'htmlTooltip_en' => $xml_en->item->htmlTooltip,
                    'json_en' => $xml_en->item->json,
                    'jsonEquip_en' => $xml_en->item->jsonEquip,

                    //deutsch
                    'name_de' => $xml_de->item->name,
                    'quality_de' => $xml_de->item->quality,
                    'class_de' => $xml_de->item->class,
                    'subclass_de' => $xml_de->item->subclass,
                    'inventorySlot_de' => $xml_de->item->inventorySlot,
                    'htmlTooltip_de' => $xml_de->item->htmlTooltip,
                    'json_de' => $xml_de->item->json,
                    'jsonEquip_de' => $xml_de->item->jsonEquip,

                    //francais
                    'name_fr' => $xml_fr->item->name,
                    'quality_fr' => $xml_fr->item->quality,
                    'class_fr' => $xml_fr->item->class,
                    'subclass_fr' => $xml_fr->item->subclass,
                    'inventorySlot_fr' => $xml_fr->item->inventorySlot,
                    'htmlTooltip_fr' => $xml_fr->item->htmlTooltip,
                    'json_fr' => $xml_fr->item->json,
                    'jsonEquip_fr' => $xml_fr->item->jsonEquip,

                    //italiano
                    'name_it' => $xml_it->item->name,
                    'quality_it' => $xml_it->item->quality,
                    'class_it' => $xml_it->item->class,
                    'subclass_it' => $xml_it->item->subclass,
                    'inventorySlot_it' => $xml_it->item->inventorySlot,
                    'htmlTooltip_it' => $xml_it->item->htmlTooltip,
                    'json_it' => $xml_it->item->json,
                    'jsonEquip_it' => $xml_it->item->jsonEquip,

                    //portugues brasileiro
                    'name_pt' => $xml_pt->item->name,
                    'quality_pt' => $xml_pt->item->quality,
                    'class_pt' => $xml_pt->item->class,
                    'subclass_pt' => $xml_pt->item->subclass,
                    'inventorySlot_pt' => $xml_pt->item->inventorySlot,
                    'htmlTooltip_pt' => $xml_pt->item->htmlTooltip,
                    'json_pt' => $xml_pt->item->json,
                    'jsonEquip_pt' => $xml_pt->item->jsonEquip,

                    //russian
                    'name_ru' => $xml_ru->item->name,
                    'quality_ru' => $xml_ru->item->quality,
                    'class_ru' => $xml_ru->item->class,
                    'subclass_ru' => $xml_ru->item->subclass,
                    'inventorySlot_ru' => $xml_ru->item->inventorySlot,
                    'htmlTooltip_ru' => $xml_ru->item->htmlTooltip,
                    'json_ru' => $xml_ru->item->json,
                    'jsonEquip_ru' => $xml_ru->item->jsonEquip,

                    //korean
                    'name_ko' => $xml_ko->item->name,
                    'quality_ko' => $xml_ko->item->quality,
                    'class_ko' => $xml_ko->item->class,
                    'subclass_ko' => $xml_ko->item->subclass,
                    'inventorySlot_ko' => $xml_ko->item->inventorySlot,
                    'htmlTooltip_ko' => $xml_ko->item->htmlTooltip,
                    'json_ko' => $xml_ko->item->json,
                    'jsonEquip_ko' => $xml_ko->item->jsonEquip,

                    //china
                    'name_cn' => $xml_cn->item->name,
                    'quality_cn' => $xml_cn->item->quality,
                    'class_cn' => $xml_cn->item->class,
                    'subclass_cn' => $xml_cn->item->subclass,
                    'inventorySlot_cn' => $xml_cn->item->inventorySlot,
                    'htmlTooltip_cn' => $xml_cn->item->htmlTooltip,
                    'json_cn' => $xml_cn->item->json,
                    'jsonEquip_cn' => $xml_cn->item->jsonEquip,
                );
                
                $this->db->insert('fx_head_items_local', $data);

                echo $xml_en->item->name.'<br>';
            }
        }

        echo 'Done :D if you restart the page the process will restart and you will lose the current data'; die();
    }

    public function nonspellsstepthree()
    {
        ini_set('max_execution_time', 186400);

        $startitem = 1;
        $maxitemid = 50000;

        for ($i = $startitem; $i < $maxitemid; $i++) {
        {
            $data = file_get_contents('http://www.wowhead.com/spell='.$i);

            if(preg_match('#<h1 class="heading-size-1">.*?</h1>#', $data, $m))
            {
                $name = strip_tags($m[0]);
                if ($name == 'Spells')
                    continue;
            }
            elseif(preg_match('#<noscript><table><tr><td><b>.*?#', $data, $m))
            {
                $name = strip_tags($m[0]);
                if ($name == 'Spells')
                    continue;
            }
            elseif(preg_match('#<noscript><b>.*?#', $data, $m))
            {
                $name = strip_tags($m[0]);
                if ($name == 'Spells')
                    continue;
            }
            else
                continue;

            if(preg_match('#<th style="border-top:0">.*?</td>#', $data, $m))
                $cost = htmlspecialchars($m[0]);

            if(preg_match('#<th>Range</th><td>.*?</td>#', $data, $m))
                $range = htmlspecialchars($m[0]);

            if(preg_match('#<th>Cast time</th><td>.*?</td>#', $data, $m))
                $casttime = htmlspecialchars($m[0]);

            if(preg_match('#<noscript>.*?</noscript>#', $data, $m))
            {
                $nonscript = str_replace('<noscript>', '', $m[0]);
                $nonscript = str_replace('</noscript>', '', $nonscript);
                $nonscript = str_replace('class="q"', 'class="uk-text-quality-bind"', $nonscript);
                $nonscript = str_replace("class='q2'", 'class="uk-text-quality-uncommon"', $nonscript);
                $nonscript = str_replace("class='q9'", 'class="uk-text-quality-heirloom"', $nonscript);
                $nonscript = str_replace('class="wowhead-tooltip-requirements"', '', $nonscript);
                $nonscript = htmlspecialchars($nonscript);
            }

            if(preg_match('#<link rel=image_src href=.*?>#', $data, $m))
            {
                $icons = str_replace('<link rel=image_src href=', '', $m[0]);
                $icons = str_replace('>', '', $icons);
                $icons = str_replace('//wow.zamimg.com/images/wow/icons/large/', '', $icons);
                $icons = str_replace('.jpg', '', $icons);
                $icons = htmlspecialchars($icons);
            }

            if(preg_match('#<th>Cooldown</th><td>.*?</td>#', $data, $m))
            {
                $cooldown = str_replace('class="q0"', 'class="uk-text-quality-bind"', $m[0]);
                $cooldown = htmlspecialchars($cooldown);
            }

            if(preg_match('#</tr><tr><th><dfn title="Global Cooldown">GCD</dfn></th><td>.*?</td></tr><tr>#', $data, $m))
                $global_cooldown = htmlspecialchars($m[0]);

            if(preg_match('#<th style="border-left:0">School</th><td>.*?</td>#', $data, $m))
                $school = htmlspecialchars($m[0]);

            if(preg_match('#<th style="border-left:0">Mechanic</th><td>.*?</td>#', $data, $m))
                $mechanic = htmlspecialchars($m[0]);

            if(preg_match('#<th style="border-left:0">Dispel type</th><td><span class="q0">.*?</span></td>#', $data, $m))
            {
                $dispelType = str_replace('class="q0"', 'class="uk-text-quality-bind"', $m[0]);
                $dispelType = htmlspecialchars($m[0]);
            }

            $datas = array(
                'id' => $i,
                'name_en' => $name,
                'cost_en' => $cost,
                'range_en' => $range,
                'cast_en' => $casttime,
                'noscript_en' => $nonscript,
                'cooldown_en' => $cooldown,
                'gcooldown_en' => $global_cooldown,
                'school_en' => $school,
                'mechanic_en' => $mechanic,
                'dispelType_en' => $dispelType,
            );
            $this->db->insert('fx_head_spells_local', $datas);

            $dicon = array(
                'id' => $i,
                'iconname' => $icons
            );
            $this->db->insert('fx_head_spells', $dicon);

            $input = 'http://wow.zamimg.com/images/wow/icons/large/'.$icons.'.jpg';
            $output = 'assets/icons/spells/'.$icons.'.jpg';
            file_put_contents($output, file_get_contents($input));
        }
    }
    }

}
