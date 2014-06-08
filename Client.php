<?php
require_once  'remote/jsonrpcphp/includes/jsonRPCClient.php';


class Client
{
    private $remoteMain;
    public function __construct($param)
    {
        $this->remoteMain = new jsonRPCClient('http://localhost/global-phone-numbers/MainRPC.php');
        $result = $this->remoteMain->getData($param);
        $country_code = $result['country_dial_code'];
        echo 'number is : '. substr($param, strlen($country_code), strlen($param));
        echo $result['country_code'] . ', ' . $result['operator_name']. ', ' . $country_code . ', ' .
        substr($param, strlen($country_code), strlen($param)) . ', ' . $result['country_code'];
    }
}
