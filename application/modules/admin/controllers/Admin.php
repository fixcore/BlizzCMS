<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');

        if( ! ini_get('date.timezone') )
        {
           date_default_timezone_set($this->config->item('timezone'));
        }

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
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

    public function managenews()
    {
        $this->load->view('general/header');
        $this->load->view('news/managenews');
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

        if ($this->m_general->getAccountExist($id)->num_rows() < 1)
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

        if (!$this->m_general->getGeneralCharactersSpecifyGuid($id, $multiRealm)->num_rows())
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;
        $data['idrealm'] = $realm;
        $data['multiRealm'] = $multiRealm;

        $this->load->view('general/header');
        $this->load->view('characters/managecharacter', $data);
        $this->load->view('general/footer');
    }

    public function editnews($id)
    {
        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getGeneralNewsSpecifyRows($id) < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('news/editnews', $data);
        $this->load->view('general/footer');
    }

    public function managepages()
    {
        $this->load->view('general/header');
        $this->load->view('pages/managepages');
        $this->load->view('general/footer');
    }

    public function settings()
    {
        $this->load->view('general/header');
        $this->load->view('settings/index');
        $this->load->view('general/footer');
    }

    public function checkSoap()
    {
        foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 

            echo $this->m_soap->commandSoap('.server info', $charsMultiRealm->console_username, $charsMultiRealm->console_password, $charsMultiRealm->hostname, $charsMultiRealm->console_port, $charsMultiRealm->emulator).'<br>';
        }
    }
}
