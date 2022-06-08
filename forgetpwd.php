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
    .error {
      color: #D82424;
      font-weight: normal;
      font-family: "微軟正黑體";
      display: inline;
      padding: 1px;
    }
    .new-product{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
      padding-top: 3px;
      padding-bottom: 3px;
      padding-left: 10px;
      padding-right: 10px;
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
  </style>
</head>
<body>
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
          <li><a class="nav-link scrollto active" href="index.php">首頁</a></li>
          <li><a class="nav-link scrollto" href="index.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="pray.php">求籤</a></li>
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
  </header><!--End Header -->
  
  <!--login-->
  <?php
  include ("login.php");
  ?>
  <!--login end-->
  <main id="main" style="margin-top: 20px;">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center mt-5">
            <h2>忘記密碼</h2>
          </div>
        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section>
        <div class="container" style="text-align: center; width: 500px">
            <img src="img/foegetpwd.png">
            <h5 class="mt-4">輸入電子郵箱找回密碼</h5><br>
            <input type="text" class="input form-control" name="email3" id="email3">
            <span id="chkmsg"></span> <br>
            <input type="submit" name="button" class="btn btn-new" id="sub_btn3" value="提交並至信箱收件" onclick="location.href='first.php'">
        </div>
    </section><!-- End Portfolio Section -->

  </main>
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
<script>
    $("#sub_btn3").click(function(){ 
    var email = $("#email3").val(); 
    var preg = /^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*/; //匹配Email 
    if(email==''){ 
    $("#chkmsg").html("請填寫正確的郵箱！"); 
    }else{ 
    $("#sub_btn3").attr("disabled","disabled").val('提交中..').css("cursor","default"); 
    $.post("sendmail.php",{mail:email},function(msg){ 
    if(msg=="noreg"){ 
    $("#chkmsg").html("該郵箱尚未註冊！"); 
    $("#sub_btn3").removeAttr("disabled").val('submit').css("cursor","pointer"); 
    }else{
    $(".demo").html("<h3>"+msg+"</h3>"); 
    } 
    }); 
    } 
    });
</script>
</html>