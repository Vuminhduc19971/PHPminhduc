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
<h1>Xóa 1 session</h1>


<?php
//tạo session
$_SESSION["user_name"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";
$location = "hà nội";
$_SESSION["user_location"] = $location;

//xem tất cả các session đang hoạt động

echo"<br>In ra các session trước khi được sửa";
echo"<pre>";
print_r($_SESSION);
echo "</pre>";


// Hủy toàn bộ session trong PHP
session_unset();
session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>