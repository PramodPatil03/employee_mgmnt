<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE `id` = 1";
$sqls = "SELECT * FROM `salary` WHERE `id` = 1";
$sqlm = "SELECT * FROM `monthly_salary` WHERE `id` = 1";
$sqlmarks = "SELECT * FROM `rank` WHERE `eid` = 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
$results = mysqli_query($conn, $sqls);
$resultm = mysqli_query($conn, $sqlm);
$resultmarks = mysqli_query($conn, $sqlmarks);

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	// $nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$points = mysqli_real_escape_string($conn, $_POST['points']);
    $month = mysqli_real_escape_string($conn, $_POST['month']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	$work_days = mysqli_real_escape_string($conn, $_POST['work_days']);
	$base = mysqli_real_escape_string($conn, $_POST['base']);
	$da = mysqli_real_escape_string($conn, $_POST['da']);
	$deduction = mysqli_real_escape_string($conn, $_POST['deduction']);
    $total_salary = (($base * $work_days) + $da - $deduction);
    




	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`gender`='$gender',`contact`='$contact',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");
$result = mysqli_query($conn, "UPDATE `salary` SET `base`='$base',`da`='$da',`deduction`='$deduction',`work_days`='$work_days',`total`='$mega_total' WHERE id=$id");
$sqlm = "INSERT INTO `monthly_salary`(`id`,`month`,`work_days`, `base`, `da`,`deduction`,`total`) VALUES ('$id','$month','$work_days','$base','$da','$deduction','$total_salary') ";
$resultm = mysqli_query($conn, $sqlm);
$resultmark = mysqli_query($conn, "UPDATE `rank` set `points` = '$points' where eid='$id'");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
    // $eid = (isset($_GET['eid']) ? $_GET['eid'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
    $sqls = "SELECT * from `salary` WHERE id=$id";
    $sqlmark ="SELECT * from `rank` WHERE eid='$id'";
    // $sqlm = "SELECT * from `monthly_salary` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
    $results = mysqli_query($conn, $sqls);
    $resultmark = mysqli_query($conn,$sqlmark);
    $result_sal = mysqli_query($conn, $sqls);
   $mega_total = 0;
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
   
    // $da = $res['da'];
    // $deduction = $res['deduction'];
    
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	// $bonus = $res['b/onus'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	
}
    }
if($result){
while($ress = mysqli_fetch_assoc($results)){
        $work_days = $ress['work_days'];
        $base = $ress['base'];
        $da = $ress['da'];
        $deduction = $ress['deduction'];
}
}
if($resultmark){
    while($resmark = mysqli_fetch_assoc($resultmark)){
        $points = $resmark['points'];
    }
}
// if($result){
// while($resm = mysqli_fetch_assoc($resultm)){
//     $month = $resm['month'];
//     $work_days = $ress['work_days'];
//     $base = $ress['base'];
//     $da = $ress['da'];
//     $deduction = $ress['deduction'];
// }
// }

?>

<html>

<head>
    <title>View Employee | Admin Panel | Employee Management System</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>EMS</h1>
            <ul id="navli">
            <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="projects.php">Projects</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>

				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="monthly_salary.php">Monthly Salary</a></li>

				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="query.php">Queries</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
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
                    <h2 class="title">Update Employee Info</h2>
                    <form id="registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                firstName
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="firstName"
                                        value="<?php echo $firstname;?>">
                                </div>
                            </div>
                            <div class="col-2">
                                lastName
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="lastName"
                                        value="<?php echo $lastname;?>">
                                </div>
                            </div>
                        </div>



                        Email

                        <div class="input-group">
                            <input class="input--style-1" type="email" name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                Birth Date
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday"
                                        value="<?php echo $birthday;?>">

                                </div>
                            </div>
                            <div class="col-2">
                                Gender
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="gender"
                                        value="<?php echo $gender;?>">
                                </div>
                            </div>
                        </div>
                        Contact
                        <div class="input-group">
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                        Address
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="address" value="<?php echo $address;?>">
                        </div>
                        
                        <!-- Degree
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="degree" value="<?php //echo $degree;?>">
                        </div> -->

                
                        <div class="row row-space">
                            <div class="col-2">
                            Department
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>">
                        </div>
                            </div>
                            <div class="col-2">
                                Points
                                <div class="input-group">
                                    <input class="input--style-1" type="points" name="points"
                                        value="<?php echo $points;?>">
                                </div>
                            </div>
                        </div>
                            
                            <div class="row row-space">
                            <div class="col-2">
                                Degree
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Degree" name="degree"
                                        required="required" value="<?php echo $degree ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                Month
                                <div class="input-group">
                                    <input class="input--style-1" type="month" name="month" value="<?php echo $month;?>">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                                Working Days
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="work_days"
                                        value="<?php echo $work_days;?>">

                                </div>
                            </div>
                            <div class="col-2">
                                Basic Salary(Daily Wase)
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="base" value="<?php echo $base;?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                D.A.
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="da" value="<?php echo $da;?>">

                                </div>
                            </div>
                            <div class="col-2">
                                Deduction
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="deduction"
                                        value="<?php echo $deduction;?>">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>"
                            required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>

                    </form>
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
</body>

</html>