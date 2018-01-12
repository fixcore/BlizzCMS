<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_modules extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getStatusDiscordExperimental()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '1'")->row()->status;
    }

    public function getStatusDiscordClassic()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '2'")->row()->status;
    }

    public function getStatusRegister()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '3'")->row()->status;
    }

    public function getStatusLogin()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '4'")->row()->status;
    }

    public function getStatusRealmStatus()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '5'")->row()->status;
    }

    public function getStatusNews()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '6'")->row()->status;
    }

    public function getStatusChangelogs()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '7'")->row()->status;
    }

    public function getStatusForums()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '8'")->row()->status;
    }

    public function getStatusStore()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '9'")->row()->status;
    }

    public function getStatusSlides()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '10'")->row()->status;
    }

    public function getStatusEvents()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '11'")->row()->status;
    }

    public function getStatusLadPVP()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '12'")->row()->status;
    }

    public function getStatusUCP()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '13'")->row()->status;
    }

    public function getStatusGifts()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '14'")->row()->status;
    }

    public function getStatusLadArena()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '15'")->row()->status;
    }

    public function getStatusLadBugtracker()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '16'")->row()->status;
    }

    public function getCaptcha()
    {
        return $this->db->query("SELECT status FROM fx_modules WHERE id = '17'")->row()->status;
    }
}
