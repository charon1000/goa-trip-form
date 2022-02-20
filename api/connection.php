<?php

$sname = "localhost";
$uname = "root";
$pass = "";

$con = mysqli_connect($sname, $uname, $pass , "goa_trip");

if(!$con){
    die("connection Failed ! ".mysqli_connect_error());
}

?>