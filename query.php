<?php 
require_once ('process/dbh.php');
$query = "SELECT * FROM `query`";

$result = mysqli_query($conn, $query);
?>


<html>
<head>
	<title>Queries| Employee Management System</title>
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
				<li><a class="homeblack" href="projects.php">Projects</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>

				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="monthly_salary.php">Monthly Salary</a></li>

				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homered" href="query.php">Queries</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Empolyee Leaderboard </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Query No.</th>
				<th align = "center">Query</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$row['queries']."</td>";
					
					// echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					// echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
				}


			?>

		</table>

		<div class="p-t-20">
			<button  type="submit" style="float: right; margin-top: 10px; margin-right: 60px; background-color: red; color: white; border: 2px solid black; text-decoration: none; border-radius: 15px; "><a href="remove.php" style="text-decoration: none;color: black;"> Remove queries</button>
		</div>

		
	</div>
</body>
</html>