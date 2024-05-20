<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'ems';
$conn = mysqli_connect($servername, $username, $password, $database);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $work_days = $_POST['work_days'];
    $base = $_POST['base'];
    $da = $_POST['da'];
    $deduction = $_POST['deduction'];
    $query = "UPDATE `salary` SET `base` = '10000' WHERE `salary`.`id` = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");
    }
}

?>