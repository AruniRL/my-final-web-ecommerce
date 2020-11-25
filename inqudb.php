<?php

session_start();
header('location:contact.php');

$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'finaldb');

$username=$_POST['username'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$s ="select * from inqury where username='$username'";

$result =mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username Already Taken";
}else{
    $reg= "insert into inqury(username, email, subject, message ) values ('$username','$email','$subject','$message')";
    mysqli_query($con, $reg);
    echo"Thank You For Your Message.";
}
?> 