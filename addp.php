<?php
require_once('process/dbh.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $pid = $_POST['pid'];
    $eid = $_POST['eid'];
    $pname = $_POST['pname'];
    $duedate = $_POST['duedate'];
    $marks = $_POST['marks'];
}
$sql = "INSERT INTO `add_project`(`pid`,`eid`,`pname`,`duedate`,`marks`) VALUES('$pid','$eid','$pname','$duedate','$marks')";
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