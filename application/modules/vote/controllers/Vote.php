<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends MX_Controller {

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

        if (!$this->m_data->isLogged())
            redirect(base_url('login'),'refresh');

        $this->load->model('vote_model');
    }

    public function index()
    {

        $data['fxtitle'] = $this->lang->line('nav_vote');

        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }
}
