<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

    public function login()
    {
        if ($this->m_modules->getStatusLogin() != '1')
            redirect(base_url(),'refresh');

        if ($this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getExpansionAction() == 1)
            $this->load->view('login1');
        else
            $this->load->view('login2');

        $this->load->view('footer');
    }

    public function register()
    {
        if ($this->m_modules->getStatusRegister() != '1')
            redirect(base_url(),'refresh');

        if ($this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1)
            {
                $this->load->view('register');
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('register');

        $this->load->view('footer');
    }

    public function logout()
    {
        $this->m_data->logout();
    }

    public function settings()
    {
        if ($this->m_modules->getStatusUCP() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('user_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1)
            {
                $this->load->view('settings');
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('settings');

        $this->load->view('footer');
    }

    public function profile($id)
    {
        if ($this->m_modules->getStatusUCP() != '1')
            redirect(base_url(),'refresh');

        if (empty($id) || is_null($id) || $id == '0')
            redirect(base_url(),'refresh');

        $this->load->model('user_model');

        $data['idlink'] = $id;

        if ($this->config->item('maintenance_mode') == '1')
        {
            if ($this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1)
            {
                $this->load->view('profile', $data);
            }
            else
                $this->load->view('maintenance');
        }
        else
            $this->load->view('profile', $data);

        $this->load->view('footer');
    }
}
