<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rolis");
if(!isset($_SESSION['sess_user'])){
    header("Location:index.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="images/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ROLIS | ADMIN | ORDERS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <link rel="shortcut icon" href="../images/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="css/nucleo-icons.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="white-content">
  <div class="wrapper">
    <div class="sidebar" data-color="blue">
      <br>
       <div class="sidebar-wrapper">
        <div class="logo">
          <a href="#" class="simple-text logo-mini">
            
          </a>
          <a href="home" class="simple-text logo-normal">
            ROLIS
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="home">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="orders">
              <i class="tim-icons icon-cart"></i>
              <p>ORDERS</p>
            </a>
          </li>
          <li>
            <a href="users">
              <i class="tim-icons icon-single-02"></i>
              <p>USERS</p>
            </a>
          </li>
          <li>
            <a href="sales">
              <i class="tim-icons icon-coins"></i>
              <p>SALES</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent  ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <img src="../images/icon.png" height="50" class="d-inline-block align-center" alt="">
        </a>
          </div>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto ">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="img/anime3.png">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                    <p class="d-lg-none">
                    <?=$_SESSION['sess_user'];?>
                  </p>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">
                      <strong><?=$_SESSION['sess_user'];?></strong>
                    </a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li class="nav-link">
                    <a href="logout" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <?php
}
?>
      <!-- End Navbar -->

        <div class="content">
              <nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Orders</li>
  </ol>
</nav>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <center><h6 class="title">ORDERS</h6></center>
              </div>
              <hr>
              <?php
include 'conn.php';
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>
  <form action="" method="post">
              <table class="table">
               <thead>
                    </thead>
                    <tbody>
                      <?php
                      if($result->num_rows > 0){
                         while ($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                        <div class="card">
  <div class="card-body">
<div class="form-row text-center">
        <div class="col">
          <center><h6> <label>Name</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="customer_name" placeholder="disabled" value="<?php echo $row['customer_name'];?>">
  <br>
   <center><h6> <label>Phone Number</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="phone_number" placeholder="disabled" value="<?php echo $row['phone_number'];?>">
        <br>
        <center><h6> <label>Product Name</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="product_name" placeholder="disabled" value="<?php echo $row['product_name'];?>">
  <br>
   <center><h6> <label>Colour</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="colour" placeholder="disabled" value="<?php echo $row['colour'];?>">
    <input class="btn btn-info btn-sm animation-on-hover btn-simple" type="submit" value="CONFIRM" name="submit">
        </div>

<div class="form-row">
        <div class="col">
          <center><h6> <label>Size</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="size" placeholder="disabled" value="<?php echo $row['size'];?>">
  <br>
   <center><h6> <label>Town</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="town" placeholder="disabled" value="<?php echo $row['town'];?>">
        <br>
        <center><h6> <label>Quantity</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="quantity" placeholder="disabled" value="<?php echo $row['quantity'];?>">
  <br>
   <center><h6> <label>Total</label></h6></center>
       <input class="form-control text-center form-control-success" type="text" 
  name="total" placeholder="disabled" value="<?php echo $row['total'];?>">
         <input type="button" class="btn btn-sm btn-danger animation-on-hover btn-simple" onclick="deleteme(<?php echo $row['id']; ?>)" name="Delete" value="Delete">
        </div>
      </div>

             <div class="col">
        </div>
      </div>

    </div>
  </div>
<!--
   <td><input class="form-control form-control-success" type="text" 
  name="customer_name" placeholder="disabled" value="<?php echo $row['customer_name'];?>"></td>
  <td><input class="form-control form-control-success" type="text" 
  name="phone_number" placeholder="disabled" value="<?php echo $row['phone_number'];?>"></td>
    <td><input class="form-control form-control-success" type="text" 
  name="product_name" placeholder="disabled" value="<?php echo $row['product_name'];?>"></td>
  <td><input class="form-control form-control-success" type="text" 
  name="colour" placeholder="disabled" value="<?php echo $row['colour'];?>"></td>
  <td><input class="form-control form-control-success" type="text" 
  name="size" placeholder="disabled" value="<?php echo $row['size'];?>"></td>
  <td><input class="form-control form-control-success" type="text" 
  name="town" placeholder="disabled" value="<?php echo $row['town'];?>"></td>
  <td><input class="form-control form-control-success" type="text" 
  name="quantity" placeholder="disabled" value="<?php echo $row['quantity'];?>"></td>
  <td><input class="form-control form-control-success" type="text" 
  name="total" placeholder="disabled" value="<?php echo $row['total'];?>"></td> 

  <td><input class="btn btn-info btn-sm animation-on-hover btn-simple" type="submit" value="CONFIRM" name="submit"></td>
  <td><input type="button" class="btn btn-sm btn-danger animation-on-hover btn-simple" onclick="deleteme(<?php echo $row['id']; ?>)" name="Delete" value="Delete"></td> -->
<hr>
<br>
<br>
</tr>
</form>
<script language="javascript">
  function deleteme(delid)
  {
    if(confirm("Do you want to delete this record?")){
      window.location.href='delete.php?del_id=' +delid+'';
      return true;
    }
  }
</script>

<?php 
 }

} 
else{
  ?>
  <th colspan="2">There are no records</th>
  </tr>
  <?php
}
?>
</tr>
</tbody>
</table>
</form>
<script type="text/javascript" src="jquery-3.3.1.js"></script>
</div>
</div>

    <!--   Core JS Files   -->
    <script src="js/core/jquery.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="demo/demo.js"></script>
</body>

</html>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "rolis";

$conn = new mysqli($server, $user, $pass, $dbname);
if(isset($_POST['submit'])){
$customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$town = mysqli_real_escape_string($conn, $_POST['town']);
$colour = mysqli_real_escape_string($conn, $_POST['colour']);
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
$total = mysqli_real_escape_string($conn, $_POST['total']);
$size = mysqli_real_escape_string($conn, $_POST['size']);
$sql = "INSERT INTO sales (customer_name, phone_number, town, colour, product_name, quantity, total,size) 
VALUES ('$customer_name','$phone_number','$town','$colour', '$product_name','$quantity','$total','$size')";

if($conn->query($sql) === TRUE){
?>
  <script>
      alert('Order Confirmed.');
    </script>
    <?php
  echo "Order Confirmed";
  echo '<script>window.location="delete.php"</script>';
}
else{
  echo "Error" . sql . "<br>" . $conn->error;
}
$conn->close();
}
?>