<?php

require_once ('process/dbh.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Плати</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="mk">
</head>
<body>
	
	<header>
		<nav>
			<h1>Балдомеро</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">Почетна</a></li>
				<li><a class="homeblack" href="addemp.php">Нов работник</a></li>
				<li><a class="homeblack" href="viewemp.php">Листа на вработени</a></li>
				<li><a class="homeblack" href="assign.php">Нова Задача</a></li>
				<li><a class="homeblack" href="assignproject.php">Задачи</a></li>
				<li><a class="homered" href="salaryemp.php">Плати</a></li>
				<li><a class="homeblack" href="empleave.php">Слободни денови</a></li>
				<li><a class="homeblack" href="alogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				
				
				<th align = "center">Base Salary</th>
				<th align = "center">Bonus</th>
				<th align = "center">TotalSalary</th>
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['total']."</td>";
					
					

				}


			?>
			
			</table>
</body>
</html>