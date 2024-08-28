<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailytask";


$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
  die("connection failed" . mysqli_connect_error());
}
//echo "connected successfuly.";