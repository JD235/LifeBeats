<?php 
if (isset($_POST['login_user'])) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "lifebeats";
    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error())
    {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
    else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // if (empty($username)) {
        //     array_push($errors, "Username is required");
        // }
        // if (empty($password)) {
        //     array_push($errors, "Password is required");
        // }

        
        $query = "SELECT * FROM signup WHERE sign_name='$username' AND sign_password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: http://localhost/LifeBeats/pages/ALogIn.html');
        }else {
            // array_push($errors, "Wrong username/password combination");
            echo "Wrong Password";
        }
        
    }
}
?>