<?php

session_start();
header('location:payment.php');

$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'finaldb');

$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$s_address=$_POST['s_address'];
$city=$_POST['city'];
$post_code=$_POST['post_code'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$s ="select * from payments where id='$id'";

$result =mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"id Already Taken";
}else{
    $reg= "insert into inqury(f_name, l_name, s_address, city, post_code, phone, email ) values ('$f_name','$l_name','$s_address','$city', '$post_code', '$phone','$email')";
    mysqli_query($con, $reg);
    echo"Thank You For Your Message.";
}
?> 