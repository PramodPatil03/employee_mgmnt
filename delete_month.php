<?php
//including the database connection file
include("process/dbh.php");

//getting id of the data from url
$id = $_GET['id'];
$month = $_GET['month'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM monthly_salary WHERE `monthly_salary`.id='$id' AND `month`='$month'");


//redirecting to the display page (index.php in our case)
header("Location:monthly_salary.php");
?>

