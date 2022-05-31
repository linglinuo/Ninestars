<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $wish = $_POST['wish'];
    $today = date('Y/m/d');

    include("mysql_connect.inc.php");
    //新增資料進資料庫語法
    $sql = "UPDATE wish SET wish_content='$wish', wish_time='$today' WHERE member_name='$name';";
        
    if(mysqli_query($link,$sql))
    {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=許願池管理.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
    }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}
?>