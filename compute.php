<?php
require 'client.php';

$number = $_GET['number'];
$client = new client($number);
?>

<a href="index.php" >Back to Home</a>