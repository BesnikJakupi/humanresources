<?php 

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
//$mmid = (isset($_GET['dim']) ? $_GET['dim'] : '');
//$parts = explode('?', $mmid);
//$mid = $parts[0];
//$scnew = $parts[1];
  //echo $mid;
  //$id=substr($scnew,3);
  //echo $id;
$sql = "SELECT * FROM `employee` WHERE id=$id";
$sql1 = "SELECT * FROM `employee`,`salary` WHERE employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

// while($row = mysqli_fetch_assoc($result)) {
    // //echo $row['employee.dept']; // Print a single column data
	
    // echo print_r($row);       // Print the entire row data
	// echo "<br />";
	// echo "<br />";
	// echo "<br />";
	
// }
	//$id = (isset($_GET['id']) ? $_GET['id'] : '');
	//$sql = "SELECT * from `employee` WHERE id=$id";
	//$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$fathersName =$res['fathersName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	$contractType = $res['contractType'];
	$jobTime = $res['jobTime'];
	$pripadnostZaednici = $res['pripadnostZaednici'];
	$birthAddress = $res['birthAddress'];
	$jobaddress = $res['jobaddress'];
	$knowledgeLevel = $res['knowledgeLevel'];
	$opisZanimanje = $res['opisZanimanje'];
	$staz = $res['staz'];
	$checkInvalidity = $res['checkInvalidity'];
	$sifraEmployee = $res['sifraEmployee'];
	$nazivRab = $res['nazivRab'];
	$sedistRab = $res['sedistRab'];
	$brojDelovniotSub = $res['brojDelovniotSub'];
	$osnoVaPrest = $res['osnoVaPrest'];
	$pocDate = $res['pocDate'];
	$prestanokDate = $res['prestanokDate'];
	
	
}
}
if($result1){
	while($res = mysqli_fetch_assoc($result1)){
		$total = $res['total'];
	}
}
?>

