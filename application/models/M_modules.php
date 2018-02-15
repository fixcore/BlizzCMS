<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_modules extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getStatusDiscordExperimental()
    {
        return $this->db->select('status')
                ->where('id', '1')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusDiscordClassic()
    {
        return $this->db->select('status')
                ->where('id', '2')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusRegister()
    {
        return $this->db->select('status')
                ->where('id', '3')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusLogin()
    {
        return $this->db->select('status')
                ->where('id', '4')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusRealmStatus()
    {
        return $this->db->select('status')
                ->where('id', '5')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusNews()
    {
        return $this->db->select('status')
                ->where('id', '6')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusChangelogs()
    {
        return $this->db->select('status')
                ->where('id', '7')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusForums()
    {
        return $this->db->select('status')
                ->where('id', '8')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusStore()
    {
        return $this->db->select('status')
                ->where('id', '9')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusSlides()
    {
        return $this->db->select('status')
                ->where('id', '10')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusEvents()
    {
        return $this->db->select('status')
                ->where('id', '11')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusLadPVP()
    {
        return $this->db->select('status')
                ->where('id', '12')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusUCP()
    {
        return $this->db->select('status')
                ->where('id', '13')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusGifts()
    {
        return $this->db->select('status')
                ->where('id', '14')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusLadArena()
    {
        return $this->db->select('status')
                ->where('id', '15')
                ->get('fx_modules')
                ->row('status');
    }

    public function getStatusLadBugtracker()
    {
        return $this->db->select('status')
                ->where('id', '16')
                ->get('fx_modules')
                ->row('status');
    }

    public function getCaptcha()
    {
        return $this->db->select('status')
                ->where('id', '17')
                ->get('fx_modules')
                ->row('status');
    }

    public function getMessages()
    {
        return $this->db->select('status')
                ->where('id', '18')
                ->get('fx_modules')
                ->row('status');
    }

    public function getDonation()
    {
        return $this->db->select('status')
                ->where('id', '19')
                ->get('fx_modules')
                ->row('status');
    }

    public function getInstallation()
    {
        return $this->db->select('status')
                ->where('id', '20')
                ->get('fx_modules')
                ->row('status');
    }

    public function getArmory()
    {
        return $this->db->select('status')
                ->where('id', '21')
                ->get('fx_modules')
                ->row('status');
    }

    public function getVote()
    {
        return $this->db->select('status')
                ->where('id', '22')
                ->get('fx_modules')
                ->row('status');
    }

    public function insertRealm($hostname, $username, $password, $database, $realm_id, $soapuser, $soappass, $soapport, $red = '')
    {
        $data = array(
            'hostname' => $hostname,
            'username' => $username,
            'password' => $password,
            'char_database' => $database,
            'realmID' => $realm_id,
            'console_username' => $soapuser,
            'console_password' => $soappass,
            'console_port' => $soapport,
            'emulator' => 'TC'
        );

        $this->db->insert('fx_realms', $data);

        if ($red == '1') {
            redirect(base_url('admin/settings'),'refresh');
        }
    }
}
