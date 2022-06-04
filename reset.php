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
            if(time()-$row['getpasstime']>24*60*60)
            { 
                $msg = '該鏈接已過期！'; 
            }
            else
            { //重置密碼... 
                $msg = '請重新設置密碼，顯示重置密碼表單，<br/>這裏只是演示，略過。'; 
            } 
        }else
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
