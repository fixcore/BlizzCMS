<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changelogs extends MX_Controller {

    public function index()
    {
        if($this->m_modules->getStatusChangelogs() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('forum_model');

        if ($this->config->item('changelogs_model') == '1')
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

    public function id($id)
    {
        if($this->m_modules->getStatusChangelogs() != '1')
            redirect(base_url(),'refresh');

        if (empty($id) || is_null($id))
            redirect(base_url(),'refresh');

        $this->load->model('forum_model');

        $data['idlink'] = $id;

        if ($this->config->item('changelogs_model') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('changelog');
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('changelog');

        $this->load->view('footer');
    }

}
