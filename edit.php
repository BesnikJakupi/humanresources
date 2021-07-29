<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";
$sql1 = "SELECT * FROM `salary` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$fathersName = mysqli_real_escape_string($conn, $_POST['fathersName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$contractType = mysqli_real_escape_string($conn, $_POST['contractType']);
	$jobTime = mysqli_real_escape_string($conn, $_POST['jobTime']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	$total = mysqli_real_escape_string($conn, $_POST['total']);
	$reasonSal = mysqli_real_escape_string($conn, $_POST['reasonSal']);
	
	//$salary = mysqli_real_escape_string($conn, $_POST['salary']);





	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`fathersName`='$fathersName',`contractType`='$contractType',`jobTime`='$jobTime',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`gender`='$gender',`contact`='$contact',`nid`='$nid',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");
$result1 = mysqli_query($conn, "UPDATE `salary` SET `total`='$total',`reasonSal`='$reasonSal' WHERE id=$id");	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$fathersName =$res['fathersName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	$contractType = $res['contractType'];
	$jobTime = $res['jobTime'];
	
}
}

$sql1 = "SELECT * FROM `employee`,`salary` WHERE employee.id=salary.id";
$result1 = mysqli_query($conn, $sql1);

if($result1){
	while($res = mysqli_fetch_assoc($result1)){
		$total = $res['total'];
		$reasonSal = $res['reasonSal'];
	}
}

?>

<html>
<head>
	<title>Балдомеро</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="mk">
</head>
<body>
	<header>
		<nav>
			<!-- <h1>Балдомеро</h1>-->
			<ul id="navli">
				<li><a class="homeblack" href="index.html">Почетна</a></li>
				<li><a class="homeblack" href="addemp.php">Нов работник</a></li>
				<li><a class="homered" href="viewemp.php">Работници</a></li>
				<li><a class="homeblack" href="elogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Ажурирај податоци</h2>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" >
                                </div>
                            </div>
							
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>">
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="fathersName" value="<?php echo $fathersName;?>" >
                                </div>
                            </div>
							
							
							 <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $dept;?>">
                                   
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <input  name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                                   
                                </div>
                            </div>
							
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
									<input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>">
                                </div>
                            </div>
                        </div>
						<!-- -------------------------------------------------------------------->
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="contractType" value="<?php echo $contractType;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
									<input class="input--style-1" type="text" name="jobTime" value="<?php echo $jobTime;?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" name="nid" value="<?php echo $nid;?>">
                        </div>

                        
                         <div class="input-group">
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="degree" value="<?php echo $degree;?>">
                        </div>
                       
						
						<div class="input-group">
                            <input class="input--style-1" type="text" name="total" value="<?php echo $total;?>">
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="reasonSal" value="<?php echo $reasonSal;?>">
                        </div>
						
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
