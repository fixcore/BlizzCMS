<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api_char extends CI_Model {

    public function __construct()
    {
        parent::__construct();
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
        return $this->characters->select('guid')
                ->where('guid', $guid)
                ->get('characters')
                ->num_rows();
    }

    private function getCharName($guid)
    {
        return $this->characters->select('name')
                ->where('guid', $guid)
                ->get('characters')
                ->row('name');
    }

    private function getCharAccount($guid)
    {
        $qq = $this->characters->select('account')
                ->where('guid', $guid)
                ->get('characters')
                ->row('account');

        if (isset($_GET['api_username']))
            $qq = $this->m_data->getUsernameID($qq);

        return $qq;
    }

    private function getCharClass($guid)
    {
        $qq = $this->characters->select('class')
                ->where('guid', $guid)
                ->get('characters')
                ->row('class');

        if (isset($_GET['api_class']))
            $qq = $this->m_general->getNameClass($qq);

        return $qq;
    }

    private function getCharRace($guid)
    {
        $qq = $this->characters->select('race')
                ->where('guid', $guid)
                ->get('characters')
                ->row('race');

        if (isset($_GET['api_race']))
            $qq = $this->m_general->getRaceName($qq);

        return $qq;
    }

    private function getCharGender($guid)
    {
        $qq = $this->characters->select('gender')
                ->where('guid', $guid)
                ->get('characters')
                ->row('gender');

        if (isset($_GET['api_gender']))
            $qq = $this->m_general->getGender($qq);

        return $qq;
    }

    private function getCharLevel($guid)
    {
        return $this->characters->select('level')
                ->where('guid', $guid)
                ->get('characters')
                ->row('level');
    }

    private function getCharOnline($guid)
    {
        return $this->characters->select('online')
                ->where('guid', $guid)
                ->get('characters')
                ->row('online');
    }

    private function getCharMoney($guid)
    {
        return $this->characters->select('money')
                ->where('guid', $guid)
                ->get('characters')
                ->row('money');
    }

    //private internal functions
    private function getCharXP($guid)
    {
        return $this->characters->select('xp')
                ->where('guid', $guid)
                ->get('characters')
                ->row('xp');
    }

    private function getCharbankSlots($guid)
    {
        return $this->characters->select('bankSlots')
                ->where('guid', $guid)
                ->get('characters')
                ->row('bankSlots');
    }

    private function getCharplayerFlags($guid)
    {
        return $this->characters->select('playerFlags')
                ->where('guid', $guid)
                ->get('characters')
                ->row('playerFlags');
    }

    private function getCharInstaceguid($guid)
    {
        return $this->characters->select('instance_id')
                ->where('guid', $guid)
                ->get('characters')
                ->row('instance_id');
    }

    private function getCharTitle($guid)
    {
        return $this->characters->select('chosenTitle')
                ->where('guid', $guid)
                ->get('characters')
                ->row('chosenTitle');
    }

    private function getCharTitles($guid)
    {
        return $this->characters->select('knownTitles')
                ->where('guid', $guid)
                ->get('characters')
                ->row('knownTitles');
    }

    private function getCharLatency($guid)
    {
        return $this->characters->select('latency')
                ->where('guid', $guid)
                ->get('characters')
                ->row('latency');
    }

    //private positions functions
    private function getCharX($guid)
    {
        return $this->characters->select('position_x')
                ->where('guid', $guid)
                ->get('characters')
                ->row('position_x');
    }

    private function getCharY($guid)
    {
        return $this->characters->select('position_y')
                ->where('guid', $guid)
                ->get('characters')
                ->row('position_y');
    }

    private function getCharZ($guid)
    {
        return $this->characters->select('position_z')
                ->where('guid', $guid)
                ->get('characters')
                ->row('position_z');
    }

    private function getCharO($guid)
    {
        return $this->characters->select('orientation')
                ->where('guid', $guid)
                ->get('characters')
                ->row('orientation');
    }

    private function getCharMap($guid)
    {
        return $this->characters->select('map')
                ->where('guid', $guid)
                ->get('characters')
                ->row('map');
    }

    private function getCharZone($guid)
    {
        return $this->characters->select('zone')
                ->where('guid', $guid)
                ->get('characters')
                ->row('zone');
    }

    private function getCharTaxiMask($guid)
    {
        return $this->characters->select('taximask')
                ->where('guid', $guid)
                ->get('characters')
                ->row('taximask');
    }

    private function getCharExploreZones($guid)
    {
        return $this->characters->select('exploredZones')
                ->where('guid', $guid)
                ->get('characters')
                ->row('exploredZones');
    }

    //private skins functions
    private function getCharSkin($guid)
    {
        return $this->characters->select('skin')
                ->where('guid', $guid)
                ->get('characters')
                ->row('skin');
    }

    private function getCharFace($guid)
    {
        return $this->characters->select('face')
                ->where('guid', $guid)
                ->get('characters')
                ->row('face');
    }

    private function getCharhairStyle($guid)
    {
        return $this->characters->select('hairStyle')
                ->where('guid', $guid)
                ->get('characters')
                ->row('hairStyle');
    }

    private function getCharhairColor($guid)
    {
        return $this->characters->select('hairColor')
                ->where('guid', $guid)
                ->get('characters')
                ->row('hairColor');
    }

    private function getCharfacialStyle($guid)
    {
        return $this->characters->select('facialStyle')
                ->where('guid', $guid)
                ->get('characters')
                ->row('facialStyle');
    }

    //private times functions
    private function getCharTotalTime($guid)
    {
        return $this->characters->select('totaltime')
                ->where('guid', $guid)
                ->get('characters')
                ->row('totaltime');
    }

    private function getCharLevelTime($guid)
    {
        return $this->characters->select('leveltime')
                ->where('guid', $guid)
                ->get('characters')
                ->row('leveltime');
    }

    private function getCharLogoutTime($guid)
    {
        return $this->characters->select('logout_time')
                ->where('guid', $guid)
                ->get('characters')
                ->row('logout_time');
    }

    private function getCharDeathExpireTime($guid)
    {
        return $this->characters->select('death_expire_time')
                ->where('guid', $guid)
                ->get('characters')
                ->row('death_expire_time');
    }

    //private logins functions
    private function getCharAtLogin($guid)
    {
        return $this->characters->select('at_login')
                ->where('guid', $guid)
                ->get('characters')
                ->row('at_login');
    }

    //private points functions
    private function getCharTotalArena($guid)
    {
        return $this->characters->select('arenaPoints')
                ->where('guid', $guid)
                ->get('characters')
                ->row('arenaPoints');
    }

    private function getCharTotalHonor($guid)
    {
        return $this->characters->select('totalHonorPoints')
                ->where('guid', $guid)
                ->get('characters')
                ->row('totalHonorPoints');
    }

    private function getCharTodayHonor($guid)
    {
        return $this->characters->select('todayHonorPoints')
                ->where('guid', $guid)
                ->get('characters')
                ->row('todayHonorPoints');
    }

    private function getCharYesterdayHonor($guid)
    {
        return $this->characters->()('map')
                ->where('guid', $guid)
                ->get('characters')
                ->row('()');
    }

    //private kills functions
    private function getCharTotalKills($guid)
    {
        return $this->characters->select('totalKills')
                ->where('guid', $guid)
                ->get('characters')
                ->row('totalKills');
    }

    private function getCharTodayKills($guid)
    {
        return $this->characters->select('todayKills')
                ->where('guid', $guid)
                ->get('characters')
                ->row('todayKills');
    }

    private function getCharYesterdayKills($guid)
    {
        return $this->characters->select('yesterdayKills')
                ->where('guid', $guid)
                ->get('characters')
                ->row('yesterdayKills');
    }

    //private personal functions
    private function getCharhealth($guid)
    {
        return $this->characters->select('health')
                ->where('guid', $guid)
                ->get('characters')
                ->row('health');
    }

    private function getCharPowerOne($guid)
    {
        return $this->characters->select('power1')
                ->where('guid', $guid)
                ->get('characters')
                ->row('power1');
    }

    private function getCharPowerTwo($guid)
    {
        return $this->characters->select('power2')
                ->where('guid', $guid)
                ->get('characters')
                ->row('power2');
    }

    private function getCharPowerThree($guid)
    {
        return $this->characters->select('power3')
                ->where('guid', $guid)
                ->get('characters')
                ->row('power3');
    }

    private function getCharPowerFourth($guid)
    {
        return $this->characters->select('power4')
                ->where('guid', $guid)
                ->get('characters')
                ->row('power4');
    }

    private function getCharPowerFive($guid)
    {
        return $this->characters->select('power5')
                ->where('guid', $guid)
                ->get('characters')
                ->row('power5');
    }

    private function getCharPowerSix($guid)
    {
        return $this->characters->select('power6')
                ->where('guid', $guid)
                ->get('characters')
                ->row('power6');
    }

    private function getCharPowerSeven($guid)
    {
        return $this->characters->select('power7')
                ->where('guid', $guid)
                ->get('characters')
                ->row('power7');
    }

    //selections
    private function getGenerated($type, $selection)
    {
        $qq = $this->db->select('id')
                ->where('id', $selection)
                ->get('fx_api_generator')
                ->num_rows();

        if ($qq > 0)
            return $this->db->select('active')
                ->where('type', $type)
                ->where('id', $selection)
                ->row_array()['active'];
        else
            return false;
    }

    private function getGeneratedType($selection)
    {
        return $this->db->select('type')
                ->where('active', '1')
                ->where('id', $selection)
                ->get('fx_api_generator');
    }

    public function getApiGenerateCount($id)
    {
        return $this->db->select('id')
                ->where('id', $id)
                ->get('fx_api_generator')
                ->num_rows();
    }

    public function getTypeApiGenerate($id)
    {
        return $this->db->select('type')
                ->where('id', $id)
                ->get('fx_api_char')
                ->row_array()['type'];
    }
}
