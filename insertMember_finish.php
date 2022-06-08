<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$name = $_POST['m-name'];
$email = $_POST['m-email'];
$pwd = $_POST['m-pwd'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($name != null && $pwd != null)
{
        //新增資料進資料庫語法
        $sql = "insert into member (member_name, member_email, member_password, member_level) 
        values ('$name', '$email', '$pwd', '初級')";
        if(mysqli_query($link,$sql))
        {
            echo "新增成功";
            echo '<meta http-equiv=REFRESH CONTENT=0;url=manageMember.php>';
        }
        else
        {
            echo '新增失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=insertMember.php>';
        }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
}
?>