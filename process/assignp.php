<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
//$eid = $_POST['eid'];
$subdate = $_POST['duedate'];
$names=$_POST['names'];

$sql = "INSERT INTO `project`(`eid`, `pname`, `duedate` , `status`) VALUES ('$names' , '$pname' , '$subdate' , 'Due')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>