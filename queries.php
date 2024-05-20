<?php
require_once('process/dbh.php');

$quer1 = $_POST['query'];

$sql = "INSERT INTO `query`(`queries`) VALUES ('$quer1')";
$result = mysqli_query($conn , $sql);
if ($result != null) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('We will look after your query,Thanks for feedback!!!')
    window.location.href='aboutus.html';
    </SCRIPT>");
}

?>
