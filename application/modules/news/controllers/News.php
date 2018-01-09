<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MX_Controller {

    public function index()
    {
        if($this->m_modules->getStatusNews() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('news_model');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('news/news');
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('news/news');

        $this->load->view('footer');
    }

    public function post($id)
    {
        if($this->m_modules->getStatusNews() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('news_model');
        $this->load->model('forum/forum_model');

        $data['idlink'] = $id;

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('news/post', $data);
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('news/post', $data);

        $this->load->view('footer');
    }

}
