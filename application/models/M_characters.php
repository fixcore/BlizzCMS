<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_characters extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getGeneralCharactersSpecifyAcc($multiRealm, $id)
    {
        $this->multiRealm = $multiRealm;
        return $this->multiRealm->select('*')
                ->where('account', $id)
                ->get('characters');
    }

    public function getGuidCharacterSpecifyName($multiRealm, $name)
    {
        $this->multiRealm = $multiRealm;
        return $this->multiRealm->select('guid')
                ->where('name', $name)
                ->get('characters')
                ->row('guid');
    }

    public function getGeneralCharactersSpecifyGuid($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('*')
                ->where('guid', $id)
                ->get('characters');
    }

    public function getNameCharacterSpecifyGuid($multirealm, $id)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('name')
                ->where('guid', $id)
                ->get('characters')
                ->row_array()['name'];
    }

    public function getCharNameAlreadyExist($name, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('name')
                ->where('name', $name)
                ->get('characters');
    }

    public function getCharBanSpecifyGuid($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('guid')
                ->where('guid', $id)
                ->where('active', '1')
                ->get('character_banned');
    }

    public function getCharName($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('name')
                ->where('guid', $id)
                ->get('characters')
                ->row_array()['name'];
    }

    public function getCharLevel($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('level')
                ->where('guid', $id)
                ->get('characters')
                ->row('level');
    }

    public function getCharActive($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('online')
                ->where('guid', $id)
                ->get('characters')
                ->row('online');
    }

}
