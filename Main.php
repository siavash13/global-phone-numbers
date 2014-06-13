<?php
namespace MSISDN\Tool;

require 'lib\DBConfig2.php';
use MSISDN\DB\DBConfig2;

/*
 * This serving the the main functionality
 * such as getting number and finds it details
 * 
 * @db DBConfig2 object
 */
class Main
{
    private $db;

    public function __construct()
    {
         $this->db = new DBConfig2();
    }
    /***
     * This method calls the getData method of 
     * DBConfig2 object
     * 
     * @number   the phone number
     ***/
    public function getData($number)
    {
        return $this->db->getData($number);
    }
}
