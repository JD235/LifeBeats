<?php
$username = filter_input(INPUT_POST, 'sign_name');
$useremail = filter_input(INPUT_POST, 'sign_email');
$userpassword = filter_input(INPUT_POST, 'sign_password');
$confpassword = filter_input(INPUT_POST, 'sign_conf_pwd');

if (!empty($username))
{
    if (!empty($useremail))
    {
        if (!empty($userpassword))
        {
            if (!empty($confpassword))
            {
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
					echo $username;
                    $sql = "INSERT INTO `signup` 
values ('','$username','$useremail','$userpassword','$confpassword');";
                    if ($conn->query($sql))
                    {
                        echo "New record is inserted sucessfully";
						header('location:http://localhost/LifeBeats/pages/ALogIn.html');
                    }
                    else
                    {
                        echo "Error: " . $sql . "
" . $conn->error;
                    }
                    $conn->close();
                }
            }
            else
            {
                echo "Password should not be empty";
                die();
            }
        }
        else
        {
            echo "Username should not be empty";
            die();
        }
    }
}
?>
