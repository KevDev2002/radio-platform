<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$page = "home";
require("assets/stations/config/nl-config.php");
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="og:type" content="website">
  <meta name="og:image" content="https://radio-platform.nl/assets/img/Radio-Platform-Logo.png">
  <meta name="description" content="Online luisteren naar alle radio stations van Nederland en Belgie! Luister via radio-platform.nl">
  <meta name="keywords" content="online luisteren, luisteren, radio luisteren, radio, online radio, webradio, online radio luisteren, radio-platform">
  <meta name="og:url" content="https://mobile.radio-platform.nl">
  <meta name="site_name" content="Radio-platform">
  <meta name="og:title" content="Radio-platform">
  <link rel="icon" type="image/png" sizes="600x600" href="assets/img/Radio-Platform-Logo.png">
  <link rel="icon" type="image/png" sizes="600x600" href="assets/img/Radio-Platform-Logo.png">
  <link rel="icon" type="image/png" sizes="600x600" href="assets/img/Radio-Platform-Logo.png">
  <link rel="icon" type="image/png" sizes="600x600" href="assets/img/Radio-Platform-Logo.png">
  <link rel="icon" type="image/png" sizes="600x600" href="assets/img/Radio-Platform-Logo.png">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
  <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
  <link rel="stylesheet" href="assets/css/Footer-Basic.css">
  <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
  <link rel="stylesheet" href="assets/css/gradient-navbar.css">
  <link rel="stylesheet" href="assets/css/purecookie.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title><?php echo $title; ?> || Radio-Platform</title>

</head>

<body>
  <div id="cookie"></div>
  <nav class="navbar navbar-dark navbar-expand-md sticky-top" id="app-navbar">
    <div class="container-fluid"><a class="navbar-brand" href="#"></a><img id="brand-logo" class="logo" src="assets/img/RP_banner_wit.png">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-broadcast-tower"></i>&nbsp;Radio NL</a></li>
          <li class="nav-item"><a class="nav-link" href="thema/"><i class="fas fa-broadcast-tower"></i>&nbsp;Thema Radio</a></li>
          <li class="nav-item"><a class="nav-link" href="kijklive/"><i class="fas fa-video"></i>&nbsp;Kijk live</a></li>
          <li class="nav-item"><a class="nav-link" href="belgie/"><i class="fas fa-broadcast-tower"></i>&nbsp;Radio BE</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="bar">
    <!-- begin player bar -->
    <h4>
      <a style="display:none;;" id="imgbtn" onclick="aswitch()">
        <?php
        if ($stream == "") {
        ?>
          <img style="float:right;   margin-left: auto; margin-right: 0px;" id="ppimg" width="56px" heigth="56px" src="assets/img/Radio-Platform-Logo.png"></a>

    <?php
        } else {
    ?>
      <img style="float:right;   margin-left: auto; margin-right: 0px;" id="ppimg" width="56px" heigth="56px" src="assets/img/pause.png"></a>
    <?php } ?>
    <div id="loadspin" class="spinner-border float-right " style="color:#00d5ff;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <?php echo $title; ?>
    <br />
    <?php echo $slogan; ?>
    </h4>
  </div> <!-- /player bar -->

  </div>
  <div class="container">
    <div class="alert alert-success" role="alert">
      We hebben onze mobile site vernieuwd!

    </div>
    <div class="scrollContainer">
      <?php include("assets/stations/nl-radio.php"); ?>

    </div>
    <br><br><br> <br><br><br>
    <br><br><br> <br><br><br>
  </div>
  <audio id="radioStream">
    <source src="<?php echo $stream; ?>" type="audio/mp3">
    Sorry jouw browser ondersteund deze stream niet.
  </audio>
  <footer class="footer-basic">
    <div class="social"><a href="https://instagram.com/radioplatform.nl"><i class="icon ion-social-instagram"></i></a><a href="mailto:contact@melvinvdmeer.nl"><i class="icon ion-email"></i></a><a href="https://facebook.com/onlineradio.ga"><i class="icon ion-social-facebook"></i></a></div>
    <p class="copyright"><i class="fa fa-copyright"></i>&nbsp;radio-platform 2019-2021</p>
  </footer>
  <script src="assets/js/main.js"> </script>
  <script src="assets/js/mob.js"> </script>
  <script src="assets/js/jq.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/purecookie.js"></script>
</body>

</html>