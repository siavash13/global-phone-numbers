<?php
namespace MSISDN\Tool;

require 'lib\Countries.php';
require 'lib\DBConfig.php';
use MSISDN\DB\DBConfig;

class Main
{
    private $db;

    public function __construct()
    {
        
    }

    public function getData($number)
    {
        $this->db = new DBConfig();
        return $this->db->getData($number);
    }
}
