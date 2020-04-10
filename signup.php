<?php
include("header.php");
?>
<link rel="stylesheet" href="style/signup.css">

         <div class="container-lg">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card car-body py-xl-5 px-xl-4 py-5 pl-5">
                        <h2>LOGIN</h2>
                        <form action="include/login.php" method="POST">
                            <div class="form-group row py-xl-2 py-2">
                                <label class="col-sm-3 col-form-label" for="inputEmail">Email :</label>
                                    <div class="col-sm-9">
                                        <input type="email"  name="username" class="form-control" id="inputEmail" required style="background-color: #152226; color: white;">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="inputPass">Password :</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control" id="inputPass" required style="background-color: #152226; color: white;">

                                </div>
                            </div>
                           <button type="submit"  name="login_user" class="btn btn-danger btn-lg px-xl-5 py-xl-3 mt-xl-4 mt-4">Login</button></a>
                            <br>
                           <!-- <div class="mt-xl-3 mt-3" >
                                <a  href="#" style="color: #707070;">Forgot Password ?</a>
                            </div> -->
                        </form>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card car-body py-xl-5 px-xl-4 py-5 pl-5">
                        <h2>SIGN UP</h2>
                        <form method="POST" action="include/newuser.php">
                            <div class="form-group row py-xl-2 py-2">
                                <label class="col-sm-3 col-form-label" for="inputName">Name :</label>
                                   <div class="col-sm-9">

                                        <input type="text" class="form-control" name="signname"  value="" id="inputName" required style="background-color: #152226; color: white;">


                                   </div> 
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="inputEmail">Email :</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="signemail"  value="" id="inputEmail"  required style="background-color: #152226; color: white;">
                                    </div>    
                            </div>
                            <div class="form-group row py-xl-2 py-2">
                                <label class="col-sm-4 col-form-label" for="inputPass">Password :</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="signpassword" value="" id="inputPass"  required style="background-color: #152226; color: white;">
                                    </div>    
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="inputEmail">Phone No :</label>
                                    <div class="col-sm-8"> 
                                        <input type="text" class="form-control" name="phone" value="" id="inputPass" required style="background-color: #152226; color: white;">
                                    </div>    
                            </div>
                           <button type="submit" name="signup" class="btn btn-danger btn-lg px-xl-5 py-xl-3 mt-xl-4 mt-4">Sign Up</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
     </div>
          <!--Footer area-->
        <footer class="pt-xl-1 pb-xl-1"> 
            <a href="#"><span style="color: white; font-size: 18px; margin-left: 15px;font-family: 'Poppins', sans-serif;">Made with <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> by Cognate</span></a>
        </footer>
    </body>
</html>