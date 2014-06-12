<?php
namespace MSISDN\DB;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */  
class DBConfig2
{
    
    private $mysqli;
    
    public function __construct()
    {
         $this->mysqli = new \mysqli("localhost", "root", "", "msisdn");
    }
    
    public function createTable()
    {
        $sql = file_get_contents("lib\msisdn.sql");
        $this->mysqli->multi_query($sql);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    

    public function getData($number)
    {
        $result = $this->mysqli->query(
            "select t.* from prefix t where $number like concat(t.first_digits, '%') 
                order by length(t.first_digits) desc limit 1"
        );
        $row = mysqli_fetch_array($result);
        return $row;
    }
    
    public function getById($id)
    {
        $result = $this->mysqli->query(
            "select t.* from prefix t where id = $id"
        );
        $row = mysqli_fetch_array($result);
        return $row;
    }
}
