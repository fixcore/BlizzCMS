<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bugtracker extends MX_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->m_modules->getStatusLadBugtracker() != '1')
            redirect(base_url(),'refresh');

        if ($this->config->item('maintenance_mode') == '1' && $this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
        {
            redirect(base_url('maintenance'),'refresh');
        }

        $this->load->config('bugtracker');
        $this->load->model('bugtracker_model');
    }

    public function index()
    {
        $data = array(
                "classDrop" => array(
                    'class' => 'uk-select',
                    'id' => 'form-stacked-select'),

                "title_from" => array(
                    'id' => 'bug_title',
                    'name' => 'bug_title',
                    'class' => 'uk-input',
                    'required' => 'required',
                    'placeholder' => $this->lang->line('expr_title'),
                    'type' => 'text'),

                "url_form" => array(
                    'id' => 'bug_url',
                    'name' => 'bug_url',
                    'class' => 'uk-input',
                    'placeholder' => 'URL',
                    'type' => 'url'),

                "close_form" => array(
                    'class' => 'uk-button uk-button-default uk-modal-close'),

                "submit_form" => array(
                    'id' => 'button_createIssue',
                    'name' => 'button_createIssue',
                    'value' => $this->lang->line('button_create'),
                    'class' => 'uk-button uk-button-primary')
            );

        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    public function post($id)
    {
        if (empty($id) || is_null($id) || $id == '0')
            redirect(base_url(),'refresh');

        if ($this->m_modules->getStatusLadBugtracker() != '1')
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

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

    public function create()
    {
        $title = $this->input->post('bug_title');
        $type = $this->input->post('type_Bug');
        $desc = $this->input->post('bug_description');
        $url = $this->input->post('bug_url');

        $this->bugtracker_model->insertIssue($title, $type, $desc, $url);
    }

}
