<?php
namespace MSISDN\Tool;

require 'lib\DBConfig2.php';
use MSISDN\DB\DBConfig2;

class Main
{
    private $db;

    public function __construct()
    {
         $this->db = new DBConfig2();
    }

    public function getData($number)
    {
        return $this->db->getData($number);
    }
}
