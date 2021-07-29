<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee_leave` WHERE 1";
//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['updatel']))
{
	$token = mysqli_real_escape_string($conn, $_GET['token']);
	$editstart = mysqli_real_escape_string($conn, $_POST['editstart']);
	$editend = mysqli_real_escape_string($conn, $_POST['editend']);
	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");

$result = mysqli_query($conn, "UPDATE `employee_leave` SET `start`='$editstart',`end`='$editend' WHERE token=$token");
	

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='empleave.php';
    </SCRIPT>");
	
}

?>

<?php
	$token= (isset($_GET['token']) ? $_GET['token'] : '');
	$sql = "SELECT * from `employee_leave` WHERE token=$token";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$reason = $res['reason'];
	$start = $res['start'];
	$end = $res['end'];
	
	
}
}

?>
<html>
<head>
	<title>Apply Leave | Employee Panel | </title>
	<link rel="stylesheet" type="text/css" href="styleapply.css">
</head>
<body bgcolor="#F0FFFF">
	
	<header>
	
	
		<nav>
			<!-- <h1>Балдомеро</h1>-->
			<ul id="navli">
				<!--<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>">My Projects</a></li>-->
				<li><a class="homered" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Edit Leave Request</h2>
                    <form action="" method="POST">


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="<?php echo $reason?>" name="reason">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<p>Start Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" placeholder="<?php echo $start?>" name="start">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>End Date</p>
                                <div class="input-group">
                                    <input class="input--style-1"  placeholder="<?php echo $end?>" name="end">
                                   
                                </div>
                            </div>
                        </div>
						
						<div class="row row-space">
                            <div class="col-2">
                            	<p>Edit Start Date</p>
                                <div class="input-group">
                                    <input class="input--style-1"  type="date" placeholder="" name="editstart">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>Edit End Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date"   name="editend">
                                   
                                </div>
                            </div>
                        </div>
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="updatel" type="submit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
		




<!--

	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
				<th align = "center">Total Days</th>
				<th align = "center">Reason</th>
				<th align = "center">Status</th>
			</tr>


			<php


				$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status From employee, employee_leave Where employee.id = $id and employee_leave.id = $id order by employee_leave.token";
				$result = mysqli_query($conn, $sql);
				while ($employee = mysqli_fetch_assoc($result)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					
				}


			?>


		</table>


-->




</body>
</html>