<?php
include("mysql_connect.inc.php");

try {
    // try to run code
    $email = $_POST['mail'];
    $sql = "select * from `member` where `member_email`='$email'";
    echo $sql;
    $result = mysqli_query($link,$sql);
    //$num = mysqli_fetch_array($result);
    $row = mysqli_fetch_row($result);
    print_r($result);
    print_r($row);
    if($row[1] == $email){
        echo "send!";
        $getpasstime = time(); 
        $uid=$row[0];
        $token = md5($uid.$row[2]);//組合驗證碼
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $new_link = trim($actual_link,'sendmail.php');
        $server = $_SERVER['SERVER_NAME'];
        $url = "h".$new_link."reset.php?email=".$email."&token=".$token;//構造URL 
        $time = date('Y-m-d H:i'); 
        echo "send3";
        $resultmail = sendmail($time,$email,$url);
        echo "send2";
    }
    else{
        echo "error";

        exit;
    }
} catch (Exception $e) {
    // if try session have error, then do here
    var_dump($e);
    exit;
}

//發送郵件 
function sendmail($time,$email,$url) { 
    include_once("smtp.class.php"); 
    $smtpserver = "ssl://smtp.gmail.com"; //SMTP服務器，如smtp.163.com 
    $smtpserverport = 465; //SMTP服務器端口 
    $smtpusermail = "437god@gmail.com"; //SMTP服務器的用戶郵箱 
    $smtpuser = "437god@gmail.com"; //SMTP服務器的用戶帳號 
    $smtppass = "jkrpfpgqoycrtbvl"; //SMTP服務器的用戶密碼 
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); 
    //這裏面的一個true是表示使用身份驗證,否則不使用身份驗證. 
    $emailtype = "HTML"; //信件類型，文本:text；網頁：HTML 
    $smtpemailto = $email; 
    $smtpemailfrom = $smtpusermail; 
    $emailsubject = "www.437god.com - 找回密碼"; 
    $emailbody = "親愛的".$email."：<br/>您在".$time."提交了找回密碼請求。請點擊下面的鏈接重置密碼。<br/><a href='".$url."'target='_blank'>".$url."</a>";

    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype); 
    
    return $rs; 
}
?>