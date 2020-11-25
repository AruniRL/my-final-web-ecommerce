<?php

session_start();


$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'finaldb');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$ConfirmPassword=$_POST['ConfirmPassword'];

$s ="select * from users where username='$username'";

$result =mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username Already Taken";
}else{
    $reg= "insert into users(username, email, password, ConfirmPassword) values ('$username','$email','$password','$ConfirmPassword')";
    mysqli_query($con, $reg);
    echo"registration successful";
}
?> 