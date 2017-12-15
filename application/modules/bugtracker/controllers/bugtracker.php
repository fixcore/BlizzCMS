<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bugtracker extends MX_Controller {

    public function index()
    {
        if($this->m_modules->getStatusLadArena() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('bugtracker_model');

        $this->load->view('index');
        $this->load->view('footer');
    }

}
