<?php

$host = "localhost";
$user = "investopher_leads";
$password = "cRptQL#U8*eC";
$db = "investopher_leads";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
