<?php
include('config.php');

$rid=$_GET['categoryid'];
//echo"Id to be deleted:$rid";
$sql="delete from category where categoryid='$rid'";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo"<script>alert('Successfully deleted the record')</script>";
    header('Location:category.php');//php code to redirect the page
}
else
{
    echo"<script>alert('Failed to delete Record')</script>";//js code to redirect the page
}
?>