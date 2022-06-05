<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
<p><strong>輸入您註冊的電子郵箱，找回密碼：</strong></p> 
<p><input type="text" class="input" name="email3" id="email3"><span id="chkmsg"></span></p> 
<p><input type="button" class="btn" id="sub_btn3" value="submit"></p>
</body>
<script>
    $("#sub_btn3").click(function(){ 
    var email = $("#email3").val(); 
    var preg = /^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*/; //匹配Email 
    if(email==''){ 
    $("#chkmsg").html("請填寫正確的郵箱！"); 
    }else{ 
    $("#sub_btn").attr("disabled","disabled").val('提交中..').css("cursor","default"); 
    $.post("sendmail.php",{mail:email},function(msg){ 
    if(msg=="noreg"){ 
    $("#chkmsg").html("該郵箱尚未註冊！"); 
    $("#sub_btn").removeAttr("disabled").val('submit').css("cursor","pointer"); 
    }else{
    $(".demo").html("<h3>"+msg+"</h3>"); 
    } 
    }); 
    } 
    });
</script>
</html>