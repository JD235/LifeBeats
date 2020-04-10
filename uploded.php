<?php
session_start();
include('include/database.php');
if(!isset($_SESSION['uid'])){ 
?>
    <script>window.location="signup.php"</script>
<?php
}
$uid=$_SESSION['uid'];
$qry="select * from users where uid=$uid";
$res=mysqli_query($con,$qry);
$row=mysqli_fetch_array($res);
$name=$row['name'];
if (isset($_POST['donor']))
	{
        $did=$_POST['did'];
		$contact=$_POST['contact'];
		$bdate=$_POST['bdate'];
        $age=$_POST['age'];
        $bgrp=$_POST['bgrp'];
        $ldate=$_POST['ldate'];
        $qry="INSERT INTO `donor` (`name`, `phone`, `bdate`, `age`, `bgrp`, `ldate`) VALUES ('$name', '$contact', '$bdate', '$age', '$bgrp', '$ldate')";
        $result=mysqli_query($con,$qry);
        
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Life Beats</title>

        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

        <!-- Bootstrap File -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

        <!--Write Font  -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">  
        
        <!-- Custom css file-->
        <link rel="stylesheet" href="style/login.css">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <!-- Body Starts -->

    <body>
        <header class="header-menu" style="margin-top: 9rem;">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #152226;">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/Life beats logo-01.png" width="110" height="110" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="include/logout.php">LOGOUT</a>
                      </li>
                    </ul>
                  </div>
            </nav>
        </header>
         <!-- Navbar Ends -->
         
        <div class="container-lg">
            <div class="main mt-xl-2">
                <p>LIFE BEATS</p>
            </div>
            <div class="tag">
                <p>The Digital Blood Bank</p>
            </div>
        </div>    
        <h1 class="mt-xl-5 mt-5" style="font-size:30px;">Your data has been sucessfully recorded.</h1>
        <h1 class="mt-xl-5 mt-5" style="font-size:30px;">Thank You!</h1>
        <div class="col-xl-12 d-flex justify-content-center"  >
                    <a href="choose.php"><button  type="button" class="btn btn-danger btn-lg px-xl-5 py-xl-3">Go to Home</button></a>
        </div>


        <!--Footer area-->
        <footer class="pt-xl-1 pb-xl-1" > 
            <a href="#"><span style="color: white; font-size: 18px; margin-left: 15px;font-family: 'Poppins', sans-serif;">Made with <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> by Cognate</span></a>
        </footer>
    </body>
</html>