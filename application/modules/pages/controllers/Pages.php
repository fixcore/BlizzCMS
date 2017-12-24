<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller {

    public function index($id)
    {
        if (empty($id) || is_null($id) || $id == '0')
            redirect(base_url(),'refresh');

        $this->load->model('pages_model');
        
        if ($this->pages_model->getVerifyExist($id) < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;


        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) {
                $this->load->view('page', $data);
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('page', $data);

        $this->load->view('footer');
    }

}
