<?php

require_once ('process/dbh.php');
$idd = (isset($_GET['id']) ? $_GET['id'] : '');

$sql = "SELECT id,firstName,dept,manCat,IdManager from `employee`,`managertable` order by employee.firstName";
$sqla = "SELECT id,firstName from `employee` order by firstName";

$result = mysqli_query($conn, $sql);
$resulta = mysqli_query($conn, $sqla);



?>

<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Балдомеро</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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
				<li><a class="homered" href="assign.php">Нова Задача</a></li>
				<li><a class="homeblack" href="assignproject.php">Задачи</a></li>
				<li><a class="homeblack" href="salaryemp.php">Плати</a></li>
				<li><a class="homeblack" href="empleave.php">Слободни денови</a></li>
				<li><a class="homeblack" href="alogin.html">Одјава</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Додај задача</h2>
                    <form action="process/assignp.php" method="POST" enctype="multipart/form-data">


                        <select class="form-select" id="names" name="names"><option>Работник</option>
							<?php while($res = mysqli_fetch_assoc($result)){
							
								$names = $res['firstName'];
								$id=$res['id'];
									
								echo "<option title='$names' value='$id'>$names</option>";
								}
							
								?>
							</select>
						
                        
				<br />


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Project Name" name="pname" required="required">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="date" name="duedate" required="required">
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
