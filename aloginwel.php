<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Балдомеро</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="mk">
</head>
<body>
	
	<header>
		<nav>
			<!-- <h1>Балдомеро</h1>-->
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">Почетна</a></li>
				<li><a class="homeblack" href="addemp.php">Нов работник</a></li>
				<li><a class="homeblack" href="viewemp.php">Листа на вработени</a></li>
				<li><a class="homeblack" href="assign.php">Нова Задача</a></li>
				<li><a class="homeblack" href="assignproject.php">Задачи</a></li>
				<li><a class="homeblack" href="salaryemp.php">Плати</a></li>
				<li><a class="homeblack" href="empleave.php">Слободни денови</a></li>
				<li><a class="homeblack" href="alogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Вработени</h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Име и презиме</th>
				<th align = "center">Поени за плата</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
				}


			?>

		</table>

		<!--<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div>
-->
		
	</div>
</body>
</html>