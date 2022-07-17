<?php
include('config.php');

$rid=$_GET['uid'];
//echo"Id to be deleted:$rid";
$sql="delete from user where uid='$rid'";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo"<script>alert('Successfully deleted the record')</script>";
    header('Location:user.php');//php code to redirect the page
}
else
{
    echo"<script>alert('Failed to delete Record')</script>";//js code to redirect the page
}
?>