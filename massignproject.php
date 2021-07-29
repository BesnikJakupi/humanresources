<?php

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
// $sql = "SELECT project.pid,project.eid,project.pname,project.duedate,project.subdate,project.mark,project.status, employee.dept, managertable.manCat,managertable.IdManager
// FROM managertable, employee
	// LEFT JOIN project ON project.eid = employee.id";
	
$sql = "SELECT * from `project`,`managertable`,`employee` WHERE managertable.manCat=employee.dept AND managertable.IdManager='$id' AND project.eid=employee.id";



//$sql = "SELECT * from `employee` , `project`,`managertable`";
//echo "$id";
$result = mysqli_query($conn, $sql);

// while($row = mysqli_fetch_assoc($result)) {
    // //echo $row['employee.dept']; // Print a single column data
	// if($id == $row['IdManager']){
		// echo "<br/>";
    // echo print_r($row);       // Print the entire row data
	// echo "<br />";
	// echo "<br />";
	// echo "<br />";
	// }
	// else break;
// }


?>



<html>
<head>
	<title>Нова Задача</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="mk">
</head>
<body>
	<header>
		<nav>
			<!-- <h1>Балдомеро</h1>-->
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">Почетна</a></li>
				
				<li><a class="homeblack" href="mviewemp.php?id=<?php echo $id;?>">Листа на вработени</a></li>
				<li><a class="homeblack" href="massign.php?id=<?php echo $id;?>">Нова Задача</a></li>
				<li><a class="homered" href="massignproject.php?id=<?php echo $id?>">Задачи</a></li>
				<li><a class="homeblack" href="msalaryemp.php?id=<?php echo $id;?>">Плати</a></li>
				<li><a class="homeblack" href="mempleave.php?id=<?php echo $id;?>">Слободни денови</a></li>
				<li><a class="homeblack" href="alogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Submission Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					if($id == $employee['IdManager']){
					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['eid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"managerMark.php?id=$employee[eid]&pid=$employee[pid]&manCat=$id\">Mark</a>"; 
					}
					else break;
				}


			?>

		</table>
		
	
</body>
</html>