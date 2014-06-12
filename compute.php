<?php
require 'client.php';
use MSISDN\client\Client;

$number = $_GET['number'];
$client = new Client($number);
?>
<br />
<a href="index.php" >Back to Home</a>
