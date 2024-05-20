<?php
require_once('process/dbh.php');
$id = $_GET['id'];
$work_days = $_GET['work_days'];
$base = $_GET['base'];
$da = $_GET['da'];
$deduction = $_GET['deduction'];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Salary</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li><a class="homeblack" href="addemp.php">Add Employee</a></li>
                <li><a class="homered" href="viewemp.php">View Employee</a></li>
                <li><a class="homeblack" href="elogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="divider"></div>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee salary Info</h2>
                    <form id="registration" action="edit2.php" method="POST">
                        Employee Id
                        <div class="input-group">
                            <input class="input--style-1" type="int" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                Working days
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="work_days" value="<?php echo $work_days; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                Basic Salary (daily basis)
                                <div class="input-group">
                                    <input class="input--style-1" type="int" name="base" value="<?php echo $base; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                D.A.
                                <div class="input-group">
                                    <input class="input--style-1" type="int" name="da" value="<?php echo $da; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                Deduction(Taxes,other)
                                <div class="input-group">
                                    <input class="input--style-1" type="int" name="deduction" value="<?php echo $deduction; ?>">
                                </div>
                            </div>
                        </div>
                        



                        <input type="hidden" name="id" id="textField" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>