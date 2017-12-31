<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bugtracker extends MX_Controller {

    public function index()
    {
        if ($this->m_modules->getStatusLadBugtracker() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('bugtracker_model');

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

    public function post($id)
    {
        if (empty($id) || is_null($id) || $id == '0')
            redirect(base_url(),'refresh');

        if ($this->m_modules->getStatusLadBugtracker() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('bugtracker_model');

        $data['idlink'] = $id;

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1)
            {
                $this->load->view('post', $data);
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('post', $data);

        $this->load->view('footer');
    }

    public function pagination()
    {
        $this->load->model('bugtracker_model');

        $config = $this->m_general->getStylesPagination(10, $this->bugtracker_model->count_all());

        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];

        $output = array(
            'pagination_link'  => $this->pagination->create_links(),
            'bugtracker_table'   => $this->bugtracker_model->fetch_details($config["per_page"], $start)
        );

        echo json_encode($output);
    }
}
