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
        <link rel="stylesheet" href="../style/login.css">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <!-- Body Starts -->

    <body>
        <header class="header-menu" style="margin-top: 9rem;">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #152226;">
                <a class="navbar-brand" href="#">
                    <img src="../assets/Life beats logo-01.png" width="110" height="110" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="../index.html">HOME <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
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
            <!-- <h1 class="mt-xl-5 mt-5">"username"</h1> -->
            <h1 class="mt-xl-5 mt-5">Choose The Blood Service :</h1>
            <div class="row mt-xl-5 mt-5">
                <div class="col-xl-6">
                    <button type="button" data-toggle="collapse" data-target="#first" aria-expanded="false" aria-controls="first" class="btn btn-danger btn-lg px-xl-5 py-xl-3">Required</button>
                </div>
                <div class="col-xl-6 don">
                    <button type="button" data-toggle="collapse" data-target="#second" aria-expanded="false" aria-controls="second" class="btn btn-danger btn-lg px-xl-5 py-xl-3">Donate</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="collapse multi-collapse" id="first">
                        <div class="card card-body mt-xl-4">
                            <form>
                                <div class="form-group">
                                    <label for="inputNumb">Contact</label>
                                    <input type="number" class="form-control" id="inputNumb" style="background-color: #152226; color: white;">
                                </div>
                                <div class="form-row"> 
                                    <div class="form-group col-md-6">
                                        <label for="inputDate">Birth date</label>
                                        <input type="date" class="form-control" id="inputDate" placeholder="dd/mm/yyyy" style="background-color: #152226; color: white;">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAge">Age</label>
                                        <input type="number" class="form-control" id="inputAge" style="background-color: #152226; color: white;">
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputBlood">Blood Group</label>
                                        <select id="inputBlood" class="form-control" style="background-color: #152226; color: white;">
                                            <option selected>Choose...</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                    </select>
                                </div>
                                  <div class="form-group col-md-9">
                                    <label for="inputDoc">Document</label>
                                    <input type="file" class="form-control" id="inputDoc" style="background-color: #152226; color: white;">
                                  </div>
                                  
                                </div>
                                <a href="search.html"><button type="button" class="btn btn-dang btn-lg px-xl-5 py-xl-3 mt-3">Search Blood Bank</button></a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class=" collapse multi-collapse" id="second">
                        <div class="card card-body mt-xl-4">
                            <form>
                                <div class="form-group">
                                    <label for="inputNumb">Contact</label>
                                    <input type="number" class="form-control" id="inputNumb" style="background-color: #152226; color: white;">
                                </div>
                                <div class="form-row"> 
                                    <div class="form-group col-md-6">
                                        <label for="inputDate">Birth date</label>
                                        <input type="date" class="form-control" id="inputDate" placeholder="dd/mm/yyyy" style="background-color: #152226; color: white;">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAge">Age</label>
                                        <input type="number" class="form-control" id="inputAge"  style="background-color: #152226; color: white;">
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputBlood">Blood Group</label>
                                        <select id="inputBlood" class="form-control" style="background-color: #152226; color: white;">
                                            <option selected>Choose...</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                    </select>
                                </div>
                                  <div class="form-group col-md-9">
                                    <label for="inputDate">Last Donated</label>
                                    <input type="date" class="form-control" id="inputDate" style="background-color: #152226; color: white;">
                                  </div>
                                  
                                </div>
                                <a href="#"><button type="button" class="btn btn-dang btn-lg px-xl-5 py-xl-3 mt-3">Submit</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!--Footer area-->
        <footer class="pt-xl-1 pb-xl-1" > 
            <a href="#"><span style="color: white; font-size: 18px; margin-left: 15px;font-family: 'Poppins', sans-serif;">Made with <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> by Cognate</span></a>
        </footer>
    </body>
</html>