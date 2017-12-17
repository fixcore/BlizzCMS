<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pvp extends MX_Controller {

    public function index()
    {
    	if($this->m_modules->getStatusLadPVP() != '1')
    		redirect(base_url(),'refresh');

        $this->load->model('pvp_model');
		
        $this->load->view('index');
        $this->load->view('footer');
    }
}
