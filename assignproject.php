<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `project` order by subdate desc";

//echo "$sql";
$result = mysqli_query($conn, $sql);

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
				<li><a class="homeblack" href="addemp.php">Нов работник</a></li>
				<li><a class="homeblack" href="viewemp.php">Листа на вработени</a></li>
				<li><a class="homeblack" href="assign.php">Нова Задача</a></li>
				<li><a class="homered" href="assignproject.php">Задачи</a></li>
				<li><a class="homeblack" href="salaryemp.php">Плати</a></li>
				<li><a class="homeblack" href="empleave.php">Слободни денови</a></li>
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
					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['eid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a>"; 

				}


			?>

		</table>
		
	
</body>
</html>