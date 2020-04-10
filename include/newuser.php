<?php
session_start();
include('database.php');
$username = $_POST['signname'];
$email =  $_POST['signemail'];
$password = md5($_POST['signpassword']);
$phone = $_POST['phone'];
$check="select * from users where email='$email'";
$result=mysqli_query($con,$check);
$num=mysqli_num_rows($result);
if($num > 0)
{
  echo "<script>alert('Email is Already Used.')
    window.location.href='../signup.php';</script>";
}
else{
$qry="INSERT INTO users (`name`, `email`, `password`, `phone`) VALUES ('$username', '$email', '$password', '$phone')" ;
}
if(mysqli_query($con,$qry)){
    // 	last inserted id
    $last_id = mysqli_insert_id($con);
    $_SESSION['uid'] = $last_id;
    echo $_SESSION['uid'];
    header('location:../choose.php');
}
?>