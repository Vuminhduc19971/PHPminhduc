<?php
//Bắt buộc phần khởi tạo session
session_start();
?>








<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

    <h1>Tao sesion trong php</h1>

    <?php
    //$_SESSION LÀ 1 mảng

    $_SESSION["user_name"]="admin";
    $_SESSION["user_email"]="admin@gmail.com";
        $location  ="Hà Nội";
        $_SESSION["user_location"]=$location;




        //xem tất cá các location đang hoạt động
    echo"<pre>";
    print_r($_SESSION);
    echo "</pre>";


    ?>
</body>
</html>






