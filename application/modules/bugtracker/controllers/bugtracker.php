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
        $this->load->library("pagination");

        $config = array();
        $config['base_url'] = "#";
        $config['total_rows'] = $this->bugtracker_model->count_all();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination uk-pagination uk-flex-right uk-margin-medium-top" uk-margin">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 1;
        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];

        $output = array(
            'pagination_link'  => $this->pagination->create_links(),
            'country_table'   => $this->bugtracker_model->fetch_details($config["per_page"], $start)
        );

        echo json_encode($output);
    }
}
