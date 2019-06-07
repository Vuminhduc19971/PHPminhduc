<?php
// khởi động session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Chỉnh sửa session trong PHP</h1>


<?php
//tạo session
$_SESSION['user_name']='admin';
//xem tất cả các session đang hoạt động

echo"<br>In ra các session trước khi được sửa";
echo"<pre>";
print_r($_SESSION);
echo "</pre>";


//Sủa session
$_SESSION['user_name']='mod';

//xem tất cac session có hoạt dộng không
echo "<br>In ra session sau khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>