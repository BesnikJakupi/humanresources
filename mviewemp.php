<?php

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT * from `employee` , `rank`,`managertable` WHERE employee.id = rank.eid AND employee.dept=managertable.manCat";
//$sql = "SELECT employee.dept,employee.id,employee.firstName,employee.lastName, managertable.manCat,managertable.IdManager,
//FROM employee
//RIGHT JOIN managertable ON managertable.manCat = employee.dept
//LEFT JOIN rank ON employee.id = rank.eid";
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
			<!-- <h1>Балдомеро</h1>-->
			<ul id="navli">
				<li><a class="homeblack" href="mloginwel.php?id=<?php echo $id;?>">Почетна</a></li>
				<!--<li><a class="homeblack" href="addemp.php">Нов работник</a></li>-->
				<li><a class="homered" href="mviewemp.php?id=<?php echo $id;?>">Листа на вработени</a></li>
				<li><a class="homeblack" href="massign.php?id=<?php echo $id;?>">Нова Задача</a></li>
				<li><a class="homeblack" href="massignproject.php?id=<?php echo $id;?>">Задачи</a></li>
				<li><a class="homeblack" href="msalaryemp.php?id=<?php echo $id;?>"">Плати</a></li>
				<li><a class="homeblack" href="mempleave.php?id=<?php echo $id;?>">Слободни денови</a></li>
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
					
					if($id == $employee['IdManager']){
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
					echo "<td><a href=\"medit.php?dim=$id?id=$employee[id]\">Edit</a> 
					<a href=\"mPrintContract.php?dim=$id?id=$employee[id]\">Print</a> 
					 <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('дали сте сигурни дека ќе го избришете вработениот?')\" >Delete</a></td>";
					}
				}


			?>

		</table>
		
	
</body>
</html>