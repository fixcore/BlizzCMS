<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends MX_Controller {

    public function __construct()
    {
        parent::__construct();

        if( ! ini_get('date.timezone') )
        {
           date_default_timezone_set($this->config->item('timezone'));
        }

        if ($this->m_modules->getMessages() != '1')
            redirect(base_url(),'refresh');

        if ($this->config->item('maintenance_mode') == '1' && $this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
        {
            redirect(base_url('maintenance'),'refresh');
        }

        $this->load->model('messages_model');
    }

    public function index()
    {
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function verify()
    {
        $this->messages_model->verify($this->session->userdata('fx_sess_id'));
    }
}
