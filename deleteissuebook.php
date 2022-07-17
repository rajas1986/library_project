<?php
include('config.php');

$rid=$_GET['issuebookid'];
//echo"Id to be deleted:$rid";
$sql="delete from issued_book where issuebookid='$rid'";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo"<script>alert('Successfully deleted the record')</script>";
    header('Location:issuedbook.php');//php code to redirect the page
}
else
{
    echo"<script>alert('Failed to delete Record')</script>";//js code to redirect the page
}
?>