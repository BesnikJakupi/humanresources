<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Employee | Admin Panel</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="print.css" media="print">
	
</head>

<body>
    <header id="nvv">
        <nav>
           <!-- <h1>Балдомеро</h1>-->
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">Почетна</a></li>
                <li><a class="homered" href="addemp.php">Нов Работник</a></li>
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



<div id="printDiv">

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
	
        <div class="wrapper wrapper--w680">
		
            <div class="card card-1">
			
                <div class="card-heading"></div>
                
				<div class="card-body">
				 <img src="logo.png" style="width:20%;height:25%;" id="loggo"></img>
                    <h2 class="title">Работен договор</h2>
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input ng-value="Address_line1" class="input--style-1" type="text" placeholder="Име" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Презиме" name="lastName" required="required">
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Татково име" name="fathersName" required="required">
                                </div>
                            </div>
							 <!--<div class="input-group">
								<input class="input--style-1" type="text" placeholder="Департамент" name="dept" required="required">
							</div>-->
							<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="dept">
                                            <option  selected="selected" disabled>Департмент</option>
                                            <option value="Програмирање">Програмирање</option>
                                            <option value="Marketing">Маркетинг</option>
                                            <option value="Бизнис аналист">Бизнис аналист</option>
                                            <!--<option value="Other">Other</option>-->
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Емаил" name="email" required="required">
                        </div>
                        <p>Ден Месец и Год на раѓање</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                                   
                                </div>
                            </div>
							
							<!--<<button onclick="window.print()">PRINT DOCUMENT</button>-->
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option  selected="selected" disabled>Пол</option>
                                            <option value="Male">Машки</option>
                                            <option value="Female">Женски</option>
                                            <!--<option value="Other">Other</option>-->
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                             <div class="col-2">
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
                            </div>
							<div class="col-2">
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
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Контакт број" name="contact" required="required" >
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ЕМБГ" name="nid" required="required">
                        </div>
						<!--<<div class="row row-space">
                             <div class="col-2">-->
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
                                </div>
                           
                            <!--<input class="input--style-1" type="text" placeholder="Припадност на заедниците" name="pripadnostZaednici" required="required">
                        </div>-->
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Место на раѓање (општина, населено место и држава)" name="birthAddress" required="required" >
                        </div>
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Живеалиште и адреса (општина, населено место, улица и број и држава)" name="address" required="required">
                        </div>
						<div class="input-group">
						 
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jobaddress">
                                            <option  selected="selected" disabled>Место на работа</option>
                                            <option value="Чаир улица 4">Чаир улица 4</option>
                                            <option value="Аеродром булевард 3">Аеродром булевард 3</option>
                                            <option value="Улица 23 Карпош 3">Улица 23 Карпош 3</option>
                                         </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                               
                           <!-- <input class="input--style-1" type="text" placeholder="Место на работа (општина, населено место,улица и број, држава)" name="jobaddress" required="required">-->
                        </div>
						<div class="input-group">
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
                            <!--<input class="input--style-1" type="text" placeholder="Степен  и вид на завршено образование (без образование, основно училиште, средно училиште, више, факултет, магистри и доктори на наука)" name="degree" required="required">-->
                        </div>
						<div class="input-group">
						<div class="rs-select2 js-select-simple select--no-search">
                                        <select name="knowledgeLevel">
                                            <option  selected="selected" disabled>Степен на стручна подготовка</option>
                                            <option value="НКВ">НКВ</option>
                                            <option value="ПКВ">ПКВ</option>
                                            <option value="КВ">КВ</option>
                                            <option value="ССО за занимање">ССО за занимање</option>
                                         </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                            <!--<input class="input--style-1" type="text" placeholder="Степен на стручна подготовка, (НКВ, ПКВ, КВ, ВКВ, ССО за занимање)" name="knowledgeLevel" required="required">-->
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Шифра и опис на занимање" name="opisZanimanje" required="required">
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Стаж на осигурување до стапувањето на работа кај работодавачот" name="staz" required="required">
                        </div>
						<div class="input-group">
						
							<div class="rs-select2 js-select-simple select--no-search">
                                        <select name="checkInvalidity">
                                            <option  selected="selected" disabled>Дали е трудов инвалид</option>
                                            <option value="ДА">ДА</option>
                                            <option value="НЕ">НЕ</option>
                                           
                                         </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                            <!--<input class="input--style-1" type="text" placeholder="Дали е трудов инвалид" name="checkInvalidity" required="required">-->
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Шифра и назив на претежната дејноста на работодавачот" name="sifraEmployee" required="required">
                        </div>
						
						<div class="input-group">
						<div class="rs-select2 js-select-simple select--no-search">
                                        <select name="nazivRab">
                                            <option  selected="selected" disabled>Hазив на работодавачот</option>
                                            <option value="Балдомеро">Балдомеро</option>
                                            </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                            <!--<input class="input--style-1" type="text" placeholder="Hазив на работодавачот" name="nazivRab" required="required">-->
                        </div>
						
						<div class="input-group">
						<div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sedistRab">
                                            <option  selected="selected" disabled>Cедиште на работодавачот</option>
                                            <option value="Булевард македонија бр 3">Булевард македонија бр 3</option>
                                            </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                           <!--< <input class="input--style-1" type="text" placeholder="Cедиште на работодавачот" name="sedistRab" required="required">-->
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Број на деловниот субјект" name="brojDelovniotSub" required="required">
                        </div>
						
						
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Oснова за престанок на работниот однос" name="osnoVaPrest" required="required">
                        </div>
						
						
                        <div class="row row-space">
						<p style="font-size:13px">Датум на засновање на работниот однос</p>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="pocDate" required="required">
                                   
                                </div>
                            </div>
							<p style="font-size:13px">Датум на престанок на работниот однос</p>
							<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="prestanokDate" >
                                   
                                </div>
                            </div>
							
							
                        </div>
						
                       

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Плата" name="salary">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="Слика" name="file">
                        </div>






						<div class="p-t-20" style="margin-top:-5%;">
                           <button class="btn btn--radius btn--green" id="submit" type="submit">Submit</button>
						  
                        </div>
					 
                        
						
                    </form>
					<button id="doPrintbtn" style="margin-top:1px;width: 19%;"class="btn btn--radius btn--green" >Print</button>
					</div>
					
					
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
<!-- end document-->
