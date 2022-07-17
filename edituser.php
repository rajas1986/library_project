

<?php
include('config.php');
include('header.php');
$rid=$_GET['uid'];

$sql="select * from user where uid='$rid'";
$res=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($res);
?>

<?php
if(isset($_POST['send']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $db=$_POST['db'];
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    $mn=$_POST['mn'];
    $status=$_POST['status'];
   $sql="update user SET first_name='$fname',last_name='$lname',date_of_birth='$db',email='$uname',password='$upass',mobile_no='$mn',status='$ustatus' where uid='$rid'";
   $res=mysqli_query($conn,$sql);
    if($res)
    {
        header('Location:user.php');
    }
    else
    {
        echo"<script>alert('Failed to edit Record')</script>";//js code to redirect the page
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
        
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">
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
          <a class="nav-link" href="user.php">
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

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>
    </div>
  </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">  
      <h1 class="h2">Edit Book</h1>
      <div class="justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
      

      <form method="POST" action="#">
    <table>
        <tr>
            <td class="color"> <label for="fname">First Name:</label>  </td>
            <td> <input type="text" class="form-control" name="fname" value="<?php echo $data['first_name'];?>"  id="fname"   required/> </td>
        </tr>
        <tr>
            <td class="color"> <label for="lname">Last Name:</label>  </td>
            <td> <input type="text"  class="form-control" name="lname" value="<?php echo $data['last_name'];?>"  id="lname"   required/> </td>
        </tr>

        <tr>
            <td class="color"> <label for="db">Date of Birth</label>  </td>
            <td> <input type="date" class="form-control" name="db" value="<?php echo $data['date_of_birth'];?>" id="db"/> </td>
        </tr>
  
        <tr>
            <td class="color"> <label for="uname">Email</label>  </td>
            <td> <input type="email" class="form-control" value="<?php echo $data['email'];?>" name="uname"  id="uname" required  /> </td>
        </tr>
        <tr>
            <td class="color"> <label for="upass">Password</label>  </td>
            <td> <input type="password" class="form-control" value="<?php echo $data['password'];?>" name="upass"  id="upass" required  /> </td>
        </tr>
        <tr>
            <td class="color"> <label for="mn">Mobile No.</label>  </td>
            <td> <input type="text" class="form-control" name="mn" value="<?php echo $data['mobile_no'];?>" id="mn"/> </td>
        </tr>
       
        
        <tr>
            <td class="color"> <label for="status">Status:</label>
           </td>
           <td>
            <select id="status" name="status">
            <option value="1">Enable</option>
           <option value="0">Disable</option>  
        </td>   
        </tr>
       <tr>
        <td>
        <input class="btn btn-primary"  type="submit" name="send" value="Add">
           </td>
          </tr>
    
</form>	
      </div>      
    </main>
  </div>
</div>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
