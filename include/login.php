<?php
session_start();
include('database.php');
$email =  $_POST['username'];
$password =md5($_POST['password']);
$qry="select * from users where email='$email'and password='$password'";
$res=mysqli_query($con,$qry);
$row=mysqli_num_rows($res);
$stg=mysqli_fetch_array($res);
if($row <= 0){
    echo "<script>alert('Invalid Login ID')
    window.location.href='../signup.php';
 </script>";
}
else{
echo $stg[0];
$_SESSION['uid'] = $stg['uid'];
//$id=$_SESSION['uid'];
//echo $_SESSION['uid'];
header('location:../choose.php');
}
?>