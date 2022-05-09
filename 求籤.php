<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>絲扇淒神社</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/templatemo-style.css">
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <style>
    .error {
            color: #D82424;
            font-weight: normal;
            font-family: "微軟正黑體";
            display: inline;
            padding: 1px;
        }
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!--additional method - for checkbox .. ,require_from_group method ...-->
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<!--中文錯誤訊息-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>

</head>
<body>
  <?php
  include ("template.php");
  echo $pageloader ;
  ?>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="container-fluid">
        <a class="navbar-brand" href="first.php">
            <i class="fas fa-film mr-2"></i>
            絲扇淒神社
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">首頁</a></li>
          <li><a class="nav-link scrollto" href="first.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.php">許願池</a></li>
          <li><a class="nav-link scrollto" href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          <li><button class="getstarted button1" onclick="document.getElementById('id01').style.display='block'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<!--login-->
<?php
include ("login.html");
?>
<!--login end-->
      <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg"></div>
    
    <div class="tm-bg-white container-fluid tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                求籤
            </h2>
        </div>
        <div id="input1" class="col-xl-12 col-lg-5 col-md-6 col-sm-12 text-center">
            <img type="image" src="img/求籤2.gif" alt="Image" class="img-fluid draw"  width="500">
        </div>
        <script>
            $(function () {
                $("#input button.draw").click(function () {
                    $("#input button.draw").toggle();
                    $("#input1").toggle();
                var _result = $("#result").empty();
                var _list = [];
                _result.append('<div id="input1" class="col-xl-12 col-lg-5 col-md-6 col-sm-12 text-center\"><img type="image" src="img/求籤3.gif" alt="Image" class="img-fluid draw"  width="500"></div><div class="m-3">恭喜抽中第' + Math.floor(Math.random() * 100) + '支籤~</div><div class="text-center"><a href="解籤1.php" class="btn btn-primary tm-btn-big">前往解籤</a></div>');
                });
            });
        </script>
        <div id="input" class="text-center">
            <button type="button" class="btn btn-primary draw m-5">抽籤</button>
        </div>
        <h3 id="result" class="text-center"></h3>
        <p></p>
    </div> <!-- container-fluid, tm-container-content -->

    <!-- ======= Footer ======= -->
    <?php
    include ("footer.html");
    ?>
    <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <?php
  include ("template.php");
  echo $vendorjs ;
  echo $mainjs ;
  ?>
   <!--verify-->
  <?php
  include ("verify.html");
  ?>
  <!--verify end-->
</body>
</html>