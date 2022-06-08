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
          <li><a class="nav-link scrollto" href="index.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="pray.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="fortune.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="wish.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
                if($_SESSION["Name"] == 'admin')
                {
                  echo '<li><a class="nav-link scrollto active" href="manageProduct.php">管理中心</a></li>';
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
            <h2>新增訂單</h2>
          </div>
        </div>
    </section>
    <!-- End Breadcrumbs Section -->
                
    <section>
        <div class="container">
            <?php
                if($_SESSION['Name'] == 'admin')
                {
                  echo "<div class=\"row justify-content-center\">";
                  echo "<div class=\"col-lg-6 col-sm-6 justify-content-center text-center\">";

                    echo "<h5 class=\"mt-4\">信徒名稱</h5>";
                    echo "<input type=\"text\" class=\"input form-control\" id=\"member_name\"><br>";

                    echo "<table class=\"table table-bordered\" style=\"table-layout:fixed\">
                        <tbody id=\"div_upload\">
                          <tr>
                            <td scope=\"col\" colspan=\"3\">商品名稱</td>
                            <td scope=\"col\" colspan=\"3\">購買數量</td>
                            <td scope=\"col\">新增欄位</td>
                          </tr>
                          <tr>
                            <td scope=\"col\" colspan=\"3\"><input type=\"text\" class=\"input form-control\" name=\"p-name\"></td>
                            <td scope=\"col\" colspan=\"3\"><input type=\text\" class=\"input form-control\" name=\"p-quantity\"></td>
                            <td scope=\"col\"><button type=\"button\" id=\"btn_append\" class=\"btn\">+</button></td>
                          </tr>
                        </tbody>
                    </table>";

                    echo "
                      <input type=\"button\" name=\"button\" class=\"btn btn-new\" id=\"sub_btn\" value=\"新增\"
                      onclick=\"location.href='orderForManager.php'\">";
                  echo "</div>";
                  echo "</div>";
                }
                else
                {
                     echo '您無權限觀看此頁面!';
                     echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
                }
            ?>
        </div>
    </section><!-- End Portfolio Section -->

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
  echo $mainjs ;
  ?>
  <!--verify-->
  <?php
    include ("verify.html");
  ?>
  <!--verify end-->

  <script>
    $("#btn_append").on("click", function(){
        $("#div_upload").append('<tr><td scope=\"col\" colspan=\"3\"><input type=\"text\" class=\"input form-control\" name=\"p-name\"></td><td scope=\"col\" colspan=\"3\"><input type=\text\" class=\"input form-control\" name=\"p-quantity\"></td><td scope=\"col\"><button id=\"btn_append\" class=\"btn\" type=\"button\">+</button></td></tr>');
    });
    
    
    $("#sub_btn").on("click", function(){
        var pname_arrList = new Array();
        $("input[name^='p-name']").each(function(i)
            {
              pname_arrList.push($(this).val());
            }
        )
        //alert(pname_arrList);
        var quantity_arrList = new Array();
        $("input[name^='p-quantity']").each(function(i)
            {
                quantity_arrList.push($(this).val());
                
            }
        )
        //alert(quantity_arrList);
        var member_name = $("#member_name").val();
        //alert(member_name);
        $.post('insertOrder_finish.php', {'product-name[]':pname_arrList, 'product-quantity[]':quantity_arrList, m_name:member_name});
    });
      
  </script>

</body>

</html>

