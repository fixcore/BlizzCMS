<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends MX_Controller {

    public function __construct()
    {
        parent::__construct();

        if( ! ini_get('date.timezone') )
        {
           date_default_timezone_set($this->config->item('timezone'));
        }

        if ($this->m_modules->getStatusForums() != '1')
            redirect(base_url(),'refresh');

        if ($this->config->item('maintenance_mode') == '1' && $this->m_data->isLogged() && $this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
        {
            redirect(base_url('maintenance'),'refresh');
        }

        $this->load->model('forum_model');
    }

    public function index()
    {
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function category($id)
    {
        if (empty($id) || is_null($id))
            redirect(base_url('forum'),'refresh');

        $data['idlink'] = $id;

        if ($this->forum_model->getType($id) == 2 && $this->m_data->isLogged())
            if ($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { }
        else
            redirect(base_url('forum'),'refresh');

        $this->load->view('category', $data);
        $this->load->view('footer');
    }

    public function topic($id)
    {
        $data['idlink'] = $id;

        if (empty($id) || is_null($id))
            redirect(base_url('forum'),'refresh');

        if ($this->forum_model->getType($this->forum_model->getTopicForum($id)) == 2 && $this->m_data->isLogged())
            if ($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { }
        else
            redirect(base_url('forum'),'refresh');

        $this->load->view('topic', $data);
        $this->load->view('footer');
    }

    public function newTopic($idlink)
    {
        $title = $_POST['topic_title'];
        $description = $_POST['topic_description'];

        if (isset($_POST['check_highl']) && $_POST['check_highl'] == '1')
            $highl = '1'; else $highl = '0';

        if (isset($_POST['check_lock']) && $_POST['check_lock'] == '1')
            $lock = '1'; else $lock = '0';

        $this->forum_model->insertTopic($idlink, $title, $this->session->userdata('fx_sess_id'), $description, $lock, $highl);
    }
}
