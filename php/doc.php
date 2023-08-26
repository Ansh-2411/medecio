<?php
session_start();
?>


<?php
include 'connection.php';
if(isset($_POST['submit'])){
$peName = mysqli_real_escape_string($con,$_POST['name']);
$PeAge = mysqli_real_escape_string($con,$_POST['name']);
$peEmail = mysqli_real_escape_string($con,$_POST['email']);
$peAadhar = mysqli_real_escape_string($con,$_POST['email']);
$peIssue = mysqli_real_escape_string($con,$_POST['email']);

$tablename = isset($_COOKIE['emailid']);

$insertQue = "insert into $tablename (name,number,email,password,confirmpassword) values('$name',,'$age', '$number','$email')";
        $res = mysqli_query($con,$insertQue);
        if($res){

        }
    }
?>
