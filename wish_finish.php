<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$today = date('Y/m/d');
$id = $_SESSION['Name'];
$message = $_POST['message'];

$sql2 = "SELECT * FROM wish WHERE member_name = '$id'";
$result = mysqli_query($link, $sql2);
$row = mysqli_fetch_row($result);


if($id != null && $message != null)
{
        if($row == null){
                //新增資料進資料庫語法
                $sql = "insert into wish (member_name, wish_content, wish_time) values ('$id', '$message', '$today')";
                if(mysqli_query($link,$sql))
                {
                        echo '<meta http-equiv=REFRESH CONTENT=0;url=first.php#wish>';
                }
                else
                {
                        echo '新增失敗!';
                        echo '<meta http-equiv=REFRESH CONTENT=2;url=wish.php>';
                }
        }
        else{
                $sql3 = "UPDATE `wish` SET `member_name`='$id',`wish_content`='$message',`wish_time`='$today' WHERE `member_name`='$id'";
                if(mysqli_query($link,$sql3))
                {
                        echo '<meta http-equiv=REFRESH CONTENT=0;url=first.php#wish>';
                }
                else
                {
                        echo '新增失敗!';
                        echo '<meta http-equiv=REFRESH CONTENT=2;url=wish.php>';
                }
        }
        
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
}
?>