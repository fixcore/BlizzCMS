<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api_char extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->characters = $this->load->database('characters', TRUE);
    }

    public function getCharInfo($guid, $selections)
    {
        if ($this->getCharRow($guid) < 1)
            return false;

        if ($this->getGenerated('1', $selections) == '1')
            $char_principal = array
            (
                'CharAccount'   => $this->getCharAccount($guid),
                'CharName'      => $this->getCharName($guid),
                'CharClass'     => $this->getCharClass($guid),
                'CharRace'      => $this->getCharRace($guid),
                'CharGender'    => $this->getCharGender($guid),
                'CharLevel'     => $this->getCharLevel($guid),
                'CharOnline'    => $this->getCharOnline($guid),
                'CharMoney'     => $this->getCharMoney($guid),
            );
        else $char_principal = array();

        if ($this->getGenerated('2', $selections) == '1')
            $char_internal = array
            (
                'CharXP'        => $this->getCharXP($guid),
                'CharBankSlot'  => $this->getCharbankSlots($guid),
                'CharFlags'     => $this->getCharplayerFlags($guid),
                'CharInstance'  => $this->getCharInstaceguid($guid),
                'CharTitle'     => $this->getCharTitle($guid),
                'CharKnowTitle' => $this->getCharTitles($guid),
                'CharLatency'   => $this->getCharLatency($guid),
            );
        else $char_internal = array();

        if ($this->getGenerated('3', $selections) == '1')
            $char_position = array
            (
                'CharPositionX'     => $this->getCharX($guid),
                'CharPositionY'     => $this->getCharY($guid),
                'CharPositionZ'     => $this->getCharZ($guid),
                'CharPositionO'     => $this->getCharO($guid),
                'CharPositionMap'   => $this->getCharMap($guid),
                'CharPositionZone'  => $this->getCharZone($guid),
                'CharTaxiMask'      => $this->getCharTaxiMask($guid),
                'CharExploreZones'  => $this->getCharExploreZones($guid),
            );
        else $char_position = array();

        if ($this->getGenerated('4', $selections) == '1')
            $char_skins = array
            (
                'CharSkin'          => $this->getCharSkin($guid),
                'CharFace'          => $this->getCharFace($guid),
                'CharHairStyle'     => $this->getCharhairStyle($guid),
                'CharHairColor'     => $this->getCharhairColor($guid),
                'CharFacilStyle'    => $this->getCharfacialStyle($guid),
            );
        else $char_skins = array();

        if ($this->getGenerated('5', $selections) == '1')
            $char_times = array
            (
                'CharTotalTime'      => $this->getCharTotalTime($guid),
                'CharLevelTime'      => $this->getCharLevelTime($guid),
                'CharLogoutTime'     => $this->getCharLogoutTime($guid),
                'CharDeathExpTime'   => $this->getCharDeathExpireTime($guid),
            );
        else $char_times = array();

        if ($this->getGenerated('6', $selections) == '1')
            $char_logins = array
            (
                'CharLoginAt'        => $this->getCharAtLogin($guid),
            );
        else $char_logins = array();

        if ($this->getGenerated('7', $selections) == '1')
            $char_points = array
            (
                'CharTotalArena'      => $this->getCharTotalArena($guid),
                'CharTotalHonor'      => $this->getCharTotalHonor($guid),
                'CharTodayHonor'      => $this->getCharTodayHonor($guid),
                'CharYesterdayHonor'  => $this->getCharYesterdayHonor($guid),
            );
        else $char_points = array();

        if ($this->getGenerated('8', $selections) == '1')
            $char_kills = array
            (
                'CharTotalKills'      => $this->getCharTotalKills($guid),
                'CharTodayKills'      => $this->getCharTodayKills($guid),
                'CharYesterdayKills'  => $this->getCharYesterdayKills($guid),
            );
        else $char_kills = array();
        
        if ($this->getGenerated('9', $selections) == '1')
            $char_personal = array
            (
                'CharHealth'  => $this->getCharhealth($guid),
                'CharPower1'  => $this->getCharPowerOne($guid),
                'CharPower2'  => $this->getCharPowerTwo($guid),
                'CharPower3'  => $this->getCharPowerThree($guid),
                'CharPower4'  => $this->getCharPowerFourth($guid),
                'CharPower5'  => $this->getCharPowerFive($guid),
                'CharPower6'  => $this->getCharPowerSix($guid),
                'CharPower7'  => $this->getCharPowerSeven($guid),
            );
        else $char_personal = array();

        $merge = array_merge($char_principal, $char_internal, $char_position, $char_skins, $char_times, $char_logins, $char_points, $char_kills, $char_personal);

        return json_encode($merge);
    }

    //private principal functions
    private function getCharRow($guid)
    {
        return $this->characters->query('SELECT guid FROM characters WHERE guid = "'.$guid.'"')->num_rows();
    }
    private function getCharName($guid)
    {
        return $this->characters->query("SELECT name FROM characters WHERE guid = '".$guid."'")->row()->name;
    }

    private function getCharAccount($guid)
    {
        $qq = $this->characters->query("SELECT account FROM characters WHERE guid = '".$guid."'")->row()->account;

        if(isset($_GET['api_username']))
            $qq = $this->m_data->getUsernameID($qq);

        return $qq;
    }

    private function getCharClass($guid)
    {
        $qq = $this->characters->query("SELECT class FROM characters WHERE guid = '".$guid."'")->row()->class;

        if(isset($_GET['api_class']))
            $qq = $this->m_general->getNameClass($qq);

        return $qq;
    }

    private function getCharRace($guid)
    {
        $qq = $this->characters->query("SELECT race FROM characters WHERE guid = '".$guid."'")->row()->race;

        if(isset($_GET['api_race']))
            $qq = $this->m_general->getRaceName($qq);

        return $qq;
    }

    private function getCharGender($guid)
    {
        $qq = $this->characters->query("SELECT gender FROM characters WHERE guid = '".$guid."'")->row()->gender;

        if(isset($_GET['api_gender']))
            $qq = $this->m_general->getGender($qq);

        return $qq;
    }

    private function getCharLevel($guid)
    {
        return $this->characters->query("SELECT level FROM characters WHERE guid = '".$guid."'")->row()->level;
    }

    private function getCharOnline($guid)
    {
        return $this->characters->query("SELECT online FROM characters WHERE guid = '".$guid."'")->row()->online;
    }

    private function getCharMoney($guid)
    {
        return $this->characters->query("SELECT money FROM characters WHERE guid = '".$guid."'")->row()->money;
    }

    //private internal functions
    private function getCharXP($guid)
    {
        return $this->characters->query("SELECT xp FROM characters WHERE guid = '".$guid."'")->row()->xp;
    }

    private function getCharbankSlots($guid)
    {
        return $this->characters->query("SELECT bankSlots FROM characters WHERE guid = '".$guid."'")->row()->bankSlots;
    }

    private function getCharplayerFlags($guid)
    {
        return $this->characters->query("SELECT playerFlags FROM characters WHERE guid = '".$guid."'")->row()->playerFlags;
    }

    private function getCharInstaceguid($guid)
    {
        return $this->characters->query("SELECT instance_id FROM characters WHERE guid = '".$guid."'")->row()->instance_id;
    }

    private function getCharTitle($guid)
    {
        return $this->characters->query("SELECT chosenTitle FROM characters WHERE guid = '".$guid."'")->row()->chosenTitle;
    }

    private function getCharTitles($guid)
    {
        return $this->characters->query("SELECT knownTitles FROM characters WHERE guid = '".$guid."'")->row()->knownTitles;
    }

    private function getCharLatency($guid)
    {
        return $this->characters->query("SELECT latency FROM characters WHERE guid = '".$guid."'")->row()->latency;
    }

    //private positions functions
    private function getCharX($guid)
    {
        return $this->characters->query("SELECT position_x FROM characters WHERE guid = '".$guid."'")->row()->position_x;
    }

    private function getCharY($guid)
    {
        return $this->characters->query("SELECT position_y FROM characters WHERE guid = '".$guid."'")->row()->position_y;
    }

    private function getCharZ($guid)
    {
        return $this->characters->query("SELECT position_z FROM characters WHERE guid = '".$guid."'")->row()->position_z;
    }

    private function getCharO($guid)
    {
        return $this->characters->query("SELECT orientation FROM characters WHERE guid = '".$guid."'")->row()->orientation;
    }

    private function getCharMap($guid)
    {
        return $this->characters->query("SELECT map FROM characters WHERE guid = '".$guid."'")->row()->map;
    }

    private function getCharZone($guid)
    {
        return $this->characters->query("SELECT zone FROM characters WHERE guid = '".$guid."'")->row()->zone;
    }

    private function getCharTaxiMask($guid)
    {
        return $this->characters->query("SELECT taximask FROM characters WHERE guid = '".$guid."'")->row()->taximask;
    }

    private function getCharExploreZones($guid)
    {
        return $this->characters->query("SELECT exploredZones FROM characters WHERE guid = '".$guid."'")->row()->exploredZones;
    }

    //private skins functions
    private function getCharSkin($guid)
    {
        return $this->characters->query("SELECT skin FROM characters WHERE guid = '".$guid."'")->row()->skin;
    }

    private function getCharFace($guid)
    {
        return $this->characters->query("SELECT face FROM characters WHERE guid = '".$guid."'")->row()->face;
    }

    private function getCharhairStyle($guid)
    {
        return $this->characters->query("SELECT hairStyle FROM characters WHERE guid = '".$guid."'")->row()->hairStyle;
    }

    private function getCharhairColor($guid)
    {
        return $this->characters->query("SELECT hairColor FROM characters WHERE guid = '".$guid."'")->row()->hairColor;
    }

    private function getCharfacialStyle($guid)
    {
        return $this->characters->query("SELECT facialStyle FROM characters WHERE guid = '".$guid."'")->row()->facialStyle;
    }

    //private times functions
    private function getCharTotalTime($guid)
    {
        return $this->characters->query("SELECT totaltime FROM characters WHERE guid = '".$guid."'")->row()->totaltime;
    }

    private function getCharLevelTime($guid)
    {
        return $this->characters->query("SELECT leveltime FROM characters WHERE guid = '".$guid."'")->row()->leveltime;
    }

    private function getCharLogoutTime($guid)
    {
        return $this->characters->query("SELECT logout_time FROM characters WHERE guid = '".$guid."'")->row()->logout_time;
    }

    private function getCharDeathExpireTime($guid)
    {
        return $this->characters->query("SELECT death_expire_time FROM characters WHERE guid = '".$guid."'")->row()->death_expire_time;
    }

    //private logins functions
    private function getCharAtLogin($guid)
    {
        return $this->characters->query("SELECT at_login FROM characters WHERE guid = '".$guid."'")->row()->at_login;
    }

    //private points functions
    private function getCharTotalArena($guid)
    {
        return $this->characters->query("SELECT arenaPoints FROM characters WHERE guid = '".$guid."'")->row()->arenaPoints;
    }

    private function getCharTotalHonor($guid)
    {
        return $this->characters->query("SELECT totalHonorPoints FROM characters WHERE guid = '".$guid."'")->row()->totalHonorPoints;
    }

    private function getCharTodayHonor($guid)
    {
        return $this->characters->query("SELECT todayHonorPoints FROM characters WHERE guid = '".$guid."'")->row()->todayHonorPoints;
    }

    private function getCharYesterdayHonor($guid)
    {
        return $this->characters->query("SELECT yesterdayHonorPoints FROM characters WHERE guid = '".$guid."'")->row()->yesterdayHonorPoints;
    }

    //private kills functions
    private function getCharTotalKills($guid)
    {
        return $this->characters->query("SELECT totalKills FROM characters WHERE guid = '".$guid."'")->row()->totalKills;
    }

    private function getCharTodayKills($guid)
    {
        return $this->characters->query("SELECT todayKills FROM characters WHERE guid = '".$guid."'")->row()->todayKills;
    }

    private function getCharYesterdayKills($guid)
    {
        return $this->characters->query("SELECT yesterdayKills FROM characters WHERE guid = '".$guid."'")->row()->yesterdayKills;
    }

    //private personal functions
    private function getCharhealth($guid)
    {
        return $this->characters->query("SELECT health FROM characters WHERE guid = '".$guid."'")->row()->health;
    }

    private function getCharPowerOne($guid)
    {
        return $this->characters->query("SELECT power1 FROM characters WHERE guid = '".$guid."'")->row()->power1;
    }

    private function getCharPowerTwo($guid)
    {
        return $this->characters->query("SELECT power2 FROM characters WHERE guid = '".$guid."'")->row()->power2;
    }

    private function getCharPowerThree($guid)
    {
        return $this->characters->query("SELECT power3 FROM characters WHERE guid = '".$guid."'")->row()->power3;
    }

    private function getCharPowerFourth($guid)
    {
        return $this->characters->query("SELECT power4 FROM characters WHERE guid = '".$guid."'")->row()->power4;
    }

    private function getCharPowerFive($guid)
    {
        return $this->characters->query("SELECT power5 FROM characters WHERE guid = '".$guid."'")->row()->power5;
    }

    private function getCharPowerSix($guid)
    {
        return $this->characters->query("SELECT power6 FROM characters WHERE guid = '".$guid."'")->row()->power6;
    }

    private function getCharPowerSeven($guid)
    {
        return $this->characters->query("SELECT power7 FROM characters WHERE guid = '".$guid."'")->row()->power7;
    }

    //selections
    private function getGenerated($type, $selection)
    {
        $qq = $this->db->query("SELECT id FROM fx_api_generator WHERE id = '".$selection."'")->num_rows();

        if ($qq > 0)
            return $this->db->query("SELECT active FROM fx_api_generator WHERE type = '".$type."' AND id = '".$selection."'")->row_array()['active'];
        else
            return false;
    }

    private function getGeneratedType($selection)
    {
        return $this->db->query("SELECT type FROM fx_api_generator WHERE active = 1 AND id = '".$selection."'");
    }

    public function getApiGenerateCount($id)
    {
        return $this->db->query("SELECT id FROM fx_api_generator WHERE id = '".$id."'")->num_rows();
    }

    public function getTypeApiGenerate($id)
    {
        return $this->db->query("SELECT type FROM fx_api_char WHERE id = '".$id."'")->row_array()['type'];
    }

}