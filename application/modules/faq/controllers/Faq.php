<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MX_Controller {

    public function __construct()
    {
        parent::__construct();

        if( ! ini_get('date.timezone') )
        {
           date_default_timezone_set($this->config->item('timezone'));
        }

        if ($this->config->item('maintenance_mode') == '1' && $this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
        {
            redirect(base_url('maintenance'),'refresh');
        }

        $this->load->model('faq_model');
    }

    public function index()
    {
        $data['fxtitle'] = $this->lang->line('nav_faq');

        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }
}
