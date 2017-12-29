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
        $this->auth->query("UPDATE account SET sha_pass_hash = '$password' WHERE id = '$id'");
        redirect(base_url('logout'),'refresh');
    }

    public function changePasswordII($id, $password, $passbnet)
    {
        $this->auth->query("UPDATE account SET sha_pass_hash = '$password' WHERE id = '$id'");
        $this->auth->query("UPDATE battlenet_accounts SET sha_pass_hash = '$passbnet' WHERE id = '$id'");
        redirect(base_url('logout'),'refresh');
    }

    public function changeEmailI($id, $email)
    {
        $this->auth->query("UPDATE account SET email = '$email' WHERE id = '$id'");
        redirect(base_url('logout'),'refresh');
    }

    public function changeEmailII($id, $email, $password)
    {
        $this->auth->query("UPDATE account SET email = '$email' WHERE id = '$id'");
        $this->auth->query("UPDATE battlenet_accounts SET sha_pass_hash = '$password', email = '$email' WHERE id = '$id'");
        redirect(base_url('logout'),'refresh');
    }

    public function getExistEmail($email)
    {
        return $this->auth->query("SELECT email FROM account WHERE email = '".$email."'")->num_rows();
    }

    public function getAllAvatars()
    {
        return $this->db->query("SELECT * FROM fx_avatars ORDER BY id ASC");
    }

    public function insertAvatar($id)
    {
        $sessid = $this->session->userdata('fx_sess_id');

        $this->db->query("UPDATE fx_users SET profile = '$id' WHERE id = '$sessid'");

        redirect(base_url('settings'),'refresh');
    }

    public function getExistInfo()
    {
        $sessid = $this->session->userdata('fx_sess_id');

        return $this->db->query("SELECT id FROM fx_users WHERE id = '".$sessid."'");
    }

    public function updateInformation($id, $name, $surname, $username, $email, $question, $answer, $day, $month, $year)
    {
        $this->db->query("DELETE FROM fx_users WHERE id = '$id'");
        $this->db->query("INSERT INTO fx_users (id, name, surname, username, email, question, answer, year, month, day) VALUES ('$id' ,'$name', '$surname', '$username', '$email', '$question', '$answer', '$day', '$month', '$year')");
        redirect(base_url('settings'),'refresh');
    }
}
