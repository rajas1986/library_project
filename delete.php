<?php
include('config.php');

$rid=$_GET['bookid'];
//echo"Id to be deleted:$rid";
$sql="delete from book where bookid='$rid'";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo"<script>alert('Successfully deleted the record')</script>";
    header('Location:dashboard.php');//php code to redirect the page
}
else
{
    echo"<script>alert('Failed to delete Record')</script>";//js code to redirect the page
}
?>