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
    <title>ROLIS | REGISTER </title>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/uikit.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/material.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 
</head>
  
<body>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b515fbedf040c3e9e0bc720/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N29N6CS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
   <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light"
    data-src="images/test.png" href="home" uk-img>
</div>

<div class="uk-child-width-1-1@s uk-grid-collapse uk-text-center" uk-grid>
    <div>
        <div class="uk-tile uk-tile-default">
           <form action="" method="post" class=" uk-inline">
    <div class="uk-margin">
      <label class="uk-inline">Username</label>
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
            <input class="uk-input" type="text" name="user">
        </div>
    </div>
<div class="uk-margin">
  <label class="uk-inline">Password</label>
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" type="password" name="pass">
        </div>
    </div>
    <center></center>
    <br>
 <center><input class="uk-button uk-button-default uk-button-small" type="submit" value="Register" name="submit">
 <a class="uk-button uk-button-default uk-button-small" href="login.php">Login</a></center>
</form>
        </div>
    </div>
    <div>
             <nav class="uk-navbar-container-default uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left"><div>
            <ul class="uk-navbar-nav">
                <li><a href="">BLOG </a></li>
                <li><a href="">ABOUT</a></li>
            </ul>
        </div></div>
                <a class="uk-navbar-item uk-logo" href="home">HOME
              </a>

        <div class="uk-navbar-center-right"><div>
            <ul class="uk-navbar-nav">
                <li><a href="souv">SOUV</a></li>
                <li><a href="login">LOGIN</a></li>
            </ul>
        </div></div>
    </div>
</nav>

<?php
if(isset($_POST['submit'])){
  if(!empty($_POST['user']) && !empty($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
    $db = mysqli_select_db($conn, 'tests') or die("DB Error");

    $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."'");
    $numrows = mysqli_num_rows($query);
    if($numrows  == 0) {
      $sql = "INSERT INTO userpass(user,pass) VALUES('$user','$pass')";
      $result = mysqli_query($conn, $sql);
      if($result){
        ?>
      <script>
      alert('Your account has been successfully created. Proceed to Login');
    </script>
    <?php
    echo '<script>window.location="login.php"</script>';
      }
      else{
        echo "Failed to create account";
      }
    }
    else{
      echo "That username already exists. Please choose another";
    }
  }
  else{
    ?>
    <script>
      alert('Fields cannot be left blank');
    </script>
    <?php
  }
}
?> 
   <script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/uikit-icons.js"></script>
    <script type="text/javascript" src="js/material.min.js"></script>

</body>

</html>