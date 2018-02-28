<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_api_char');

        if(!ini_get('date.timezone') )
           date_default_timezone_set($this->config->item('timezone'));

       if (!$this->m_permissions->getMyPermissions('Permission_API'))
            redirect(base_url(),'refresh');
    }

    public function getchar()
    {
        if (empty($_GET['id']) || is_null($_GET['id']))
            $id = "0";
        else
            $id = $_GET['id'];

        if (empty($_GET['guid']) || is_null($_GET['guid']))
            $guid = "0";
        else
            $guid = $_GET['guid'];

        if ($guid == '0' || $id == '0')
            die();

        if ($this->m_api_char->getApiGenerateCount($id) > 0)
            var_dump($this->m_api_char->getCharInfo($guid, $id));
        else
            die();
    }
}
