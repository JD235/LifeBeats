<?php
/* Database connection start */
$server = "localhost";
$username = "root";
$password = "";
$dbname = "lifebeats";
$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    echo "not connected";
}
/*else{
	echo "connected";
}*/
?>