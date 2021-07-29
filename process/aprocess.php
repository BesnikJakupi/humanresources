<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `alogin` WHERE email = '$email' AND password = '$password'";

$sqlman = "SELECT * from `managertable` WHERE emailMan = '$email' AND passwordMan = '$password'";
$sqlmanid = "SELECT IdManager from `managertable` WHERE emailMan = '$email' AND passwordMan = '$password'";
//echo "$sqlman";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sqlman);

$mid = mysqli_query($conn , $sqlmanid);
$manid = "";
if(mysqli_num_rows($result) == 1 ){
	

	//echo ("logged in");
	header("Location: ..//aloginwel.php");
}
if(mysqli_num_rows($result1) == 1 ){
	$manager = mysqli_fetch_array($mid);
	$manid = ($manager['IdManager']);

	//echo ("logged in");
	header("Location: ..//mloginwel.php?id=$manid");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>