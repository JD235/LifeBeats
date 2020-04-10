<?php
include("include/database.php");
if(isset($_POST['bgrp'])){ 
    $bgrp=$_POST['bgrp'];
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

            <table class="table table-striped table-dark table-hover container-sm ">
            <thead>
                <tr>
                <th scope="col">NAME</th>
                <th scope="col">AGE</th>
                <th scope="col">BLOOD GROUP</th>
                <th scope="col">LAST DONATED</th>
                <th scope="col">Request Info</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                $qry="select * from donor where bgrp='$bgrp'";
                $res=mysqli_query($con,$qry);
                while($row=mysqli_fetch_array($res)){?>
                <tr>
                <td  scope="row"><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['bgrp']; ?></td>
                <td><?php echo $row['ldate']; ?></td>
                <td><button class="btn btn-danger btn-xs" style="font-size:15px;">Request</button></td>

                </tr> <?php } ?>
            </tbody>
            </table>
    </body>
</html>