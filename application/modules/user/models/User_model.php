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
        redirect(base_url('user/logout'),'refresh');
    }

    public function changePasswordII($id, $password, $passbnet)
    {
        $this->auth->query("UPDATE account SET sha_pass_hash = '$password' WHERE id = '$id'");
        $this->auth->query("UPDATE battlenet_accounts SET sha_pass_hash = '$passbnet' WHERE id = '$id'");
        redirect(base_url('user/logout'),'refresh');
    }

    public function changeEmailI($id, $email, $password)
    {
        $this->auth->query("UPDATE account SET email = '$email' WHERE id = '$id'");
        redirect(base_url('user/logout'),'refresh');
    }

    public function changeEmailII($id, $email, $password)
    {
        $this->auth->query("UPDATE account SET email = '$email' WHERE id = '$id'");
        $this->auth->query("UPDATE battlenet_accounts SET sha_pass_hash = '$password', email = '$email' WHERE id = '$id'");
        redirect(base_url('user/logout'),'refresh');
    }

    public function getExistEmail($email)
    {
        return $this->auth->query("SELECT email FROM account WHERE email = '".$email."'")->num_rows();
    }
}
