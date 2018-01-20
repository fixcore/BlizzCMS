<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_soap extends CI_Model {

    public function getRealmStatus()
    {
        $this->characters = $this->load->database('characters', TRUE);

        $qq = $this->characters->query("SELECT * FROM characters WHERE online = 1");

        if ($qq->num_rows())
            return $this->lang->line('players_on').': '.$qq->num_rows();
        else
            return $this->lang->line('no_players');
    }

    public function connect()
    {
        $soapUser = $this->config->item('soap_user');
        $soapPass = $this->config->item('soap_pass');
        $soapHost = $this->config->item('soap_ip');
        $soapPort = $this->config->item('soap_port');
        $soap_uri = $this->config->item('soap_type');

        $this->client = new SoapClient(NULL, array(
            "location"      => "http://".$soapHost.":".$soapPort."/",
            "uri"           => "urn:". $soap_uri ."",
            "style"         => SOAP_RPC,
            "login"         => $soapUser,
            "password"      => $soapPass,
            "trace"         => 1,
            "exceptions"    => 0
            )
        );

        if (is_soap_fault($this->client))
        {
            return 'Soap not found';
        }
        return $this->client;
    }

    public function commandSoap($command)
    {
        $client = $this->connect();
        return $client->executeCommand(new SoapParam($command, "command"));
    }
}
