<?php
namespace MSISDN\unitTest;

require_once './lib/DBConfig2.php';
use MSISDN\DB\DBConfig2;

class UnitTest extends \PHPUnit_Framework_TestCase
{
    public function testDBData()
    {
        $db = new DBConfig2();
        $randomNumber  = rand(1, 1700);
        $randomRow = $db->getById($randomNumber);
        $prefix_code = $randomRow['first_digits'];
        for ($i = 1; $i < 10-strlen($randomNumber); ++$i) {
            $prefix_code .= rand(0, 9);
        }
        $resultRow = $db->getData($prefix_code);
        $this->assertEquals($randomRow['first_digits'], $resultRow['first_digits']);
        $this->assertEquals($randomRow['country_code'], $resultRow['country_code']);
    }
}
