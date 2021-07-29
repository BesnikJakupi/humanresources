<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee_leave` WHERE 1";
$id = (isset($_GET['manCat']) ? $_GET['manCat'] : '');
//echo $id;
$result = mysqli_query($conn, $sql);
if(isset($_POST['updatel']))
{
	$token = mysqli_real_escape_string($conn, $_GET['token']);
	$editstart = mysqli_real_escape_string($conn, $_POST['editstart']);
	$editend = mysqli_real_escape_string($conn, $_POST['editend']);
	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");

//$result = mysqli_query($conn, "UPDATE `employee_leave` SET `start`='$editstart',`end`='$editend' WHERE token=$token");
	

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
	window.location.href='javascript:history.go(-1)';
    
    </SCRIPT>");
	//window.location.href='empleave.php'; 
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
<head >
	<title>Apply Leave | Employee Panel | </title>
	<link rel="stylesheet" type="text/css" href="styleapply.css">
	<link rel="stylesheet" type="text/css" href="css/mediaLeave.css">
</head>
<body bgcolor="#F0FFFF">
	
	<header>
	
	
		<nav>
			<h1></h1>
			<ul id="navli"><!--
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>">My Projects</a></li>
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>">Apply Leave</a></li>-->
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
							
						<div id="printDiv">						
						<form action="" method="POST">
								<h2 style="text-align: center;">Р Е Ш Е Н И Е </h2>
								<h4 style="text-align: center;">за користење годишен одмор</h4>
	<br/>
					<p style="text-align: justify;">
					
					На работникот ________________________, вработен во <b>БАЛДОМЕРО</b> на работно место ________________________, 
				му се одобрува користење на годишен одмор за 2021 година, во траење од  <?php echo $difference = (abs(strtotime($start) - strtotime($end))/86400);?> денови.
				Правото и времетраењето на годишниот одмор е утврдено во согласност со одредбите од Законот за работни односи и актите на работодавачот.

					</p>

						
						
						
						
						
						
						
						
						<br/>
							<div class="input-group">Причина
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
							
							<p>Потпис</p>
							<input class="input--style-1" type="text" placeholder="_______________________________" name="signature" disabled>
							<p>Друштво</p>
							<input class="input--style-1" type="text" placeholder="_______________________________" name="signature" disabled>
							
						 </form>
						 </div>
						 
						 <div class="p-t-20">
								<button class="btn btn--radius btn--green" id="doPrintbtn" name="print" type="submit">Print</button>
								
								<a href="mempleave.php?id=<?php echo $id;?>"><button id="backback"class="btn btn--radius btn--green" name="print" type="submit">Back </button></a>
								
								
								
						 </div>
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


<script type="text/javascript">	
		document.getElementById('doPrintbtn').addEventListener('click', function() {
			var printContents = document.getElementById('printDiv').value;
			var originalContents = document.body.value;
			document.body.value = printContents;
			window.print();
			document.body.value = originalContents;
		});
	</script>

</body>
</html>