<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changelogs extends MX_Controller {

    public function index()
    {
        $this->load->model('changelogs_model');

        $this->load->view('index');
        $this->load->view('footer');
    }

    public function id($id)
    {
        if (empty($id) || is_null($id))
            redirect(base_url(),'refresh');

        $this->load->model('changelogs_model');

        $data['idlink'] = $id;

        $this->load->view('changelog', $data);
        $this->load->view('footer');
    }
}
