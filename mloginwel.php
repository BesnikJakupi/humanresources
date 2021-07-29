<?php 
require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
//echo $id;
//$sqll = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
//$sql = "SELECT id, firstName, lastName, points FROM employee, managertable WHERE managertable.manCat = employee.dept";
//$sql = "SELECT employee.firstName,employee.lastName,employee.id,employee.dept FROM employee RIGHT JOIN managertable ON employee.dept = managertable.manCat";
$sql = "SELECT employee.dept,employee.id,employee.firstName,employee.lastName, managertable.manCat,managertable.IdManager, rank.points
FROM employee
RIGHT JOIN managertable ON managertable.manCat = employee.dept
LEFT JOIN rank ON rank.eid = employee.id";
$result = mysqli_query($conn, $sql);

//echo $result;
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
				<li><a class="homered"  href="mloginwel.php?id=<?php echo $id;?>">Почетна</a></li>
				<!--<li><a class="homeblack" href="addemp.php">Нов работник</a></li>-->
				<li><a class="homeblack" href="mviewemp.php?id=<?php echo $id;?>">Листа на вработени</a></li>
				<li><a class="homeblack" href="massign.php?id=<?php echo $id;?>">Нова Задача</a></li>
				<li><a class="homeblack" href="massignproject.php?id=<?php echo $id?>">Задачи</a></li>
				<li><a class="homeblack" href="msalaryemp.php?id=<?php echo $id;?>">Плати</a></li>
				<li><a class="homeblack" href="mempleave.php?id=<?php echo $id;?>">Слободни денови</a></li>
				<li><a class="homeblack" href="alogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Департмент менаџер</h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Име и Презиме</th>
				<!--<th align = "center">Презиме</th>-->
				<th align = "center">Поени</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					if($id == $employee['IdManager']){
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					//echo "<td>".$employee['lastName']."</td>";
					echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
					}
				}


			?>

		</table>

		<!--<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div>-->

		
	</div>
</body>
</html>