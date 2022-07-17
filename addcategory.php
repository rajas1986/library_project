<?php
include('config.php');
include('header.php');
//$id=$_SESSION['user_id'];
$sql="Select * from category";
$res=mysqli_query($conn,$sql);
?>

<?php
if(isset($_POST['send']))
{
    $cname=$_POST['cname'];  
    $status=$_POST['status'];
    $sql="insert into category(category_name,status)values('$cname','$status')";
    $res=mysqli_query($conn,$sql);  
    if($res)
    {
        echo"<script>window.location.href='category.php'</script>";
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
          <a class="nav-link " href="dashboard.php">
            <span data-feather="file" class="align-text-bottom"></span>
            Manage Books
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="category.php">
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

     
    </div>
  </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">  
      <h1 class="h2">Add </h1>
      <div class="justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
      

    <form method="POST" action="#">
    <table>
        <tr>
            <td class="color"> <label for="cname">Category Name:</label>  </td>
            <td> <input type="text" class="form-control" name="cname"   id="cname"   required/> </td>
        </tr>
    
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
      </div>      
    </main>
  </div>
</div>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
