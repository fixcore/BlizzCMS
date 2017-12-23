<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arena extends MX_Controller {

    public function index()
    {
        if($this->m_modules->getStatusLadArena() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('arena_model');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('index');
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('index');

        $this->load->view('footer');
    }

}
