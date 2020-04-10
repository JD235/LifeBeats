<?php
include("header.php");
?>
<link rel="stylesheet" href="style/login.css">

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