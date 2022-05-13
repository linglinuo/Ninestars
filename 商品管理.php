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

  <!--頁面載入-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <!--表單驗證-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
  <!--additional method - for checkbox .. ,require_from_group method ...-->
  <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
  <!--中文錯誤訊息-->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
  <!--modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--送出表單不重新整理頁面-->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  
  <!--商品管理-->
  <?php
    $link = mysqli_connect("localhost", "root", "root123456", "437god") // 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    // 送出編碼的MySQL指令
    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM products")) {
    while ($row = mysqli_fetch_assoc($result)) {
    $data .= "<tr><th scope=\"row\"><img src=\"$row[product_picture]\" width=\"100px\"></th><td>$row[product_name]</td><td>$row[product_categories]</td><td>$row[product_type]</td><td>$row[product_price]</td></tr>";
    }
    mysqli_free_result($result); // 釋放佔用的記憶體
    }
  ?>


  <style>
    .error {
            color: #D82424;
            font-weight: normal;
            font-family: "微軟正黑體";
            display: inline;
            padding: 1px;
    }
    .btn-new{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
      padding-top: 3px;
      padding-bottom: 3px;
      padding-left: 10px;
      padding-right: 10px;
    }
    .modal-backdrop {
      z-index: -1;
    }
    #myModal{
      z-index: 999;
    }
  </style>
</head>

<body>
  <!-- Page Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <i class="fas fa-film mr-2"></i>
            絲扇淒神社
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">首頁</a></li>
          <li><a class="nav-link scrollto" href="index.html">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.html">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.html">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.html">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.html">許願池</a></li>
          <li><a class="nav-link scrollto" href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
          <li><button class="getstarted button1" onclick="document.getElementById('id01').style.display='block'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!--End Header -->
  
<!--Login-->
<div id="id01" class="modal" style="z-index:1000;">
  
  <form id="login" class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="cont">
        <form name="sign" id="sign">
          <div class="form sign">
            <h2>歡迎回來</h2>
            <label>
              <input type="email" name="email1">信箱
              <label for="email1" class="error"></label>
            </label>
            <label>
              <input type="password" name="pwd1">密碼
              <label for="pwd1" class="error"></label>
            </label>
            <p class="forgot-pass tm-text-gray">忘記密碼?</p>
            <button class="submit button1">登入</button>
          </div>
        </form>
        
        
        <div class="sub-cont">
          <div class="img">
            <div class="img__text m--up">
              <h2>新信徒?</h2>
              <h5>歡迎加入神社的大家庭</h5>
            </div>
            <div class="img__text m--in">
              <h2>已經是信徒了?</h2>
              <h5>若您已為信徒請直接登入</h5>
              <h5>我們想念您~</h5>
            </div>
            <div class="img__btn">
              <span class="m--up">註冊</span>
              <span class="m--in">登入</span>
            </div>
          </div>

          <form name="register" id="register">
            <div class="form resister">
              <h2>歡迎加入大家庭</h2>
              <label>
                <input type="text" name="name">信徒名稱
                <label for="name" class="error"></label>
              </label>
              <label>
                <input type="email" name="email">信箱
                <label for="email" class="error"></label>
              </label>
              <label>
                <input type="password" name="pwd">密碼
                <label for="pwd" class="error"></label>
              </label>
              <button class="submit button1">註冊</button>
            </div>
          </form>
        </div>
      </div>
      <!-- partial -->
      <script  src="js/script.js"></script>
    </div>
  </form>
