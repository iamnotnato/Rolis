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
          <a href="home" class="simple-text logo-mini">
            
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
          <li >
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
          <li class="active ">
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
    <li class="breadcrumb-item active" aria-current="page">Sales</li>
  </ol>
</nav>


              <div class="card-header">
                <center><h6 class="title">SALES</h6></center>
              </div>
              <hr>
              <?php
include 'conn.php';
$sql = "SELECT * FROM sales";
$result = $conn->query($sql);
?>
               <table class="table">
               <thead>
                   <tr>
                      <th>Name</th>
                      <th>Product Name</th>
                      <th>Details</th>
                      <th>Details</th>
                      <th>Quantity</th>
                    </thead>
                    <tbody>
                      <?php
                      if($result->num_rows > 0){
                         while ($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
   <td><?php echo $row['customer_name'];?></td>
    <td><?php echo $row['product_name'];?></td>
  <td><?php echo $row['colour'];?></td>
  <td><?php echo $row['size'];?></td>
  <td><?php echo $row['quantity'];?></td>
</tr>
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
<script type="text/javascript" src="jquery-3.3.1.js"></script>

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
