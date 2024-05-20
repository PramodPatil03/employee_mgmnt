

<!DOCTYPE html>
<html>

<head>


    <!-- Title Page-->
    <title>Add Project| Employee Management System</title>

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
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homered" href="projects.php">Projects</a></li>
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




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" >Project Registration</h2>
                    <form action="addp.php" method="POST" enctype="multipart/form-data">
                    </div>
                        <div class="row row-space">
                            <div class="col-2" style="margin-left: 5px;">
                                Employee ID
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="eid"
                                        placeholder="Team Lead ID">

                                </div>
                            </div>
                           
                            <div class="col-2" style="margin-right: 5px;"> ID
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Project Id" name="pid" required="required">
                        </div>
                            </div>
                        </div>



                        
                            <div class="col-2" style="margin-left: 5px;">
                                Project Lead Name
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Pname" name="pname"
                                        required="required">
                                </div>
                            </div>
                            <div class="row row-space">
                           
                       

                        <div class="col-2" style="margin-left: 5px;">
                        Due Date
                        <div class="input-group">
                            <input class="input--style-1" type="date" placeholder="Due Date" name="duedate"
                                required="required">
                        </div>
                            </div>
                            <div class="col-2" style="margin-right: 5px;">
                                Project Final marks(/10):
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="marks" name="marks"
                                        required="required">
                                </div>
                            </div>



</div>

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

?>
<!-- end document-->