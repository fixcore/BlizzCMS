<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pvp extends MX_Controller {

    public function index()
    {
        if ($this->m_modules->getStatusLadPVP() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('pvp_model');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1)
            {
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