<html>
<head>
	<title>Балдомеро</title>
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

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
				<li><a class="homeblack" href="index.html">Почетна</a></li>
				<!--<li><a class="homeblack" href="addemp.php">Нов работник</a></li>-->
				<li><a class="homered" href="viewemp.php">Работници</a></li>
				<li><a class="homeblack" href="elogin.html">Одјава</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Работен Договор</h2>
					<div id="printDiv">
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input ng-value="Address_line1" class="input--style-1" type="text"value="<?php echo $firstname;?>" placeholder="Име" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Презиме" value="<?php echo $lastname;?>" name="lastName" required="required">
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Татково име" value="<?php echo $fathersName;?>" name="fathersName" required="required">
                                </div>
                            </div>
							 <!--<div class="input-group">
								<input class="input--style-1" type="text" placeholder="Департамент" name="dept" required="required">
							</div>-->
							<div class="col-2">
							<div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Татково име" value="<?php echo $dept;?>" name="dept" required="required">
                                </div>
                                
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email"  value="<?php echo $email;?>" placeholder="Емаил" name="email" required="required">
                        </div>
                        <p>Ден Месец и Год на раѓање</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" value="<?php echo $birthday;?>" placeholder="BIRTHDATE" name="birthday" required="required">
                                   
                                </div>
                            </div>
							
							<!--<<button onclick="window.print()">PRINT DOCUMENT</button>-->
                            
							<div class="input-group">
                                    <input class="input--style-1" type="text" value="<?php echo $gender;?>"  name="gender" required="required">
                                   
                                </div>
                               <!-- <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option  selected="selected" disabled>Пол</option>
                                            <option value="Male">Машки</option>
                                            <option value="Female">Женски</option>
                                            <!--<option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>-->
                            
                        </div>
                        <div class="row row-space">
						<div class="input-group">
                                    <input class="input--style-1" type="text" value="<?php echo $contractType;?>"  name="contractType" required="required">
                                   
                                </div>
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="contractType">
                                            <option  selected="selected" disabled>Tраење на работниот однос:</option>
                                            <option value="Неопределено">Неопределено</option>
                                            <option value="Определено">Определено</option>
                                          </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>-->
							
							<div class="input-group">
                                    <input class="input--style-1" type="text" value="<?php echo $jobTime;?>"  name="jobTime" required="required">
                                   
                                </div>
							<!--<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jobTime">
                                            <option selected="selected" disabled>Работно време на работникот</option>
                                            <option value="Полно">Полно</option>
                                            <option value="Скратено">Скратено</option>
                                          </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $contact;?>" placeholder="Контакт број" name="contact" required="required" >
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $nid;?>"  placeholder="ЕМБГ" name="nid" required="required">
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $pripadnostZaednici;?>" placeholder="pripadnostZaednici" name="pripadnostZaednici" required="required">
                        </div>
						<!--<<div class="row row-space">
                             <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="pripadnostZaednici">
                                            <option  selected="selected" disabled>Припадност на заедниците</option>
                                            <option value="Албанец">Албанец</option>
                                            <option value="Македонец">Македонец</option>
                                            <option value="Турчин">Турчин</option>
                                            <option value="Ром">Ром</option>
                                            <option value="Англичанец">Англичанец</option>
                                          </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>-->
                           
                            <!--<input class="input--style-1" type="text" placeholder="Припадност на заедниците" name="pripadnostZaednici" required="required">
                        </div>-->
						<div class="input-group">
                            <input class="input--style-1" type="text"value="<?php echo $birthAddress;?>"  placeholder="Место на раѓање (општина, населено место и држава)" name="birthAddress" required="required" >
                        </div>
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Живеалиште и адреса (општина, населено место, улица и број и држава)" name="address" required="required">
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $jobaddress;?>" placeholder="Место на работа" name="jobaddress" required="required">
                        </div>
						<!--<div class="input-group">
						 
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jobaddress">
                                            <option  selected="selected" disabled>Место на работа</option>
                                            <option value="Чаир улица 4">Чаир улица 4</option>
                                            <option value="Аеродром булевард 3">Аеродром булевард 3</option>
                                            <option value="Улица 23 Карпош 3">Улица 23 Карпош 3</option>
                                         </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                               
                           <!-- <input class="input--style-1" type="text" placeholder="Место на работа (општина, населено место,улица и број, држава)" name="jobaddress" required="required">
                        </div>-->
						<!--<div class="input-group">
						
						<div class="rs-select2 js-select-simple select--no-search">
                                        <select name="degree">
                                            <option  selected="selected" disabled>Степен  и вид на завршено образование</option>
                                            <option value="Без образование">Без образование</option>
                                            <option value="Средно училиште">Средно училиште</option>
                                            <option value="Факултет">Факултет</option>
                                            <option value="Магистри и доктори на наука">Магистри и доктори на наука</option>
                                         </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                            <input class="input--style-1" type="text" placeholder="Степен  и вид на завршено образование (без образование, основно училиште, средно училиште, више, факултет, магистри и доктори на наука)" name="degree" required="required">
                        </div>
						-->
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $degree;?>" placeholder="Степен  и вид на завршено образование" name="degree" required="required">
                        </div>
						<div class="input-group">
						<div class="rs-select2 js-select-simple select--no-search">
                                      <input class="input--style-1" type="text" value="<?php echo $knowledgeLevel;?>" placeholder="Степен  и вид на завршено образование" name="degree" required="required">
                        
                                    </div>
                            <!--<input class="input--style-1" type="text" placeholder="Степен на стручна подготовка, (НКВ, ПКВ, КВ, ВКВ, ССО за занимање)" name="knowledgeLevel" required="required">-->
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $opisZanimanje;?>" placeholder="Шифра и опис на занимање" name="opisZanimanje" required="required">
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $staz;?>" placeholder="Стаж на осигурување до стапувањето на работа кај работодавачот" name="staz" required="required">
                        </div>
						<div class="input-group">
						
							<input class="input--style-1" type="text" value="<?php echo $checkInvalidity;?>" placeholder="Стаж на осигурување до стапувањето на работа кај работодавачот" name="staz" required="required">
                       
                            <!--<input class="input--style-1" type="text" placeholder="Дали е трудов инвалид" name="checkInvalidity" required="required">-->
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $sifraEmployee;?>" placeholder="Шифра и назив на претежната дејноста на работодавачот" name="sifraEmployee" required="required">
                        </div>
						
						<div class="input-group">
						 <input class="input--style-1" type="text" value="<?php echo $nazivRab;?>" placeholder="Шифра и назив на претежната дејноста на работодавачот" name="sifraEmployee" required="required">
                        
                            <!--<input class="input--style-1" type="text" placeholder="Hазив на работодавачот" name="nazivRab" required="required">-->
                        </div>
						
						<div class="input-group">
						<input class="input--style-1" type="text" value="<?php echo $sedistRab;?>" placeholder="Шифра и назив на претежната дејноста на работодавачот" name="sifraEmployee" required="required">
                        
                           <!--< <input class="input--style-1" type="text" placeholder="Cедиште на работодавачот" name="sedistRab" required="required">-->
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $brojDelovniotSub;?>" placeholder="Број на деловниот субјект" name="brojDelovniotSub" required="required">
                        </div>
						
						
						<div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $osnoVaPrest;?>" placeholder="Oснова за престанок на работниот однос" name="osnoVaPrest" required="required">
                        </div>
						
						
                        <div class="row row-space">
						<p style="font-size:13px">Датум на засновање на работниот однос</p>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" value="<?php echo $pocDate;?>" placeholder="BIRTHDATE" name="pocDate" required="required">
                                   
                                </div>
                            </div>
							<p style="font-size:13px">Датум на престанок на работниот однос</p>
							<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" value="<?php echo $prestanokDate;?>" type="date" placeholder="BIRTHDATE" name="prestanokDate" >
                                   
                                </div>
                            </div>
							
							
                        </div>
						
                       

                        <div class="input-group">
                            <input class="input--style-1" type="number" value="<?php echo $total;?>" placeholder="Плата" name="salary">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="Слика" name="file">
                        </div>





					 
                        
						
                    </form>
					</div>
					<div class="p-t-20">
								<button class="btn btn--radius btn--green" id="doPrintbtn" name="print" type="submit">Print</button>
								<a href="viewemp.php"><button id="backback"class="btn btn--radius btn--green" name="print" type="submit">Back </button></a>
						 </div>
                </div>
				
				
				
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
	
	<script type="text/javascript">	
		document.getElementById('doPrintbtn').addEventListener('click', function() {
			var printContents = document.getElementById('printDiv').value;
			var originalContents = document.body.value;
			document.body.value = printContents;
			window.print();
			document.body.value = originalContents;
		});
	</script>
</body>
</html>
