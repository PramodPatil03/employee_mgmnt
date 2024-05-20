<?php

require_once ('dbh.php');
$id = $_POST['id'];
$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$identity = $_POST['identity'];
$dept = $_POST['dept'];
$da = $_POST['da'];
$deduction = $_POST['deduction'];
$degree = $_POST['degree'];
$salary = $_POST['base'];
$month = $_POST['month'];
// $bonus = $_POST['bonus'];
$da = $_POST['da'];
$deduction = $_POST['deduction'];
$work_days = $_POST['work_days'];
$birthday =$_POST['birthday'];
//echo "$birthday";
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if (in_array($filecheck, $fileextstored)) {

    $destinationfile = 'images/' . $filename;
    move_uploaded_file($filetemp, $destinationfile);

    $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`,`identity`,  `address`, `dept`, `degree`, `pic`) VALUES ('$id','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$identity','$address','$dept','$degree','$destinationfile')";
    // $selectemp = "SELECT * FROM `employee`";
    // $resultq =  mysqli_query($conn, $selectemp);
    // $num = mysqli_num_rows($resultq);
    $result = mysqli_query($conn, $sql);
    $last_id = $conn->insert_id;
    $total_salary = (($salary * $work_days) + $da-$deduction);
    $sqlS = "INSERT INTO `salary`(`id`,`work_days`, `base`, `da`,`deduction`, `total`) VALUES ('$id','$work_days','$salary','$da','$deduction','$total_salary')";
    $salaryQ = mysqli_query($conn, $sqlS);
    $sqlm = "INSERT INTO `monthly_salary`(`id`,`month`,`work_days`, `base`, `da`,`deduction`,`total`) VALUES ('$id','$month','$work_days','$salary','$da','$deduction','$total_salary')";
$resultm =  mysqli_query($conn, $sqlm);
    $rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$id')");


if(($result) == 1){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
}


else{

      $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `identity`,  `address`, `dept`, `degree`, `pic`) VALUES ('$id','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$address','$dept','$degree','images/no.jpg')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;
$sqlm = "INSERT INTO `monthly_salary`(`id`,`month`,`work_days`, `base`, `da`,`deduction`, `total`) VALUES ('$id','$month','$work_days','$salary','$da','$deduction','$total_salary')";
$resultm =  mysqli_query($conn, $sqlm);
$sqlS = "INSERT INTO `salary`(`id`,`work_days`, `base`, `da`,`deduction`, `total`) VALUES ('$id','$work_days','$salary','$da','$deduction','$total_salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$id')");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

// else{
//     echo ("<SCRIPT LANGUAGE='JavaScript'>
//     window.alert('Failed to Registere')
//     window.location.href='javascript:history.go(-1)';
//     </SCRIPT>");
// }
}






?>