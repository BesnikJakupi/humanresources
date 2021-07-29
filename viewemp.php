<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Балдомеро</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="mk">
</head>
<body>
	<header>
		<nav>
			<!--<h1>Балдомеро</h1>-->
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">Почетна</a></li>
				<li><a class="homeblack" href="addemp.php">Нов работник</a></li>
				<li><a class="homered" href="viewemp.php">Листа на вработени</a></li>
				<li><a class="homeblack" href="assign.php">Нова Задача</a></li>
				<li><a class="homeblack" href="assignproject.php">Задачи</a></li>
				<li><a class="homeblack" href="salaryemp.php">Плати</a></li>
				<li><a class="homeblack" href="empleave.php">Слободни денови</a></li>
				<li><a class="homeblack" href="alogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">ИД</th>
				<th align = "center">Слика</th>
				<th align = "center">Име</th>
				<th align = "center">Татково име</th>
				<th align = "center">Емаил</th>
				<th align = "center">Датум на раѓање</th>
				<th align = "center">Пол</th>
				<th align = "center">Tраење на работниот однос</th>
				<th align = "center">Работно време на работникот</th>
				<th align = "center">Контакт број</th>
				<th align = "center">ЕМБГ</th>
				<th align = "center">Живеалиште и адреса</th>
				<th align = "center">Департамент</th>
				<th align = "center">Степен  и вид на завршено образование</th>
				
				<th align = "center">Point</th>
				
				<th align = "center">Стаж</th>
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					echo "<td>".$employee['fathersName']."</td>";
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contractType']."</td>";
					echo "<td>".$employee['jobTime']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['nid']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['degree']."</td>";
					echo "<td>".$employee['points']."</td>";
					echo "<td>".$employee['staz']."</td>";
					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> 
					<a href=\"admPrintContract.php?id=$employee[id]\">Print</a> 
					<a href=\"delete.php?id=$employee[id]\" onClick=\"window.alert('Do you want to delete employee?');return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>