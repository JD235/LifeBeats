<?php
//include("header.php");
include("include/database.php");
session_start();
$uid=$_SESSION['uid'];
$qry="select * from users where uid=$uid";
$res=mysqli_query($con,$qry);
$row=mysqli_fetch_array($res);
$name=$row['name'];
$bgrp="";
if (isset($_POST['req']))
	{
		$contact=$_POST['contact'];
		$bdate=$_POST['bdate'];
        $age=$_POST['age'];
        $bgrp=$_POST['bgrp'];
        $file1=$_FILES['file']['name'];
        $qry="INSERT INTO `req` (`name`, `phone`, `bdate`, `age`, `bgrp`, `file`) VALUES ('$name', '$contact', '$bdate', '$age', '$bgrp', '$file1')";
        if($result=mysqli_query($con,$qry))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"document/".$file1);
		}
		else
		{
			?>
			<script>
				alert('Something Goes Worng.' );
				window.location="choose.php";
			</script>
			<?php
		}
                
    }

$qry="select bd.*,b.* ,b.bid as bloodbankid FROM blood as bd inner join bloodbank as b on bd.bid=b.bid where bd.btype='$bgrp'";
$res=mysqli_query($con,$qry);

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

<link rel="stylesheet" href="style/search.css">

        <body>
            <div class="container-lg">
            <?php $i=1; while($row=mysqli_fetch_array($res)){ ?>
                <div class="card text-center">
                    <div class="card-header">
                        <?php echo $row['name']; ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true" style="color:rgb(119, 30, 30); font-size: 23px;"></i> <?php echo $row['address']; ?> </p>
                        <p class="card-text"><i class="fa fa-phone" aria-hidden="true" style="color:rgb(119, 30, 30); font-size: 23px;"></i> <?php echo $row['phone']; ?></p>
                        <a href="#n<?php echo $i?>" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="n1" class="btn btn-danger">Location</a>
                        <div class="collapse mt-4" id="n<?php echo $i?>">
                            <iframe src="<?php echo $row['loc']; ?>" width="800" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                      
                    </div>
                </div><br>
                    <?php $i++;} ?>
                  
                <h2 class="mt-5">Note : If you want blood directly from donor click below button!</h2>
                <form action="donor.php" method="POST">
                    <input type="hidden" name="bgrp" value="<?php echo $bgrp;?>">
                <button type="submit" name="donorsearch" class="btn btn-dang btn-lg px-xl-5 py-xl-3 mt-3">Search Donor</button></form>

            </div>
                    <!--footer-->
        <footer class="pt-xl-1 pb-xl-1" > 
            <a href="#"><span style="color: white; font-size: 18px; margin-left: 15px;font-family: 'Poppins', sans-serif;">Made with <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> by Cognate</span></a>
        </footer>
</body>
        