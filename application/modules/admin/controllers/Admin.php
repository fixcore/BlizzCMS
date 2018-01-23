<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

    public function index()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('index');
        $this->load->view('general/footer');
    }

    public function accounts()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('account/accounts');
        $this->load->view('general/footer');
    }

    public function manageitems()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('shop/manageitems');
        $this->load->view('general/footer');
    }

    public function manageapi()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('api/manageapi');
        $this->load->view('general/footer');
    }

    public function managechangelogs()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('changelogs/managechangelogs');
        $this->load->view('general/footer');
    }

    public function managenews()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('news/managenews');
        $this->load->view('general/footer');
    }

    public function characters()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('characters/characters');
        $this->load->view('general/footer');
    }

    public function managecategories()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('forum/managecategories');
        $this->load->view('general/footer');
    }

    public function manageforums()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('forum/manageforums');
        $this->load->view('general/footer');
    }

    public function manageaccount($id)
    {
        $this->load->model('admin_model');

        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->m_general->getAccountExist($id)->num_rows() < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('account/manageaccount', $data);
        $this->load->view('general/footer');
    }

    public function managecharacter($id)
    {
        $this->load->model('admin_model');

        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->m_general->getGeneralCharactersSpecifyGuid($id)->num_rows() < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('characters/managecharacter', $data);
        $this->load->view('general/footer');
    }

    public function editnews($id)
    {
        $this->load->model('admin_model');

        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows())
            redirect(base_url(),'refresh');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getGeneralNewsSpecifyRows($id) < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('news/editnews', $data);
        $this->load->view('general/footer');
    }

    public function managepages()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('pages/managepages');
        $this->load->view('general/footer');
    }
}
