<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_characters extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getItemInstace($multiRealm, $item)
    {
        $this->multiRealm = $multiRealm;
        return $this->multiRealm->select('itemEntry')
                ->where('guid', $item)
                ->get('item_instance')
                ->row('itemEntry');
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

    public function getCharRace($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('race')
                ->where('guid', $id)
                ->get('characters')
                ->row('race');
    }

    public function getCharClass($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('class')
                ->where('guid', $id)
                ->get('characters')
                ->row('class');
    }

    public function getCharInvHead($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '0')
                ->get('character_inventory')
                ->row('item');
    }

	public function getCharInvNeck($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '1')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvShoulders($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '2')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvBody($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '3')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvChest($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '4')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvWaist($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '5')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvLegs($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '6')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvFeet($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '7')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvWrists($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '8')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvHands($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '9')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvFingerOne($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '10')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvFingerTwo($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '11')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvTrinketOne($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '12')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvTrinketTwo($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '13')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvBack($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '14')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvMainHand($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '15')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvOffHand($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '16')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvRanged($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '17')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharInvTabard($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('item')
                ->where('guid', $id)
                ->where('slot', '18')
                ->get('character_inventory')
                ->row('item');
    }

    public function getCharactersOnlineAlliance($multiRealm)
    {
        $this->multiRealm = $multiRealm;
        $races = array('1','3','4','7','11','22','25');

        return $this->multiRealm->select('guid')
                ->where_in('race', $races)
                ->where('online', '1')
                ->get('characters')
                ->num_rows();
    }

    public function getCharactersOnlineHorde($multiRealm)
    {
        $this->multiRealm = $multiRealm;
        $races = array('2','5','6','8','10','9','26');

        return $this->multiRealm->select('guid')
                ->where_in('race', $races)
                ->where('online', '1')
                ->get('characters')
                ->num_rows();
    }

}
