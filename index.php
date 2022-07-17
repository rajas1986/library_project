
<?php
include('header.php');
include('config.php');
?>
<?php

if(isset($_POST['sessiondestroy']) && !empty($_POST['sessiondestroy'])){
  session_destroy();
}

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
  echo"<script>window.location.href='dashboard.php'</script>";
}

if(isset($_POST["send"]))
{
   
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
  

  $selQuery = "Select * from user WHERE email= '$uname' and password='$upass'" ;
  $res1=mysqli_query($conn,$selQuery);
  $data=mysqli_fetch_assoc($res1);
  $n=mysqli_num_rows($res1);
  //print_r($data);
 
  if($n)
  {  
     $_SESSION['user_id']= $data['uid'];
     echo"<script>window.location.href='dashboard.php'</script>";
  } 
  else
  {
        echo"<script>alert('Username/Password is incorrect!')</script>";
        echo"<script>window.location.href='index.php'</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }



      .registerlink{
        font-size:12px;
      }

  
.color{
  color:white;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center bg">
  
<main class="form-signin w-100 m-auto ">
<h4 style ="color:white";> Welcome to Digital Library</h4>
<form method="POST" action="#">
   
   <!-- <img class="mb-4" src=img.jpg alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal color">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="uname" placeholder="name@example.com" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="upass" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3 color">
      <label>
        <input type="checkbox" value="remember-me"> Remember me

      </label>
    </div>
    <input class="w-100 btn btn-lg btn-primary"  type="submit" name="send" value="Login">
    <a class="registerlink" href="register.php"><strong> Register Here</a><br></strong>
    <!--<a class="registerlink" href="forgot.php"><strong>Forgot Username/Password</a></strong>-->
    <p class="mt-3 mb-3 color">&copy;2022</p>
  </form>
</main>
  </body>
</html>


