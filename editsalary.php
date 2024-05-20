<?php
include('process/dbh.php');
$id = $_POST['id'];
$work_days = $_POST['work_days'];
$base = $_POST['base'];
$da = $_POST['da'];
$deduction = $_POST['deduction'];
?>

<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Update Employee Salary | Employee Management System</title>

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
</head>

<body>
    <header>
        <nav>
            <h1>EMS</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
                <li><a class="homered" href="addemp.php">Add Employee</a></li>
                <li><a class="homeblack" href="viewemp.php">View Employee</a></li>
                <li><a class="homeblack" href="assign.php">Assign Project</a></li>
                <li><a class="homeblack" href="assignproject.php">Project Status</a></li>
                <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li> 
                <li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Info</h2>
                    <form action="editsalary.php" method="POST" >
                    <div class="row row-space">
                            <div class="col-2">
                                ID
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="id" value="<?php echo $id;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                Working Days
                                <div class="input-group">
									<input class="input--style-1" type="number" name="work_days" value="<?php echo $work_days;?>">
                                </div>
                            </div>
                        </div>
                        Basic Salary
                        <div class="input-group">
                            <input class="input--style-1" type="number"  name="base" value="<?php echo $base;?>">
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
									<input class="input--style-1" type="number" name="deduction" value="<?php echo $deduction;?>">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Bonus" name="bonus">
                        </div> -->
                        







                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
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

<?php
if($_POST['submit']){
    $id = $_POST['id'];
    $work_days = $_POST['work_days'];
    $base = $_POST['base'];
    $da = $_POST['da'];
    $deduction = $_POST['deduction'];
    $total_salary =(($base * $work_days) + $da-$deduction);
    $query = "UPDATE `salary` SET `id`='$id', `work_days`='$work_days',`base`='$base',`da`='$da',`deduction`='$deduction',`total`='$total_salary'WHERE `salary`.`id`='$id'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='salaryemp.php';
    </SCRIPT>");
    }
    else{
        echo "Failed to Update please Try again!!";
    }
}
?>