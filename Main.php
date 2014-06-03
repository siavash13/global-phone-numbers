<?php
namespace MSISDN\Tool;

require 'lib\Countries.php';
require 'lib\DBConfig.php';
use MSISDN\Country_codes\Countries;
use MSISDN\DB\DBConfig;

class Main
{
    private $number;
    private $countries;
    private $countriesCodes;
    private $db;    

    public function __construct()
    {
        $this->countries = new Countries();
        $this->countriesCodes = $this->countries->getCountryInformation();
        $this->db = new DBConfig();
        $this->db->createDB();
        $this->db->createTable();
        $this->db->insertData();
    }
 
    public function test($param){
        return $param;
    }       

        public function getNumberDetail($number)
    {   
        $result = array();
        $found = FALSE;
        for ($i = 1; $i < 5 && $found == FALSE; ++$i) {                     
            if (array_key_exists(substr($number, 0, $i), $this->countriesCodes)) {
                $result['found'] = TRUE;
                $result['country_code'] = substr($number, 0, $i);
                $result['number'] =  substr($number, $i, strlen($number));  
                $found = TRUE;
            } else {
                $result['found'] = FALSE;
            }            
        }
        
        return $result;
    }
}
