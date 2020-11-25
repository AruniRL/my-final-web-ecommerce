<?php
//session_start();


$con = mysqli_connect('127.0.0.1','root','');

mysqli_select_db($con,'finaldb');

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error();    
}
mysqli_query($con, "SET NAMES 'utf8'");
?>