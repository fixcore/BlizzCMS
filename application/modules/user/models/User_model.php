<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->auth = $this->load->database('auth', TRUE);
    }

    public function changePasswordI($id, $password)
    {
        $this->auth->set('sha_pass_hash', $password)
             ->where('id', $id)
             ->update('account');

        redirect(base_url('logout'),'refresh');
    }

    public function changePasswordII($id, $password, $passbnet)
    {
        $this->auth->set('sha_pass_hash', $password)
             ->where('id', $id)
             ->update('account');

        $this->auth->set('sha_pass_hash', $passbnet)
             ->where('id', $id)
             ->update('battlenet_accounts');

        redirect(base_url('logout'),'refresh');
    }

    public function changeEmailI($id, $email)
    {
        $this->auth->set('email', $email)
             ->where('id', $id)
             ->update('account');

        $this->db->set('email', $email)
             ->where('id', $id)
             ->update('fx_users');

        redirect(base_url('logout'),'refresh');
    }

    public function changeEmailII($id, $email, $password)
    {
        $this->auth->set('email', $email)
             ->where('id', $id)
             ->update('account');

        $this->db->set('email', $email)
             ->where('id', $id)
             ->update('fx_users');

        $update = array(
        'sha_pass_hash' => $password,
        'email' => $email
        );

        $this->auth->where('id', $id)
             ->update('battlenet_accounts', $update);

        redirect(base_url('logout'),'refresh');
    }

    public function getExistEmail($email)
    {
        return $this->auth->select('email')
                ->where('email', $email)
                ->get('account')
                ->num_rows();
    }

    public function getAllAvatars()
    {
        return $this->db->select('*')
                ->order_by('id ASC')
                ->get('fx_avatars');
    }

    public function insertAvatar($id)
    {
        $sessid = $this->session->userdata('fx_sess_id');

        $this->db->set('profile', $id)
             ->where('id', $sessid)
             ->update('fx_users');

        redirect(base_url('panel'),'refresh');
    }

    public function getExistInfo()
    {
        $sessid = $this->session->userdata('fx_sess_id');

        return $this->db->select('id')
                ->where('id', $sessid)
                ->get('fx_users');
    }

    public function updateInformation($id, $name, $surname, $username, $email, $question, $answer, $year, $month, $day, $country)
    {
        $this->db->where('id', $id)
             ->delete('fx_users');

        $data = array(
            'id' => $id,
            'name' => $name,
            'surname' => $surname,
            'username' => $username,
            'email' => $email,
            'question' => $question,
            'answer' => $answer,
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'location' => $country,
            );

        $this->db->insert('fx_users', $data);

        $tag = rand(1111, 9999);

        $data1 = array(
            'id' => $id,
            'tag' => $tag,
        );

        $this->db->insert('fx_tags', $data1);

        redirect(base_url('panel'),'refresh');
    }

    public function getBorn($id)
    {
        $qq = $this->db->select('year, month, day')
               ->where('id', $id)
               ->get('fx_users');

        if ($qq->num_rows())
            return $qq->row('year').'/'.$qq->row('month').'/'.$qq->row('day');
        else
            return 'Unknow';
    }

    public function getDateMember($id)
    {
        $qq = $this->db->select('date')
               ->where('id', $id)
               ->get('fx_users');

        if ($qq->num_rows())
            return $qq->row('date');
        else
            return 'Unknow';
    }

    public function getExpansion($id)
    {
        $qq = $this->db->select('expansion')
                ->where('id', $id)
                ->get('fx_users');

        if ($qq->num_rows())
            return $qq->row('expansion');
        else
            return 'Unknow';
    }

    public function insertRegister($name, $surname, $username, $email, $question, $password, $answer, $year, $month, $day, $country)
    {
        $date       = $this->m_data->getTimestamp();
        $expansion  = $this->m_general->getRealExpansionDB();
        $passwordAc = $this->m_data->encryptAccount($username, $password);
        $passwordBn = $this->m_data->encryptBattlenet($email, $password);
        $tag = rand(1111, 9999);

        if ($this->m_general->getExpansionAction($this->config->item('expansion_id')) == 1)
        {
            $data = array(
            'username' => $username,
            'sha_pass_hash' => $passwordAc,
            'email' => $email,
            'expansion' => $expansion,
            );

            $this->auth->insert('account', $data);
        }
        else
        {
            $data = array(
            'username' => $username,
            'sha_pass_hash' => $passwordAc,
            'email' => $email,
            'expansion' => $expansion,
            'battlenet_index' => '1',
            );

            $this->auth->insert('account', $data);

            $id = $this->m_data->getIDAccount($username);

            $data1 = array(
            'id' => $id,
            'email' => $email,
            'sha_pass_hash' => $passwordBn,
            );

            $this->auth->insert('battlenet_accounts', $data1);

            $this->auth->set('battlenet_account', $id)
                 ->where('id', $id)
                 ->update('account');
        }

        $id = $this->m_data->getIDAccount($username);

        $data3 = array(
            'id' => $id,
            'name' => $name,
            'surname' => $surname,
            'username' => $username,
            'email' => $email,
            'question' => $question,
            'answer' => $answer,
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'date' => $date,
            'location' => $country,
            );

            $this->db->insert('fx_users', $data3);

        $data4 = array(
            'id' => $id,
            'tag' => $tag,
        );

        $this->db->insert('fx_tags', $data4);

        redirect(base_url('login'),'refresh');
    }

    public function getCountry()
    {
        return $this->db->select('*')->get('fx_country');
    }

    public function getLocation($id)
    {
        $qq = $this->db->select('location')
               ->where('id', $id)
               ->get('fx_users')
               ->row('location');

        return $this->db->select('country_name')
                ->where('id', $qq)
                ->get('fx_country')
                ->row_array()['country_name'];
    }

    public function getQuestion()
    {
        return $this->db->select('*')->get('fx_questions');
    }

    public function getLastIp($id)
    {
        return $this->auth->select('last_ip')
                ->where('id', $id)
                ->get('account')
                ->row_array()['last_ip'];
    }
}
