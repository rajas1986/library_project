

<?php
include('config.php');
include('header.php');
$rid=$_GET['bookid'];

$sql="select * from book where bookid='$rid'";
$res=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($res);
?>

<?php
if(isset($_POST['send']))
{
    $ubname=$_POST['bname'];
    $uaname=$_POST['aname'];
    $ubooked=$_POST['booked'];
    $ubno=$_POST['bno'];
   // $dt=$_POST['dt'];
    $ustatus=$_POST['status'];
   $sql="update book SET book_name='$ubname',author_name='$uaname',book_edition='$ubooked',no_of_copies='$ubno',status='$ustatus' where bookid='$rid'";
   $res=mysqli_query($conn,$sql);
    if($res)
    {
        header('Location:dashboard.php');
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
            <td class="color"> <label for="bname">Book Name:</label>  </td>
            <td> <input type="text" class="form-control" name="bname" value="<?php echo $data['book_name'];?>"  id="bname"   required/> </td>
        </tr>
        <tr>
            <td class="color"> <label for="aname">Author Name:</label>  </td>
            <td> <input type="text"  class="form-control" name="aname" value="<?php echo $data['author_name'];?>"   id="aname"   required/> </td>
        </tr>

        <tr>
            <td class="color"> <label for="bk">Book Edition:</label>  </td>
            <td> <input type="text" class="form-control" name="booked" value="<?php echo $data['book_edition'];?>" id="bk"/> </td>
        </tr>
  
        <tr>
            <td class="color"> <label for="bno">No of Copies:</label>  </td>
            <td> <input type="text" class="form-control"  name="bno" value="<?php echo $data['no_of_copies'];?>" id="bno" required  /> </td>
        </tr>
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
        <input class="btn btn-primary"  type="submit" name="send" value="Edit">
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
