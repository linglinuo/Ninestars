<?php
    include("mysql_connect.inc.php");

    $token = stripslashes(trim($_GET['token'])); 
    $email = stripslashes(trim($_GET['email'])); 
    $sql = "select * from `member` where member_email='$email'"; 

    $query = mysqli_query($link,$sql); 
    $row = mysqli_fetch_array($query); 
    if($row)
    { 
        $mt = md5($row['member_name'].$row['member_password']); 
        if($mt==$token)
        { 
            $msg = '請重新設置密碼，顯示重置密碼表單，<br/>';
             
        }
        else
        { 
            $msg = '無效的鏈接'; 
        } 
    }
    else
    { 
    $msg = '錯誤的鏈接！'; 
    } 
    echo $msg;
?>
