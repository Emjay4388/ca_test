<?php
$port = "51524";
$username = "root";
$database = "sourcecodester_exam";
$servername = "monorail.proxy.rlwy.net";
$password = "AhBGD1df535deBHeF25Fg41GBcH5A2cA";

$con = new mysqli($servername, $username, $password, $database, $port) or die("Could not connect to MySQL: " . mysqli_error($con));

if (!$con) die("Connection failed: " . mysqli_connect_error());
?>
