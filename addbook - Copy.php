<?php

include('config.php');
include('header.php');

?>

<?php
if(isset($_POST['send']))
{
    $bname=$_POST['bname'];
    $aname=$_POST['aname'];
    $booked=$_POST['booked'];
    $bno=$_POST['bno'];
   // $dt=$_POST['dt'];
    $status=$_POST['status'];
    $sql="insert into book(book_name,author_name,book_edition,no_of_copies,status)values('$bname','$aname','$booked','$bno','$status')";
    $res=mysqli_query($conn,$sql);  
    if($res)
    {
        echo"<script>window.location.href='dashboard.php'</script>";
    }
    else{
        echo"<script>alert('Failed to insert Record!!')</script>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Add Book</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="bg1">
  <style>

.bg1{
  background-image:url("book.jpg");
  background-size:cover;
  background-repeat:no-repeat;
  background-attachment: fixed;
 
}

.color{
  color:white;
}
</style>

  
<main class=" w-100 m-auto ">

<div class="col-md-12 mt-5"> 

    <form method="POST" action="#">
    <table>
        <tr>
            <td class="color"> <label for="bname">Book Name:</label>  </td>
            <td> <input type="text" class="form-control" name="bname"   id="bname"   required/> </td>
        </tr>
        <tr>
            <td class="color"> <label for="aname">Author Name:</label>  </td>
            <td> <input type="text"  class="form-control" name="aname"   id="aname"   required/> </td>
        </tr>

        <tr>
            <td class="color"> <label for="bk">Book Edition:</label>  </td>
            <td> <input type="text" class="form-control" name="booked" id="bk"/> </td>
        </tr>
  
        <tr>
            <td class="color"> <label for="bno">No of Copies:</label>  </td>
            <td> <input type="text" class="form-control"  name="bno"  id="bno" required  /> </td>
        </tr>
        <!--<tr>
            <td class="color"> <label for=dt>Date:</label>  </td>
            <td> <input type="date" class="form-control"  name="dt"  id="dt" required  /> </td>
        </tr>-->
        <tr>
            <td class="color"> <label for="status">Status:</label>
           </td>
           <td>
            <select id="status" name="status">
            <option value="enable">Enable</option>
           <option value="disable">Disable</option>  
        </td>   
        </tr>
       <tr>
        <td>
        <input class="btn btn-primary"  type="submit" name="send" value="Add">
           </td>
          </tr>
    
</form>		


<div>


</main> 
  </body>
</html> 