<?php
include('include\database.php');
session_start();
if($_SESSION['uid']==0)
{
	header('location:../signup.php');
}
else {
	# code...
	header('location:../choose.php');

}
?>