<?php
namespace MSISDN\Tool;

require 'lib\Countries.php';
require 'lib\DBConfig.php';
use MSISDN\Country_codes\Countries;
use MSISDN\DB\DBConfig;

class Main
{
    private $countries;
    private $countriesCodes;
    private $db;

    public function __construct()
    {
        $this->countries = new Countries();
        $this->countriesCodes = $this->countries->getCountryInformation();
        /*
        $this->db = new DBConfig();
        $this->db->createDB();
        $this->db->createTable();
        $this->db->insertData();
        $this->db->inserData2();
         * 
         */
    }
    
    public function getData($number)
    {
        $this->db = new DBConfig();
        return $this->db->getData($number);
    }

    public function getNumberDetail($number)
    {
        $result = array();
        $found = false;
        for ($i = 1; $i < 5 && $found == false; ++$i) {
            if (array_key_exists(substr($number, 0, $i), $this->countriesCodes)) {
                $result['found'] = true;
                $result['country_code'] = substr($number, 0, $i);
                $result['number'] =  substr($number, $i, strlen($number));
                $found = true;
            } else {
                $result['found'] = false;
            }
        }
        return $result;
    }
}
