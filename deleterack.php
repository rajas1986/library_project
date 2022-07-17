<?php
include('config.php');

$rid=$_GET['rackid'];
//echo"Id to be deleted:$rid";
$sql="delete from rack where rackid='$rid'";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo"<script>alert('Successfully deleted the record')</script>";
    header('Location:rack.php');//php code to redirect the page
}
else
{
    echo"<script>alert('Failed to delete Record')</script>";//js code to redirect the page
}
?>