</div>
<!--login end-->
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>管理中心</h2>
          </div>
  
        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section id="store" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <!--左側-->
                <div class="col-3">
                    <table class="table table-bordered">
                        <tr>
                        <th><button id="product-manager"><a href="商品管理.php"><h4>商品管理</h4></button></th>
                        </tr>
                        <tr>
                        <th>
                          <button id="member-manager"><h4><a href="會員管理.php">會員管理</a></h4></button>
                        </th>
                        </tr>
                    </table>
                </div>
                <!--右側-->
                <div class="col-9">
                    <!--product table start-->
                    <div id="product-table">
                        <div class="row">
                            <div class="col-9">
                                <h2 style="text-align:left;">商品管理</h2>  
                            </div>
                            <div class="col-3">
                            <button type="button" id="newProduct" class="btn-new flex-end">新增商品</button>
                            </div>
                        </div>
                        <table id="table-product" class="table table-bordered" style="table-layout:fixed">
                            <thead>
                                <tr>
                                <th scope="col">圖片</th>
                                <th scope="col">商品名</th>
                                <th scope="col">分類</th>
                                <th scope="col">種類</th>
                                <th scope="col">價格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo $data;?>
                            </tbody>
                        </table>
                        <!--product table end-->
                    </div>
                </div>
            </div>
        </div><!--container end-->

        <!--product-modal start-->
        <form id="new-product-modal" name="new-product-modal" action="" method="POST" enctype="multipart/form-data"> 
            <div class="container">
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="product-modal" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">新增商品</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">商品圖片</th>
                                        <td><input type="hidden" name="MAX_FILE_SIZE" value="1024000">
                                        <input type="file" name="p-img"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">商品名稱</th>
                                        <td><input type="text" name="pname" value="<?php echo $_POST['pname']?>"></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">分類</th>
                                        <td>
                                            <!-- <input type="radio" name="p-category" value="0" checked >御守<br>
                                            <input type="radio" name="p-category" value="1">佛具<br>
                                            <input type="radio" name="p-category" value="2">紀念品 -->
                                            <select name="pcategory" size="1">
                                            <option value="0" selected>御守</option>
                                            <option value="1">佛具</option>
                                            <option value="2">紀念品</option>
                                            </select>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <th scope="row">顏色</th>
                                        <td><input type="text" name="pcolor" value="<?php echo $_POST['pcolor']?>"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">價格</th>
                                        <td><input type="text" name="pprice" value="<?php echo $_POST['pprice']?>"></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="btn btn-default" id="product-save" value="儲存" onclick="Submit()">
                            <input type="button" name="btn btn-default" id="closemodal" value="關閉">
                            <!-- <button type="button" class="btn btn-default closemodal" data-dismiss="modal">關閉</button> -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
        <!--product-modal end-->

    </section><!-- End Portfolio Section -->
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
    <div class="container-fluid tm-container-small">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title">關於絲扇淒神社</h3>
                <p>歡迎蒞臨本神社。我們將為各位信徒呈上最好的祝福。祝大家擁有美好的一天！</p>
                <p>~~絲扇淒神社關心您~~</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title"></h3>
                <ul class="tm-footer-links pl-0">
                    <li><a href="index.html#about">介紹</a></li>
                    <li><a href="store-page.html">小舖</a></li>
                    <li><a href="index.html#pray">求籤</a></li>
                    <li><a href="解籤1.html">解籤</a></li>
                    <li><a href="許願池.html">許願池</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                    <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li class="mb-2"><a href="https://instagram.com/437god?utm_medium=copy_link"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                Copyright 2020 437god Company. All rights reserved.
            </div>
            <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">絲扇淒神社</a>
            </div>
        </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
  </script>
  <script>
    $("#register").validate({
      submitHandler: function(form) {
        alert("success!");
        form.submit();
      },
      rules: {
        name: {
          required:true
        },
        email: {
          required:true
        },
        pwd: {
          required:true
        },
      },
      messages: {
        name: {
          required: "必填"
        },
        email: {
          required: "必填"
        },
        pwd: {
          required: "必填"
        }
      }
    });

    $("#sign").validate({
      submitHandler: function(form) {
        alert("success!");
        form.submit();
      },
      rules: {
        email1: {
          required:true
        },
        pwd1: {
          required:true
        },
      },
      messages: {
        email1: {
          required: "必填"
        },
        pwd1: {
          required: "必填"
        }
      }
    });
  </script>

  <script>
      $(function (){        
        //新增商品按鈕跳出modal


        $("#newProduct").click(function(){
          alert("modal");
          $("#new-product-modal").modal('show');
        });
        //儲存商品管理資訊，表格新增下行
        $("#product-save").click(function(){
          alert("product save");
          $("#new-product-modal").modal('hide');

          // $table_row = $('<tr><th scope="row"><img src="img/portfolio/a2.png" width="100px"></th><td><?php echo $_POST['pname'];?></td><td><?php echo $_POST['pcategory'];?></td><td><?php echo $_POST['pcolor'];?></td><td><?php echo $_POST['pprice'];?></td></tr>')
          // $("#table-product").append($table_row);
        });
        //關閉modal
        $("#closemodal").click(function(){
          alert("colsemodal")
          $("#new-product-modal").modal('hide');
        });
      });
  </script>
</body>

</html>