<?php
include('config.php');
include('header.php');
?>
<?php
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
  echo"<script>window.location.href='dashboard.php'</script>";
}
if(isset($_POST["send"]))
{
  
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $DOB=$_POST['db'];
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    $mobileno=$_POST['mobileno'];

  $selQuery = "Select * from user WHERE email ='$uname'";
  $res1=mysqli_query($conn,$selQuery);
  $data=mysqli_fetch_array($res1);

 

  if(!empty($data))
  {
    echo"<script>alert('User with this email id already exists!! Please use another email id.')</script>";
  } 
  else
  {
    
    
    $sql="insert into user(first_name,last_name,date_of_birth,email,mobile_no,password,status,type)values('$fname','$lname','$DOB','$uname','$mobileno','$upass',1,'student')";
    $res=mysqli_query($conn,$sql)  or die(mysqli_error($conn));

    if($res)
    {
        echo"<script>alert('Registration Sucessfully!!')</script>";
        echo"<script>window.location.href='index.php'</script>";
    }
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
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center bg1">

  <style>

.bg1{
  background-image:url("book2.webp");
  background-size: cover;
  background-repeat:no-repeat;
  background-attachment: fixed;
}

</style>
  
<main class="form-signin w-100 m-auto ">
<h3 > Welcome to Digital Library</h3>
<div class="col-md-12 mt-5"> 
  

    <form method="POST" action="#">
    <table>
        <tr>
            <td> <label for="fname">First Name:</label>  </td>
            <td> <input type="text" class="form-control" name="fname" placeholder="First name"  id="fname"   required/> </td>
        </tr>
        <tr>
            <td> <label for="lname">Last Name:</label>  </td>
            <td> <input type="text"  class="form-control" name="lname" placeholder="Last name"  id="lname"   required/> </td>
        </tr>

        <tr>
            <td> <label for="db1">Date Of Birth:</label>  </td>
            <td> <input type="Date" class="form-control" name="db" id="db1"/> </td>
        </tr>
  
        <tr>
            <td> <label for="uname">Enter Email :</label>  </td>
            <td> <input type="email" class="form-control" placeholder="Enter Email ID" name="uname"  id="uname" required  /> </td>
        </tr>
        <tr>
            <td> <label for="mobileno">Mobile No.:</label>  </td>
            <td> <input type="number" class="form-control" placeholder="Enter Mobile no." name="mobileno" maxlength="10" id="mobileno" required  /> </td>
        </tr>
        <tr>
            <td> <label for="upass">Password:</label>  </td>
            <td> <input type="password" class="form-control" placeholder="Enter password" name="upass"  id="upass" required  > </td>
        </tr>
       <tr>
        <td>
        <input class="btn btn-primary"  type="submit" name="send" value="Register">
           </td>
          </tr>
    
</form>		
<div>
</main> 
  </body>
</html>


