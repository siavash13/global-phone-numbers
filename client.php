<?php
require_once  'remote/jsonrpcphp/includes/jsonRPCClient.php';


class client
{
    //put your code here
    private $remoteMain;
    
    public function __construct() {
        $this->remoteMain = new jsonRPCClient('http://localhost/global-phone-numbers/MainRPC.php');        
        var_dump($this->remoteMain->getNumberDetail("123455667"));
    }
    
   
}
