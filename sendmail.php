<?php
include("mysql_connect.inc.php");
$email = $_POST['email1'];
$sql = "select member_name, member_email, member_password,member_level from `member` where `member_email`='$email'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_row($result);

if($row[1] == $email){
    echo "寄送";
}
else{
    echo "error";

    exit;
}
echo $msg;


//发送邮件
function sendmail($time,$email,$url){
include_once("smtp.class.php");
$smtpserver = ""; //SMTP服务器，如smtp.163.com
    $smtpserverport = 25; //SMTP服务器端口
    $smtpusermail = ""; //SMTP服务器的用户邮箱
    $smtpuser = ""; //SMTP服务器的用户帐号
    $smtppass = ""; //SMTP服务器的用户密码
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); 
    //这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
    $smtpemailto = $email;
    $smtpemailfrom = $smtpusermail;
    $emailsubject = "Helloweba.com - 找回密码";
    $emailbody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码
（按钮24小时内有效）。<br/><a href='".$url."'target='_blank'>".$url."</a>";
    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
return $rs;
}
?>