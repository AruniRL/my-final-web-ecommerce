
<div class="view_product_box">

<h2>View Users</h2>
<div class="border_bottem"></div>

<form action="" method="post" enctype="multipart/form-data" />

<div class="search_bar">
    <input type="text" id="search" placeholder="Type to search..."/>
</div>

<table width="100%">
    <thead>
        <tr>
            <th><input type="checkbox" id="checkAll"/>Check</th>
            <th>ID</th>
            <th>Name</th>
            <th>Comment</th>
            <th>Delete</th>
            
</tr>
</thead>

<?php
$all_users= mysqli_query($con, "select * from tbl_comment order by parent_comment_id DESC");

$i=1;

while($row= mysqli_fetch_array($all_users)){


?>



<tbody>
    <tr>
        <td><input type="checkbox" name="deleteAll[]" value="<?php echo $row['parent_comment_id'];?>" /></td>
           <td><?php echo $i; ?></td>
            <td><?php echo $row['comment_sender_name']; ?></td>
            <td><?php echo $row['comment']; ?></td>
            <td><a href="index.php?action=comment_user&delete_user=<?php echo $row['parent_comment_id']; ?>">Delete</a></td>
           
</tr>
</tbody>

<?php  $i++; } ?>

<tr>
    <td><input type="submit" name="delete_all" value="Remove" /></td>
</tr>
</table>

</form>
</div>
<?php
//delete user account
if(isset($_GET['delete_user'])){
    $delete_user = mysqli_query($con, "delete from tbl_comment where parent_comment_id='$_GET[delete_user]'");

    if($delete_user){
        echo"<script>alert('user comment has been deleted successfuly')</script>";

        echo"<script>window.open('index.php?action=comment_user','_self')</script>";
    }
}

if(isset($_POST['deleteAll'])){
    $remove=$_POST['deleteAll'];

    foreach($remove as $key){
        $run_remove= mysqli_query($con, "delete from tbl_comment where parent_comment_id='$key'");

        if($run_remove){

        echo"<script>alert('selected comment have been removed successfuly')</script>";

        echo"<script>window.open('index.php?action=comment_user','_self')</script>";
    }else{
        echo"<script>alert('Mysqli failed: mysqli_error($con)')</script>";
    }
}
}
?>