<?php
include('config.php');
include('header.php');
//$bookid=$_SESSION['bookid'];
$sql="Select * from user";
$res=mysqli_query($conn,$sql);
?>








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>

<div class="container">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link " href="dashboard.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Manage Books
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="author.php">
              <span data-feather="users" class="align-text-bottom"></span>
             Manage Authors
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rack.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Manage Rack
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="issuedbook.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Issued Books
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="user.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Manage User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Logout
            </a>
          </li>
        </ul>

       
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a href="adduser.php"><button class="btn btn-primary">Add</button>
            
          </div>
          
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          
            
            <tr>
                  <th> First Name</th>
                  <th> Last Name</th>
                  <th> Date_of_Birth</th>
                  <th> Email</th>
                  <th> Mobile No</th>
                  <th> Created Date</th>
                  <th> Type</th>
                  <th> Status</th>
                  <th colspan="2"> Actions</th>
            </tr>
            <?php

while($row=mysqli_fetch_assoc($res))
{
  ?>

<tr>
               <td><?php echo $row['first_name']?></td>
               <td><?php echo $row['last_name']?></td>
               <td><?php echo $row['date_of_birth']?></td>
               <td><?php echo $row['email']?></td>
               <td><?php echo $row['mobile_no']?></td>
               <td><?php echo $row['date_created']?></td>
               <td><?php echo $row['type']?></td>
               <td><?php echo $row['status']?></td>
               <td><a href="edituser.php?uid=<?php echo $row['uid']; ?>">Edit</a></td>
               <td><a href="deleteuser.php?uid=<?php echo $row['uid']; ?>">Delete</a></td>
         </tr>

<?php
}
?>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
