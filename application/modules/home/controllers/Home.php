<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function index()
    {
        $this->load->model('home_model');
        $this->load->model('shop/shop_model');
        $this->load->model('news/news_model');
        $this->load->model('events/events_model');
		
        $this->load->view('home');
        $this->load->view('footer');
    }
}
