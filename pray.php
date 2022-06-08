<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include ("template.php");
    echo $top ;
    echo $vendorcss;
    echo $maincss;
    echo $sourcejs;
  ?>
  <style>
    .error 
    {
      color: #D82424;
      font-weight: normal;
      font-family: "微軟正黑體";
      display: inline;
      padding: 1px;
    }
  </style>
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
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-film mr-2"></i>
            絲扇淒神社
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">首頁</a></li>
          <li><a class="nav-link scrollto" href="first.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto active" href="pray.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="fortune.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="wish.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
                if($_SESSION["Name"] == 'admin')
                {
                  echo '<li><a class="nav-link scrollto" href="manageProduct.php">管理中心</a></li>';
                  echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                }
                else
                {
                  echo '<li><a class="nav-link scrollto" href="manageOrder.php">訂單查詢</a></li>';
                  echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                }
                } else {
                echo '<li><button class="getstarted button1" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>';
                }
            ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<!--login-->
<?php
include ("login.php");
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
                $fortune=Math.floor(1+Math.random() * 99);
                _result.append('<div id="input1" class="col-xl-12 col-lg-5 col-md-6 col-sm-12 text-center\"><img type="image" src="img/求籤3.gif" alt="Image" class="img-fluid draw"  width="500"></div><div class="m-3">恭喜抽中第' + $fortune + '支籤~</div><div class="text-center"><a href="fortune_poem.php?id='+$fortune+'" class="btn btn-primary tm-btn-big">前往解籤</a></div>');
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