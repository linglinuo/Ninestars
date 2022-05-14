<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include ("template.php");
    echo $top ;
    echo $vendorcss;
    echo $maincss;
    echo $sourcejs;
    echo $wish;
  ?>
  <style>
    #about{
      background-image: url(gif/背景-01-01-01.png); 
      background-color: #fef8f5;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
    .enterstore{
      background-color: #eb5d1e;
      color: #fef8f5;
      font-size: large;
      border-radius: 10px;
    }
    .memberimg{
      width: 70%;
      border-radius: 50%;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,.2);
    }
    .card{
      padding: 1.5em .5em .5em;
      border-radius: 2em;
      text-align: center;
      box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }
    .card-title{
      padding-top: 10px;
      color: #eb5d1e;
      font-weight: 1000;
      font-size: 1.5em;
    }
    .card-name{
      padding-top: 10px;
    }
    .item{
      width: 250px;
      height: 250px;
    }
    .enterwish{
      color: #fef8f5;
      background-color: #eb5d1e;
      border-radius: 5px;
      margin-left: 130px;
    }
    .wish{
      width: 200px;
      height: 200px;
    }
    .wishboard {
      background-color: #d1ad99;
      color: white;
    }
    .name{
      font-size: 25px;
    }
    .sentence{
      font-size: 20px;
    }
    .date{
      font-size: 20px;
      text-align: right;
    }
    .error {
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
          <li><a class="nav-link scrollto active" href="#bg-img">首頁</a></li>
          <li><a class="nav-link scrollto" href="#about">介紹</a></li>
          <li><a class="nav-link scrollto" href="#store">小舖</a></li>
          <li><a class="nav-link scrollto" href="#pray">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="#wish">許願池</a></li>
          <li><a class="nav-link scrollto" href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          <li><button class="getstarted button1" onclick="document.getElementById('id01').style.display='block'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!--End Header -->
  <!--login-->
  <?php
  include ("login.html");
  ?>
  <!--login end-->
  <!-- ======= Banner Section ======= -->
   <div id="bg-img" class="align-items-center" style="margin-top: 0px;">
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/鳥居.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/鳥居.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    
    <!-- <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>絲扇淒神社</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">開始參觀</a>
          </div>
          <div>
            <img src="" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-8 order-1 order-lg-2 hero-img">
          <img src="gif/1.gif" class="img-fluid animated" alt="">
        </div>
      </div>
    </div> -->

  </div><!-- End Hero -->

  <main id="main" style="margin-top: 0px;">
    <!-- ======= about Section ======= -->
    <section id="about" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>神社介紹</h2>
          <p>願你在其中得到幸福</p>
        </div>
        <div class="row ">
          <div class="col-lg-6 d-flex align-items-center justify-content-center about-img">
            <img src="img/雷門.jpg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-5">
            <h3 data-aos="fade-up">彰師，絲扇淒神社・線上</h3>
            <p class="py-2" data-aos="fade-up" data-aos-delay="100">
              <br>我們使用的籤文接來自淺草觀音寺，神明關心您!
              <br>
              成立於2020年的現代化神社，結合現代科技與文化傳承。現址存於光邊無際的網絡上，神明們通過無邊的神力藉由網絡散播於各地。
              <br><br>本神社可祈求事業、求課業、求健康、求愛情、求寄託。
              <br>
              歡迎各位成為我們的信徒，在網絡上凝聚各位的寄託，散播更多的祝福。
              <br>我們目前正在募資蓋神社與蓋鳥居的錢，請各位有興趣者務必前往小舖查看我們的周邊商品，為我們的未來盡一份力。
            </p>
          </div>
        </div>
      </div>
    </section><!--End Services Section--> 

    <!-- ======= Store Section ======= -->
    <section id="store" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4">
            <div class="section-title">
              <h2>神社小舖</h2>
              <p>願你在其中得到守護</p>
            </div>
          </div>
          <div class="col-4"></div>
        </div>
        
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">御守</li>
              <li data-filter=".filter-card">佛具</li>
              <li data-filter=".filter-web">紀念品</li>
            </ul>
          </div>
        </div>
        <!--照片大小800X600-->
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/a1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=1" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>御守</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/c1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=8" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>紀念品</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/a2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=2" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>御守</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/b1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=5" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>佛具</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/c2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=9" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>紀念品</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/a3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=3" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>御守</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/b2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=6" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>佛具</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/b3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=7" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>佛具</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/c3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="商品頁.php?id=10" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>紀念品</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <a href="store-page.php" class="btn-get-started scrollto enterstore" align="center">進入商城</a>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= membersort Section ======= -->
    <section id="membersort" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title" style="padding-bottom: 0px;">
          <h2>會員排行榜</h2>
          <p>願你在其中得到救贖</p>
        </div>
        <div class="row">
          <div class="col-lg-4" align="center">
            <div class="card d-flex mt-2" style="width: 20rem;">
              <img src="img/team/team-1.jpg" class="card-img-top memberimg" alt="">
              <div class="card-body" style="padding-bottom: 5px;">
                <h5 class="card-title">第一名</h5>
                <h3 class="card-name">Jason</h3>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">會員等級</li>
                <li class="list-group-item"><p class="card-text">感謝絲扇淒所帶給我的一切，我的身心靈得到了很大的救贖</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4" align="center">
            <div class="card d-flex mt-2" style="width: 20rem;">
              <img src="img/team/team-2.jpg" class="card-img-top memberimg" alt="...">
              <div class="card-body" style="padding-bottom: 5px;">
                <h5 class="card-title">第二名</h5>
                <h3 class="card-name">Betty</h3>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">會員等級</li>
                <li class="list-group-item"><p class="card-text">感謝絲扇淒所帶給我的一切，我的身心靈得到了很大的救贖</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4" align="center">
            <div class="card d-flex mt-2" style="width: 20rem;">
              <img src="img/team/team-3.jpg" class="card-img-top memberimg" alt="...">
              <div class="card-body" style="padding-bottom: 5px;">
                <h5 class="card-title">第三名</h5>
                <h3 class="card-name">Jack</h3>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">會員等級</li>
                <li class="list-group-item"><p class="card-text">感謝絲扇淒所帶給我的一切，我的身心靈得到了很大的救贖</p>
                </li>
              </ul>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End membersort Section -->

    <!-- =======Pray Section ======= -->
    <section id="pray" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>求籤儀式</h2>
          <p>願你在其中得到希望</p>
        </div>
        <div class="row ">
          <div class="col-lg-4 d-flex align-items-center justify-content-center about-img">
            <img src="gif/燈籠left-01.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center about-img">
            <a href="求籤.php" class="btn-get-started scrollto">
              <img src="gif/求籤.gif" class="img-fluid" alt="" data-aos="zoom-in">
            </a>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center about-img">
            <img src="gif/燈籠right-03.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Wish Section ======= -->
    <section id="wish" class="clients section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>許願池</h2>
          <p>願你在其中得到力量</p>
        </div>
        <div class="row">
          <div class="col-12 justify-content-center">
            <div class="c0l-12 owl-carousel owl-theme"> <!--總共12張輪波-->
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <tr>
                        <td class="sentence">
                          <h3 class="py-2">絲扇淒許願池<br></h3>
                          <h5 class="pt-2">希望在這邊你能勇敢大聲地說出你的願望</h5>
                          <h5 class="pt-3 align-content-center"><a href="許願池.php" class="btn-get-started scrollto enterwish">前往許願</a></h5>
                        </td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名1</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名2</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名3</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名4</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名5</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                  </table>        
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名6</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名7</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名8</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名9</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名10</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
              <div class="item" style="max-width: 250px; margin-right: 10px;">
                  <table width="250px" height="250px" class="wishboard">
                      <th height="30px" class="name">會員姓名11</th>
                      <tr>
                        <td class="sentence">我希望可以.....</td>
                      </tr>
                      <tr>
                        <td height="30px" class="date">2022.03.28</td>
                      </tr>
                    </table>
              </div>
          </div>   
          </div>
        </div>
         
          
        </div>
      </div>
    </section><!-- End Clients Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include ("footer.html");
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php
  include ("template.php");
  echo $vendorjs ;
  ?>

  <!-- Template Main JS File -->
  
  
  <script>
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      autoWidth:true,
      item:4,
      autoplay:true,
      autoTimeout:2000,
      autoplayHoverPause:true,
      responsive:{
        0:{
          item:1
        },
        600:{
          item:3
        },
        1000:{
          item:5
        }
      }
    })
  </script>
  <!--verify-->
  <?php
  include ("verify.html");
  ?>
  <!--verify end-->
  <?php
  include ("template.php");
  echo $mainjs ;
  ?>
  
</body>

</html>