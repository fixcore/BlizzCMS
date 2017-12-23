<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends MX_Controller {

    public function index()
    {
        if($this->m_modules->getStatusForums() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('forum_model');

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

    public function category($id)
    {
        if($this->m_modules->getStatusForums() != '1')
            redirect(base_url(),'refresh');

        if (empty($id) || is_null($id))
            redirect(base_url('forum'),'refresh');

        $this->load->model('forum_model');

        $data['idlink'] = $id;


        if ($this->forum_model->getType($id) == 2 && $this->m_data->isLogged())
            if ($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { }
        else
            redirect(base_url('forum'),'refresh');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('category');
            }
            else
                $this->load->view('maintenance', $data);
        }
        else
            $this->load->view('category', $data);

        $this->load->view('footer');
    }

    public function topic($id)
    {
        if($this->m_modules->getStatusForums() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('forum_model');

        $data['idlink'] = $id;

        if (empty($id) || is_null($id))
            redirect(base_url('forum'),'refresh');

        if ($this->forum_model->getType($this->forum_model->getTopicForum($id)) == 2 && $this->m_data->isLogged())
            if ($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { }
        else
            redirect(base_url('forum'),'refresh');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('topic', $data);
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('topic', $data);

        $this->load->view('footer');
    }

}
