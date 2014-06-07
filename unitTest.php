<?php
require_once './lib/DBConfig.php';
require_once './vendor/phpunit/phpunit/src/Framework/';
use MSISDN\DB;
class unitTest extends PHPUnit_Framework_TestCase{
    //put your code here    

    public function generateNumber(){
        $random  = rand(1, 1700);
        return $random;    
    }
    
    public function testDBData(){
        $randomNumber = $this->generateNumber();
        $db = new DBConfig();
        $randomRow = $db->getById($randomNumber);
        echo $randomNumber . '<br />';
        var_dump($randomRow);
        exit();
    }
    
    
}

?>
