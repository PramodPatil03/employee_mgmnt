<?php

require_once ('process/dbh.php');
$sql = "( SELECT distinct(employee.id),monthly_salary.month,employee.firstName,employee.lastName,monthly_salary.work_days,monthly_salary.base,monthly_salary.da,monthly_salary.deduction,monthly_salary.total,monthly_salary.mega_total from employee,`monthly_salary` where employee.id=monthly_salary.id )order by employee.id,monthly_salary.month";

//echo "$sql";
$result = mysqli_query($conn, $sql);


?>



<html>
<head>
	<title>Monthly Salary Table | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>EMS <?php ?></h1>
			<ul id="navli">
			<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="projects.php">Projects</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>

				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homered" href="monthly_salary.php">Monthly Salary</a></li>

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
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Month</th>
				
				<th align = "center">Working days</th>
				
				<th align = "center">Basic Salary</th>
				<th align = "center">D.A.(Monthly)</th>
				<th align = "center">Deduction(if any monthly)</th>
				<th align = "center">TotalSalary</th>
				<th align = "center">Total</th>
				<th align = "center">Operations</th>
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['month']."</td>";
					echo "<td>".$employee['work_days']."</td>";

					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['da']."</td>";
					echo "<td>".$employee['deduction']." </td>";
					echo "<td>".$employee['total']."</td>";
					echo "<td>".$employee['mega_total']."</td>";
					echo "<td><a href=\"delete_month.php?id=$employee[id]&month=$employee[month]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>
			
			</table>
</body>
</html>