<?php

    require 'client.php';
    require_once 'lib\DBConfig2.php';
    
    use MSISDN\DB\DBConfig2;
    
    $db = new DBConfig2();
    $db->createTable();
//$client = new client("38640123456");
?>
<form method="get" action="compute.php">
    <input type="text" name="number" />
    <input type="submit" value="Submit" />
 </form>
