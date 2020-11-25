<?php

$edit_cat = mysqli_query($con, "select * from product_category where cat_id='$_GET[cat_id]'");

$fetch_cat = mysqli_fetch_array($edit_cat);
?>


<div class="form_box">

<form action="" method="post" enctype="multipart/form-data">
<table align="center" width="100%" >
<tr>
<td colspan="7">
<h2>Edit Category</h2>
<div class="border_bottem"></div>
</td>
</tr>

<tr>
<td><b>Edit Category:</b></td>
<td ><input type="text" name="product_cat" value="<?php $fetch_cat['cat_title']; ?>" size="60" required/></td>
</tr>


<tr >
    <td></td>
<td colspan="7"><input type="submit" name="edit_cat" value="save"/></td>
</table>
</form>
                    </div>


<?php

$con = mysqli_connect('127.0.0.1','root','');

mysqli_select_db($con,'finaldb');


if(isset($_POST['edit_cat'])){
    
    $cat_title = mysqli_real_escape_string($con,$_POST['product_cat']);

    $edit_cat= mysqli_query($con, "update product_category set cat_title='$cat_title' where cat_id='$_GET[cat_id]' ");
    
    if($edit_cat){
        echo"<script>alert('Product category was updated successfully!')</script>";

      echo"<script>window.open(window.location.href,'_self')</script>";
    }
}
?>
