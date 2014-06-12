<?php
namespace MSISDN\client;

require_once  'remote/jsonrpcphp/includes/jsonRPCClient.php';


/**
 * This class handles calling of remote RPC server 
 * and printing out the result
 *
 * @remoteMain   jsonRPCClient
 * @country_code country dialing code
 */

class Client
{
    private $remoteMain;
	
	/***
	* The constructor methof of class
	*
	*@param input parameter which is a phone number
	***/
    public function __construct($param)
    {
			
        $this->remoteMain = new \jsonRPCClient('http://localhost/global-phone-numbers/MainRPC.php');
        $result = $this->remoteMain->getData($param);        
        $country_code = $result['country_dial_code'];
        echo 'number is : '. substr($param, strlen($country_code), strlen($param));
        echo $result['country_code'] . ', ' . $result['operator_name']. ', ' . $country_code . ', ' .
        substr($param, strlen($country_code), strlen($param)) . ', ' . $result['country_code'];
    }
}
