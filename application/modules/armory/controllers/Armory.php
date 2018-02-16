<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Armory extends MX_Controller {

    public function __construct()
    {
        parent::__construct();

        if( ! ini_get('date.timezone') )
        {
           date_default_timezone_set($this->config->item('timezone'));
        }

        if ($this->m_modules->getArmory() != '1')
            redirect(base_url(),'refresh');

        if ($this->config->item('maintenance_mode') == '1' && $this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
        {
            redirect(base_url('maintenance'),'refresh');
        }

        $this->load->model('armory_model');
    }

    public function player($idplayer, $nameplayer, $idrealm)
    {
        if(is_null($idplayer) || $idplayer == '' ||
            is_null($nameplayer) || $nameplayer == '' ||
            is_null($idrealm) || $idrealm == '' ||
            is_null($idrealm) || $idrealm == '')

        redirect(base_url('armory'),'refresh');

        if(!$this->m_data->getRealm($idrealm)->num_rows())
            redirect(base_url('armory'),'refresh');

        if($this->m_characters->getNameCharacterSpecifyGuid($this->m_data->getRealmConnectionData($idrealm), $idplayer) != $nameplayer)
            redirect(base_url('armory'),'refresh');

        if($this->m_characters->getGuidCharacterSpecifyName($this->m_data->getRealmConnectionData($idrealm), $nameplayer) != $idplayer)
            redirect(base_url('armory'),'refresh');
            

        $data = array(
            'fxtitle' => $this->lang->line('nav_armory'),
            'idplayer' => $idplayer,
            'nameplayer' => $nameplayer,
            'idrealm' => $idrealm,
        );


        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }
}
