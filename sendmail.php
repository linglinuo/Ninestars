<?php
include("mysql_connect.inc.php");
$email = $_POST['mail'];
$sql = "select * from `member` where `member_email`='$email'";
echo $sql;
$result = mysqli_query($link,$sql);
//$num = mysqli_fetch_array($result);
$row = mysqli_fetch_row($result);

if($row[1] == $email){
    echo "send!";
    $getpasstime = time(); 
    $uid=$row[0];
    $token = md5($uid.$row[2]);//組合驗證碼 
    $url = "/reset.php?email=".$email."&token=".$token;//構造URL 
    $time = date('Y-m-d H:i'); 
    $resultmail = sendmail($time,$email,$url);
    echo "send2";
    if($resultmail==1){//郵件發送成功 
    $msg = '系統已向您的郵箱發送了一封郵件<br/>請登錄到您的郵箱及時重置您的密碼！'; 
    //更新數據發送時間  
    }else{ 
    $msg = $resultmail; 
    } 
    echo $msg;
}
else{
    echo "error";

    exit;
}

// if($num[1]==null)
//     { 
//         echo 'noreg'; 
//         exit; 
//     }
// else{ 
//     $row = mysqli_fetch_array($result); 
//     $getpasstime = time(); 
//     $uid=$row['member_name'];
//     $token = md5($uid.$row['member_password']);//組合驗證碼 
//     $url = "/reset.php?email=".$email."&token=".$token;//構造URL 
//     $time = date('Y-m-d H:i'); 
//     $resultmail = sendmail($time,$email,$url); 
//     if($resultmail==1){//郵件發送成功 
//     $msg = '系統已向您的郵箱發送了一封郵件<br/>請登錄到您的郵箱及時重置您的密碼！'; 
//     //更新數據發送時間  
//     }else{ 
//     $msg = $resultmail; 
//     } 
//     echo $msg; 
//     } 

//發送郵件 
function sendmail($time,$email,$url){ 
    include_once("smtp.class.php"); 
    $smtpserver = "smtp.gmail.com"; //SMTP服務器，如smtp.163.com 
    $smtpserverport = 587; //SMTP服務器端口 
    $smtpusermail = "437god@gmail.com"; //SMTP服務器的用戶郵箱 
    $smtpuser = "437god@gmail.com"; //SMTP服務器的用戶帳號 
    $smtppass = "pupss90311"; //SMTP服務器的用戶密碼 
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); 
    //這裏面的一個true是表示使用身份驗證,否則不使用身份驗證. 
    $emailtype = "HTML"; //信件類型，文本:text；網頁：HTML 
    $smtpemailto = $email; 
    $smtpemailfrom = $smtpusermail; 
    $emailsubject = "www.bitsCN.com - 找回密碼"; 
    $emailbody = "親愛的".$email."：<br/>您在".$time."提交了找回密碼請求。請點擊下面的鏈接重置密碼 
    （按鈕24小時內有效）。<br/><a href='".$url."'target='_blank'>".$url."</a>"; 
    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype); 
    
    return $rs; 
    }
?>