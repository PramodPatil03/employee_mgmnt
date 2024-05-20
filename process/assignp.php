<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$pid = $_POST['pid'];
$eid = $_POST['eid'];
$subdate = $_POST['duedate'];

$sql = "INSERT INTO `project`(`pid`,`eid`, `pname`, `duedate` , `status`) VALUES ('$pid','$eid' , '$pname' , '$subdate' , 'Due')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>