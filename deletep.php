<?php
//including the database connection file
include("process/dbh.php");

//getting id of the data from url
$pid = $_GET['pid'];
$eid = $_GET['eid'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM add_project WHERE pid='$pid' AND eid='$eid'");
$result2 = mysqli_query($conn, "DELETE FROM project WHERE pid = '$pid'");


//redirecting to the display page (index.php in our case)
header("Location:projects.php");
?>

