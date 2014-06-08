<?php
    require 'client.php';
    require 'lib\Countries.php';
    require_once 'lib\DBConfig.php';
    
    use MSISDN\DB\DBConfig;
    
    $db = new DBConfig();
    $db->createDB();
    $db->createTable();
    $db->insertData();
    $db->inserData2();
//$client = new client("38640123456");
?>
<form method="get" action="compute.php">
    <input type="text" name="number" />
    <input type="submit" value="Submit" />
 </form>

