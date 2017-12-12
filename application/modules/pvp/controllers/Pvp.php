<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pvp extends MX_Controller {

    public function index()
    {
        $this->load->model('pvp_model');
		
        $this->load->view('index');
        $this->load->view('footer');
    }
}
