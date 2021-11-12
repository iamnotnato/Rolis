<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tests");
if(!isset($_SESSION['sess_user'])){
  header("Location:login.php");
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
<meta name="theme-color" content="LightGray">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>ROLIS |HOME| HOODIES | SWEATSHIRTS | SWEATERS</title>
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
 <a href="home"><img width="100%" src="images/test.png"></a>



             <nav class="uk-navbar-container-default uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left"><div>
            <ul class="uk-navbar-nav">
                <li><a href="#">BLOG </a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </div></div>
                <a class="uk-navbar-item uk-logo" href="shop">SHOP
              </a>
        <div class="uk-navbar-center-right"><div>
            <ul class="uk-navbar-nav">
                <li><a href="#">SOUV</a></li>
                <li><a href="login">LOGIN</a></li>
            </ul>
        </div></div>
    </div>
</nav>
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar="dropbar: true;" style="position: relative; z-index: 980;">
        <div class="uk-navbar-center">

            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#">LOGGED IN AS:</a></li>
                <li>
                    <a><?=$_SESSION['sess_user'];?></a>
                </li>
                <li><a href="logout">LOGOUT</a></li>
            </ul>

        </div>
    </nav>
</div>
<br>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "tests";

$conn = new mysqli($server, $user, $pass, $dbname);
if(isset($_POST['submit'])){
$customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$town = mysqli_real_escape_string($conn, $_POST['town']);

$sql = "INSERT INTO orders (customer_name, phone_number, town) 
VALUES ('$customer_name','$phone_number','$town')";

if($conn->query($sql) === TRUE){
?>
  <script>
      alert('Your order has been placed successfully.');
    </script>
    <?php
  echo "Your order has been placed";
}
else{
  echo "Error" . sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br>
<hr class="uk-divider-icon">
   <center><h6 class="uk-comment-meta uk-margin-remove-top">ORDER DETAILS</h6></center>
<center>  <p class="uk-comment-meta uk-margin-remove-top">Kindly Place One Order At A Time</p></center>
   <hr class="uk-divider-icon">
   <div style="clear:both"></div>
<div class="table-responsive">
  <table class="uk-table">
    <caption class="uk-text-center">SHOPPING CART</caption>
    <tr>
      <th width="10%">Product Name </th>
      <th width="15%">Quantity </th>
      <th width="10%">Price Details </th>
      <th width="10%">Order Total</th>
      <th width="5%">Action </th>
    </tr>
    <?php
    if(!empty($_SESSION["cart"]))
    {
      $total = 0;
      foreach ($_SESSION["cart"] as $keys=> $values)

  {
    ?>
    <tr>
      <td><?php echo $values["item_name"]; ?> </td>
      <td><?php echo $values["item_quantity"]; ?> </td>
      <td> KES <?php echo $values["product_price"]; ?> </td>
      <td> KES <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?> </td>
      <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?> "><span class="text-danger">X</span></a>
      </td>
        
    </tr>
    <?php
    $total = $total + ($values["item_quantity"] * $values["product_price"]);
    $item_quantity = ($values["item_quantity"]);
    $product_name = ($values["item_name"]);
 }
 ?>
  <tr>
    <td colspan="3" align="right">Total </td>
    <td align="right">KES <?php echo number_format($total, 2); ?></td>
    <td></td>
  </tr>
</table>
<br>
</div>
</div>
<form action="" method="post" class="responsive uk-text-center">
  <hr class="uk-divider-icon">
<center><h6 class="uk-comment-meta uk-margin-remove-top">ORDER DETAILS</h6></center>
<hr class="uk-divider-icon">
<div uk-grid>
    <div class="uk-width-1@s">
            <div class="uk-margin">
        <div class="uk-inline">
          <span class="uk-label">Name
          <span class="uk-margin-small-right" uk-icon="user"></span>
            <input class="uk-input uk-active" name="customer_name" type="text" value="<?=$_SESSION['sess_user'];?>">
        </div>
    </div>

     <div class="uk-margin">
        <div class="uk-inline">
                     <span class="uk-label">Town
          <span class="uk-margin-small-right" uk-icon="location"></span>
            <input uk-tooltip="Kindly Enter The Town To Be Delivered To"  class="uk-input" type="text" name="town">
        </div>
    </div>

 <div class="uk-margin">
        <div class="uk-inline">
           <span class="uk-label">Phone Number
          <span class="uk-margin-small-right" uk-icon="receiver"></span>
            <input uk-tooltip="Kindly Enter Your Phone Number" class="uk-input" type="text" name="phone_number">
        </div>
    </div>
</div>
<div class="uk-width-1@s">
   <div class="uk-margin">
        <div class="uk-inline">
                    <span class="uk-label">Testing
                                <span class="uk-margin-small-right" uk-icon="cart"></span>
            <input class="uk-input" type="text" name="product_name" value="<?php echo $product_name;?>">"
        </div>
    </div>
    <div class="uk-width-1@s">
   <div class="uk-margin">
        <div class="uk-inline">
                    <span class="uk-label">Product Name
          <span class="uk-margin-small-right" uk-icon="cart"></span>
            <input class="uk-input" type="text" name="product_name" value="<?php echo $product_name;?>">"
        </div>
    </div>

   <div class="uk-margin">
        <div class="uk-inline">
                    <span class="uk-label">Quantity
          <span class="uk-margin-small-right" uk-icon="cart"></span>
            <input class="uk-input" type="text" name="quantity" value="<?php echo $item_quantity;?>">"
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-inline">
                    <span class="uk-label">Total KES:
          <span class="uk-margin-small-right" uk-icon="credit-card"></span>
            <input class="uk-input" type="text" name="total" value="<?php echo $total;?>">"
        </div>
    </div>

      <div class="uk-margin">
        <div class="uk-inline">
        <span class="uk-label">Size
          <span class="uk-margin-small-right" uk-icon="expand"></span>
            <select uk-tooltip="Kindly Enter The Preferred Size" name="size" class="uk-select">
                <option>SMALL</option>
                <option>MEDIUM</option>
                 <option>LARGE</option>
                  <option>XL</option>
            </select>
        </div>
        </div>

          <div class="uk-width-1@s">
          <div class="uk-margin">
        <div class="uk-inline">
                    <span class="uk-label">Colour
          <span class="uk-margin-small-right" uk-icon="happy"></span>
           <select uk-tooltip="Kindly Enter The Desired Colour" name="colour" class="uk-select">
                <option>WHITE</option>
                <option>BLACK</option>
                 <option>MAROON</option>
                  <option>NAVY BLUE</option>
                  <option>JUNGLE GREEN</option>
                <option>BROWN</option>
                 <option>BEIGE</option>
                  <option>ORANGE</option>
                  <option>RED</option>
                <option>YELLOW</option>
            </select>
</div>

                </div>

        </div>
    </div>
</div>
<br>

<br>
 <center> <input class="uk-button uk-button-default uk-button-small" type="submit" value="ORDER" name="submit"></center>
</form>
  <?php
}
?>
<hr>
<script src="admin/js/jquery-3.3.1.js" type="text/javascript"></script>
       
   <script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/uikit-icons.js"></script>
    <script type="text/javascript" src="js/material.min.js"></script>

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