<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fathersName = $_POST['fathersName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$contractType = $_POST['contractType'];
$jobTime = $_POST['jobTime'];
$salary = $_POST['salary'];
$birthday =$_POST['birthday'];
//divider
$pripadnostZaednici =$_POST['pripadnostZaednici'];
$birthAddress =$_POST['birthAddress'];
$jobaddress =$_POST['jobaddress'];
$knowledgeLevel =$_POST['knowledgeLevel'];
$opisZanimanje =$_POST['opisZanimanje'];
$staz =$_POST['staz'];
$checkInvalidity =$_POST['checkInvalidity'];
$sifraEmployee =$_POST['sifraEmployee'];
$nazivRab =$_POST['nazivRab'];
$sedistRab =$_POST['sedistRab'];
$brojDelovniotSub =$_POST['brojDelovniotSub'];
$osnoVaPrest =$_POST['osnoVaPrest'];
$pocDate =$_POST['pocDate'];
$prestanokDate =$_POST['prestanokDate'];
//echo "$birthday";
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored)){

    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);

    $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`,`pripadnostZaednici`,`birthAddress`,`jobaddress`,`knowledgeLevel`,`opisZanimanje`,`staz`,`checkInvalidity`,`sifraEmployee`,`nazivRab`,`sedistRab`,`brojDelovniotSub`, `osnoVaPrest`,`pocDate`,`prestanokDate`,`contractType`, `jobTime`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`, `fathersName`) VALUES 
	('','$firstname','$lastName','$email','$pripadnostZaednici','$birthAddress','$jobaddress','$knowledgeLevel','$opisZanimanje','$staz','$checkInvalidity','$sifraEmployee','$nazivRab','$sedistRab','$brojDelovniotSub','$osnoVaPrest','$pocDate','$prestanokDate','$contractType','$jobTime','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','$destinationfile','$fathersName')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

if(($result) == 1){
    var_dump($_POST);
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Додадовте нов работник')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

}

else{

      $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`,`pripadnostZaednici`,`birthAddress`,`jobaddress`,`knowledgeLevel`,`opisZanimanje`,`staz`,`checkInvalidity`,`sifraEmployee`,`nazivRab`,`sedistRab`,`brojDelovniotSub`, `osnoVaPrest`,`pocDate`,`prestanokDate`, `contractType`, `jobTime`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`, `fathersName`) VALUES ('','$firstname','$lastName','$email','$pripadnostZaednici','$birthAddress','$jobaddress','$knowledgeLevel','$opisZanimanje','$staz','$checkInvalidity','$sifraEmployee','$nazivRab','$sedistRab','$brojDelovniotSub','$osnoVaPrest','$pocDate','$prestanokDate','$contractType','$jobTime','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','images/no.jpg','$fathersName')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Додадовте нов работник')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

// else{
//     echo ("<SCRIPT LANGUAGE='JavaScript'>
//     window.alert('Failed to Registere')
//     window.location.href='javascript:history.go(-1)';
//     </SCRIPT>");
// }
}






?>