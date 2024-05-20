<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `add_project`";
//$result = mysqli_query($conn, $sql);

$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Project Table | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
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
	<div id="divimg">
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Project ID</th>
				<th align = "center">Employee ID</th>
				
				<th align = "center">Project Name</th>
				
				<th align = "center">DueDate</th>
				<!-- <th align = "center">Submission Date</th> -->
				<th align = "center">Project Marks</th>
				<th align = "center">Updation</th>
				<!-- <th align = "center">Delete</th> -->
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['eid']."</td>";
					
					echo "<td>".$employee['pname']."</td>";

					echo "<td>".$employee['duedate']."</td>";
					// echo "<td>".$employee['subdate']."</td>";  
					echo "<td>".$employee['marks']." </td>";
					// echo "<td>".$employee['status']."</td>";
					echo "<td> <a href=\"deletep.php?pid=$employee[pid]&eid=$employee[eid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>
			
			
			</table>
			<div class="p-t-20">
			<button  type="submit" style="float: right; margin-top: 10px; margin-right: 60px; background-color: red; color: white; border: 2px solid black; text-decoration: none; border-radius: 15px; "><a href="add_project.php" style="text-decoration: none;color: black;"> Add new project</button>
		</div>

</html>