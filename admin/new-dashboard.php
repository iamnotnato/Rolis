<?php
session_start();
if(!isset($_SESSION['sess_user'])){
    header("Location:login");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122661891-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122661891-1');
</script>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N29N6CS');</script>
<!-- End Google Tag Manager -->

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>ROLIS | ADMIN | DASHBOARD</title>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/uikit.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/material.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/nucleo-icons.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

 
</head>
<nav class="uk-navbar-container navbar-absolute navbar-transparent " uk-navbar>
<div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
  <h6><?=$_SESSION['sess_user'];?> | DASHBOARD</h6>
 
        </a>
          </div>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto ">
              <div class="search-bar input-group">
                <!-- <input type="text" class="form-control" placeholder="Search...">
      <div class="input-group-addon"><i class="tim-icons icon-zoom-split"></i></div> -->
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i></button>
                <!-- You can choose types of search input -->
              </div>
              <!-- <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
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
  </div> -->
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    New Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="img/anime3.png">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Log out</a>
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
</nav>


<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="blue">
      <br>
       <div class="sidebar-wrapper">
        <div class="logo">
          <a href="#" class="simple-text logo-mini">
            
          </a>
          <a href="#" class="simple-text logo-normal">
            ROLIS
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="orders.php">
              <i class="tim-icons icon-cart"></i>
              <p>ORDERS</p>
            </a>
          </li>
          <li>
            <a href="users.php">
              <i class="tim-icons icon-single-02"></i>
              <p>USERS</p>
            </a>
          </li>
          <li>
            <a href="sales.php">
              <i class="tim-icons icon-coins"></i>
              <p>SALES</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
<br>
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Sales</h5>
                    <h2 class="card-title">Performance</h2>
                  </div>
                  <div class="col-sm-6">
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-info btn-simple active" id="0">
                        <input type="radio" name="options" autocomplete="off" checked> Orders
                      </label>
                      <label class="btn btn-sm btn-info btn-simple " id="1">
                        <input type="radio" name="options" autocomplete="off"> Purchases
                      </label>
                      <label class="btn btn-sm btn-info btn-simple " id="2">
                        <input type="radio" name="options" autocomplete="off"> Profit
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header ">
                <h5 class="card-category">Orders</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-info "></i> 14</h3>
              </div>
              <div class="card-body ">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header ">
                <h5 class="card-category">Sales</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info "></i> KES 50,000</h3>
              </div>
              <div class="card-body ">
                <div class="chart-area">
                  <canvas id="CountryChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header ">
                <h5 class="card-category">Website Visits</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success "></i>249K</h3>
              </div>
              <div class="card-body ">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
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
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

      });
    </script>
      
   <script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/uikit-icons.js"></script>
    <script type="text/javascript" src="js/material.min.js"></script>
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
    <script>

</body>
<footer class="mdl-mega-footer">
    <div class="mdl-mega-footer__middle-section">
  
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Contact Us</h1>
        <ul class=" mdl-mega-footer__link-list">
          <li><a href="https://api.whatsapp.com/send?phone=254782040053"><p class="white-text"><i class="fa fa-whatsapp" aria-hidden="true"></i> Message us on Whatsapp</p></a></li>
          <li><p class="white-text"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Cell: +254782040053</p></li>
          <li><p class="white-text"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Cell: +254708289673</p></li>
        </ul>
      </div>
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Find Us On:</h1>
        <ul class="mdl-mega-footer__link-list">
          <li><a href="https://web.facebook.com/rolisclothingKe/?_rdc=1&_rdr"><p class="white-text"><i class="fa fa-facebook-official" aria-hidden="true"></i>   Facebook</p></a></li>
          <li><a href="https://twitter.com/RolisClothing?lang=en"><p class="white-text"><i class="fa fa-twitter-square" aria-hidden="true"></i>   Twitter</p></a></li>
          <li><a href="https://www.instagram.com/rolis_ke/"><p class="white-text"><i class="fa fa-instagram" aria-hidden="true"></i>   Instagram</p><br></a></li>
        </ul>
      </div>
  
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Info</h1>
        <ul class="mdl-mega-footer__link-list">
              <li>  <p class="white-text">Find us:<br>
  Muthaiga Business Centre <br>
  First Floor Room Number 102.<br>
                </p></li><br>
          <li><a href="https://www.google.com/maps/place/Rolis+Clothing/@-1.1556576,36.837603,11z/data=!4m8!1m2!2m1!1smuthaiga+business+centre!3m4!1s0x182f10d6cd748fad:0xed969f5359d9508a!8m2!3d-1.2642718!4d36.8384177">
            <b><p class="white-text">CLICK TO NAVIGATE</p></b></a></li>
        </ul>
      </div>
  
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Other Markets</h1>
        <ul class="mdl-mega-footer__link-list">
          <li><a href="https://sky.garden/shop/rolis-clothing"><p class="white-text">SKY GARDEN</p></a></li>
          <li><a href="https://www.olx.co.ke/nf/user/101152842"><p class="white-text">OLX</p></a><br> </li>
        </ul>
      </div>
  
    </div>
  
    <div class="mdl-mega-footer__bottom-section float-center">
      <div class="mdl-logo "><center>&copy Rolis Clothing 2018</center></div>
      <ul class="mdl-mega-footer__link-list">
      </ul>
    </div>
  
  </footer>
</html>
<?php
}
?>