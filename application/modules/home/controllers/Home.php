<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function index()
    {
        $this->load->model('home_model');
        $this->load->model('shop/shop_model');
        $this->load->model('news/news_model');
        $this->load->model('events/events_model');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('home');
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('home');

        $this->load->view('footer');
    }
}
