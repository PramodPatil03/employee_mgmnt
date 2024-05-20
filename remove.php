<?php
require_once('process/dbh.php');
$remove = "DELETE FROM `query`";
mysqli_query($conn, $remove);
header("Location:query.php");
?>