<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include ("template.php");
    echo $top ;
    echo $vendorcss;
    echo $maincss;
    echo $extrajs;

  ?>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Noto+Sans+TC);
      .bgcolor{
        background-color: #fef8f5;
      }
      .btn-get-next{
        border: #fff;
        color: #eb5d1e;
        background-color: #fef8f5;
        letter-spacing: 1px;
        display: inline-block;
        border-radius: 4px;
      }
      .btn-enter{
        border: #fff;
        color: #fef8f5;
        background-color: #eb5d1e;
        letter-spacing: 1px;
        display: inline-block;
        border-radius: 6px;
      }
      #word{
        font-family: "Noto Sans TC", sans-serif;
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

      <div class="logo navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-film mr-2"></i>
                絲扇淒神社
            </a>
        </div>
    </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section  class="d-flex align-items-center bgcolor" >
    <div class="container">
      <div class="row gy-4 pt-3">
        <div class="col-3 d-flex flex-column justify-content-center">
          <img src="gif/left-01-01.png" class="img-fluid " alt="">
        </div>
        <div class="col-6">
          <img id="gif" src="gif/1.gif" class="img-fluid " alt="">
        </div>
        <div class="col-3">
          <img src="gif/right-01.png" class="img-fluid " alt="">
        </div>
      </div>
      <div class="row pt-lg-4">
        <div class="col-4" align="right">
          <h4><button type="button" class="btn-get-next" id="previous">
            <i class="bi bi-arrow-left-circle"></i>
          </button></h4>
        </div>
        <div class="col-4" align="center">
          <h4 id="word">歡迎來到絲扇淒神社</h4>
        </div>
        <div class="col-4" align="left">
          <h4 style="margin-bottom: 4px;"><button type="button" class="btn-get-next" id="next">
            <i class="bi bi-arrow-right-circle"></i>
          </button></h4>
          <button id="enter" class="btn-enter" onclick="location.href='first.php'">進入參觀</button>
        </div>
      </div>
    </div>
    
  </section><!-- End Hero -->

  



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

  <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
  <script>
    $(function () {
      var x=0;
      $("#enter").hide();
      //參拜下一步
      $("#next").click(function(){
        x++;
        document.getElementById("gif").src="gif/"+x+".gif";
        switch(x){
          case 1:
            document.getElementById("word").innerHTML="通過鳥居時要先鞠躬敬禮<br>再通過，以表示對神明的尊敬";
            break;
          case 2:
            var element = document.getElementById("word");
            element.innerHTML="在進入神社前，<br>需在手水舍將雙手洗淨。<br>首先，右手取水倒向左手";
            break;
          case 3:
            document.getElementById("word").innerHTML="再交換，左手取水倒向右手";
            break;
          case 4:
            document.getElementById("word").innerHTML="右手舀水至左手掌中，<br>並輕微漱口";
            break;
          case 5:
            document.getElementById("word").innerHTML="舀水將左手洗淨，<br>並用剩下的水沖洗木柄";
            break;
          case 6:
            document.getElementById("word").innerHTML="前往神殿正式參拜。<br>記住小秘訣：二拜兩拍手一拜";
            break;
          case 7:
            document.getElementById("word").innerHTML="將香油錢投入賽錢箱。<br>投五日圓，和神明結緣";
            break;
          case 8:
            document.getElementById("word").innerHTML="搖動鈴鐺，告知神明你來許願了";
            break;
          case 9:
            document.getElementById("word").innerHTML="鞠躬兩次";
            break;
          case 10:
            document.getElementById("word").innerHTML="連續拍兩次手。在心中與神明對話，默念時可以報上自己的<br>名字、年齡、地址和祈求內容";
            break;
          case 11:
            document.getElementById("word").innerHTML="最後向神明鞠躬，完成參拜儀式";
            break;
        }
        if (x>=12){
          document.getElementById("gif").src="gif/11.gif";
          $("#next").hide();
          $("#enter").show();
        }
        else{
          $("#next").show();
          $("#enter").hide();
        }
      })

      //參拜前一步
      $("#previous").click(function(){
        x--;
        document.getElementById("gif").src="gif/"+x+".gif";
        switch(x){
          case 1:
            document.getElementById("word").innerHTML="歡迎來到絲扇淒神社";
            break;
          case 2:
            var element = document.getElementById("word");
            element.innerHTML="在進入神社前，需在手水舍將雙手洗淨。首先，右手取水倒向左手";
            break;
          case 3:
            document.getElementById("word").innerHTML="再交換，左手取水倒向右手";
            break;
          case 4:
            document.getElementById("word").innerHTML="右手舀水至左手掌中，並輕微漱口";
            break;
          case 5:
            document.getElementById("word").innerHTML="舀水將左手洗淨，並用剩下的水沖洗木柄";
            break;
          case 6:
            document.getElementById("word").innerHTML="前往神殿正式參拜。記住小秘訣:二拜兩拍手一拜";
            break;
          case 7:
            document.getElementById("word").innerHTML="將香油錢投入賽錢箱。投五日圓，和神明結緣";
            break;
          case 8:
            document.getElementById("word").innerHTML="搖動鈴鐺，告知神明你來許願了";
            break;
          case 9:
            document.getElementById("word").innerHTML="鞠躬兩次";
            break;
          case 10:
            document.getElementById("word").innerHTML="連續拍兩次手。在心中與神明對話，默念時可以報上自己的名字、年齡、地址和祈求內容";
            break;
          case 11:
            document.getElementById("word").innerHTML="最後向神明鞠躬，完成參拜儀式";
            break;
        }
        if (x<=0){
          document.getElementById("gif").src="gif/1.gif";
          $("#enter").hide();
        }
        if (x>=1 && x<=11){
          $("#next").show();
          $("#enter").hide();
        }
      })

      //參拜進入商城頁
      $("#enter").click(function(){
        
      })
    });
    
  </script>
  

</body>

</html>