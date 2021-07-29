<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "370project";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);
$conn->set_charset("utf8");
if(!$conn){
	echo "Databese Connection Failed";
}

?>