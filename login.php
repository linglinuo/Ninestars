<script>
      function sendRequest() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              if (this.responseText==1) document.getElementById('show_msg').innerHTML = '此帳號已存在!';
              else document.getElementById('show_msg').innerHTML = '';
            }
        };
        var url='check_account_ajax.php?name=' + document.register.name.value + '&timeStamp='+new Date().getTime();
        xhttp.open('GET',url,true);//建立XMLHttpRequest連線要求
        xhttp.send();
      }
</script>
<!--Login-->
<div id="id01" class="modal" style="z-index:1000;"> 
    <div id="login" class="modal-content animate">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>
      <div class="container">
        <div class="cont">
          <form method="POST" action="connect.php" name="sign" id="sign">
            <div class="form sign">
              <h2>歡迎回來</h2>
              <label>
                <input type="text" name="name1">信徒名稱
                <label for="name1" class="error"></label>
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

            <form method="POST" action="register_finish.php" name="register" id="register">
              <div class="form resister">
                <h2>歡迎加入大家庭</h2>
                <label>
                  <input type="text" name="name" id="name" onkeyup=sendRequest();>信徒名稱
                  <label for="name" class="error"></label><span id='show_msg' style="color:red"></span>
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
    </div>
  </div>
  <!--login end-->