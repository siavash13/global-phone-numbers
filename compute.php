<?php
require 'client.php';

$number = $_GET['number'];
$client = new Client($number);
?>
<br />
<a href="index.php" >Back to Home</a>
