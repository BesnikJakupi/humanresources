<?php

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,managertable.manCat,managertable.IdManager,salary.base,salary.bonus,salary.total 
from employee,`managertable`,`salary` where employee.id=salary.id AND employee.dept=managertable.manCat";

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
			<!-- <h1>Балдомеро</h1>-->
			<ul id="navli">
				<li><a class="homeblack" href="mloginwel.php?id=<?php echo $id;?>">Почетна</a></li>
				
				<li><a class="homeblack" href="mviewemp.php?id=<?php echo $id;?>">Листа на вработени</a></li>
				<li><a class="homeblack" href="massign.php?id=<?php echo $id;?>">Нова Задача</a></li>
				<li><a class="homeblack" href="massignproject.php?id=<?php echo $id?>">Задачи</a></li>
				<li><a class="homered" href="msalaryemp.php?id=<?php echo $id;?>">Плати</a></li>
				<li><a class="homeblack" href="mempleave.php?id=<?php echo $id;?>">Слободни денови</a></li>
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
					if($id == $employee['IdManager']){
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['total']."</td>";
					
					}

				}


			?>
			
			</table>
</body>
</html>