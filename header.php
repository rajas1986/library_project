<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
           <div class="container">
              <a class="navbar-brand" href="index.php">Digital Library</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
               </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!---
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>--->



                <?php
                   if(isset($_SESSION['user_id']))
                  {
                   ?>

                      <li class="nav-item">
                   <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                     
                    <?php
                  }
                    else{
                  

                ?>

                     <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Login</a>
                    </li>
                   
                        <?php } ?>
               </ul>
                    
               <!-- <span class="navbar-text">
                Navbar text with an inline element
               </span>--->
    </div>
  </div>
</nav>