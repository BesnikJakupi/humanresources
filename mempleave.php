<?php

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
//$sql = "SELECT * from `employee_leave`";
// $sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token 
// from employee, employee_leave where employee.id = employee_leave.id order by employee_leave.token";

$sql = "Select employee.id, employee.firstName, employee.lastName,managertable.manCat,managertable.IdManager, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token 
from employee,managertable, employee_leave where employee.dept=managertable.manCat AND employee.id = employee_leave.id order by employee_leave.token";

//echo "$sql";
$result = mysqli_query($conn, $sql);

// while($row = mysqli_fetch_assoc($result)) {
    // //echo $row['employee.dept']; // Print a single column data
	// if($id == $row['IdManager']){
    // echo print_r($row);       // Print the entire row data
	// echo "<br />";
	// echo "<br />";
	// echo "<br />";
	// }
// }


?>



<html>
<head>
	<!-- <h1>Балдомеро</h1>-->
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="mk">
</head>
<body>
	
	<header>
		<nav>
			<h1></h1>
			<ul id="navli">
				<li><a class="homeblack"  href="mloginwel.php?id=<?php echo $id;?>">Почетна</a></li>
				<!--<li><a class="homeblack" href="addemp.php">Нов работник</a></li>-->
				<li><a class="homeblack" href="mviewemp.php?id=<?php echo $id;?>">Листа на вработени</a></li>
				<li><a class="homeblack" href="massign.php?id=<?php echo $id;?>">Нова Задача</a></li>
				<li><a class="homeblack" href="massignproject.php?id=<?php echo $id?>">Задачи</a></li>
				<li><a class="homeblack" href="msalaryemp.php?id=<?php echo $id;?>">Плати</a></li>
				<li><a class="homered" href="mempleave.php?id=<?php echo $id;?>">Слободни денови</a></li>
				<li><a class="homeblack" href="alogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<table>
			<tr>
				<th>Emp. ID</th>
				<th>Token</th>
				<th>Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Total Days</th>
				<th>Reason</th>
				<th>Status</th>
				<th>Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					
				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";
				if($id == $employee['IdManager']){
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['token']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"approve.php?id=$employee[id]&token=$employee[token]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | 
					<a href=\"meditLeave.php?id=$employee[id]&token=$employee[token]&manCat=$id\">Edit</a> |
					<a href=\"mprintLeave.php?id=$employee[id]&token=$employee[token]&manCat=$id\">Print</a> |
					<a href=\"cancel.php?id=$employee[id]&token=$employee[token]\" onClick=\"return confirm('Are you sure you want to Canel the request?')\">Cancel</a></td>";
					}
				}


			?>

		</table>
		
	</div>
</body>
</html>