
<script>
    $(document).ready(function(){
            $("#password_confirm2").on('keyup',function(){
              
              //alert('testing jquery');

              var password_confirm1 = $("#password_confirm1").val();
              var password_confirm2 = $("#password_confirm2").val();
             // alert(password_confirm2);

             if(password_confirm1==password_confirm2){
                 $("#status_for_confirm_password").html('<strong style="color:black">Password match</strong>');
             }else{
                $("#status_for_confirm_password").html('<strong style="color:red">Password do not match</strong>');
             }
            });

    });
</script>

<?php  
$select_user = mysqli_query($con, "select * from user_s where id='$_SESSION[user_id]'");

$fetch_user= mysqli_fetch_array($select_user);
?>


  <div class="register_box">
      <form method= "post" action="" enctype="multipart/form-data">
          <table align= "left" width="70%">
              <tr align= "left">
  <td colspan="4">
      <h2>Edit Account</h2><br />
      
  </td>
  <tr>
  
 
  <tr>
      <td width="15%"><b>Change Email:</b></td>
      <td colspan="3"><input type="text" name="email" value="<?php echo $fetch_user['email']; ?>" required placeholder="email"/></td>
  </tr>

  <tr>
      <td width="15%"><b>Current Password:</b></td>
      <td colspan="3"><input type="password" name="current_password" required  placeholder="current password"/></td>
  </tr>
  
  
  
  
  
  <tr align="left">
      <td></td>
      <td colspan="4">
      <input type="submit" name="edit_account" value="save"/>
   </td>
  </tr>
  
  </table>
  </form>
  </div>
  
  <?php 
  
  if(isset($_POST['edit_account'])){

        $email=trim($_POST['email']);
        $current_password= trim($_POST['current_password']);
         $hash_password = md5($current_password);
       
        
        $check_exist = mysqli_query($con, "select * from user_s where email='$email'");
        $email_count = mysqli_num_rows($check_exist);

        $row_register = mysqli_fetch_array($check_exist);

        if($email_count > 0){
            echo "<script>alert('sorry,  your email $email address already exist in our database!')</script>";

        }elseif($fetch_user['password'] != $hash_password){
 
        echo "<script>alert('Your current password is wrong!') </script>";

           
        }else{
           $update_email = mysqli_query($con, "update user_s set email='$email' where id='$_SESSION[user_id]'");

           if($update_email){
               echo "<script>alert('your email was updated successfully')</script>";

               echo "<script>window.open(window.location.href,'_self')</script>";
           }
        }
      
  }
  ?>
  
  