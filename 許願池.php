<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include ("template.php");
        echo $top ;
    ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/style1.css" rel="stylesheet">
<style>
    .error {
            color: #D82424;
            font-weight: normal;
            font-family: "微軟正黑體";
            display: inline;
            padding: 1px;
        }
  </style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
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
          <li><a class="nav-link scrollto active" href="index.php">首頁</a></li>
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

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg"></div>
    <h3 class="tm-text-primary m-5 text-center">許願池</h3>
    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-5 col-12 mb-5 ml-5">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5 text-center">願您能在其中得到力量</h2>
                    <p class="tm-mb-30">人生就像一場戲，因為有緣才相聚。

                        相扶到老不容易，是否更該去珍惜。
                        
                        為了小事發脾氣，回頭想想又何必。
                        
                        別人生氣我不氣，氣出病來無人替。
                        
                        我若氣死誰如意，況且傷神又費力。
                        
                        鄰居親朋不要比，兒孫瑣事由他去。
                        
                        吃苦享樂在一起，神仙羨慕好伴侶。 </p>
                    <p class="tm-mb-50 text-right">--《莫生氣》</p>
                    <p class="tm-mb-30">遇到困難不要後退，躺著就行 </p>
                    <p class="tm-mb-50 text-right">--《無名毒雞湯》</p>
                    <ul class="tm-contacts">
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: 請稍後，我們將幫您轉寄神明們
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                電話: 請稍後，我們將幫您轉接神明們
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-globe"></i>
                                URL: www.437god.com
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class="col-lg-6 col-12 mb-5">
                <h2 class="tm-text-primary mb-5 text-center">許願籤</h2>
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0 text-left" placeholder="尊稱" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0 text-left" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="祈願..." required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">寄送</button>
                    </div>
                </form>                
            </div>
            
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    <!-- ======= Footer ======= -->
    <?php
    include ("footer.html");
    ?>
    <!-- End Footer -->
    <?php
    include ("template.php");
    echo $mainjs ;
    ?>
    <!--verify-->
    <?php
    include ("verify.html");
    ?>
    <!--verify end-->
</body>
</html>