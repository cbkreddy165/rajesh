<?php

//live server
define("baseurl", "http://localhost/adminweb");
$DBHOST="localhost";

$DBUSERNAME="root";

$PASSWORD="";

$DBNAME="adminweb";



$conn = mysqli_connect($DBHOST, $DBUSERNAME, $PASSWORD);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn,$DBNAME);


?>