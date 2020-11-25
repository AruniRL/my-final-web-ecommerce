


<div class="login_box">
    <form method= "post" action="">
        <table align= "left" width="70%">
            <tr align= "left">
<td colspan="4">
    <h2>Sign In Here</h2><br />
    <span>
        Don't have an account?<a href="register.php">Register Here</a>
</span>
</td>
<tr>

<tr>
    <td width="15%"><b>Name:</b></td>
    <td colspan="3"><input type="text" name="name" placeholder="name"/></td>
</tr>

<tr>
    <td width="15%"><b>Password:</b></td>
    <td colspan="3"><input type="password" name="password" placeholder="password"/></td>
</tr>


<tr align="left">
    <td></td>
    <td colspan="4">
    <input type="submit" name="login" value="Login"/>
 </td>
</tr>

</table>
</form>
</div>

<?php 

$con = mysqli_connect('127.0.0.1','root','');

mysqli_select_db($con,'finaldb');


if(isset($_POST['login'])){

     $name =trim($_POST['name']);
     $password =trim( $_POST['password']);
     $password= md5($password);

     $run_login= mysqli_query($con, "select * from user_s where password='$password' AND name='$name'");

     $check_login= mysqli_num_rows($run_login);

  
    $ip= get_ip();
    $run_cart= mysqli_query($con, "select * from cart where ip_address='$ip' " );
    $check_cart= mysqli_num_rows($run_cart);

    if($check_login > 0 AND $check_cart==0){
        
        $_SESSION['user_id']= $row_login['id'];
        $_SESSION['role'] = $row_login['role'];

        $_SESSION['name'] = $name;

        echo "<script>alert('You has logged in successfully!')</script>";
        echo "<script>window.open('my_account.php','_self')</script>";
    }else{

        $_SESSION['user_id']= $row_login['id'];
        $_SESSION['role'] = $row_login['role'];


        $_SESSION ['name'] = $name;

    echo "<script>alert('You has logged in successfully!')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
    }
}
?>



