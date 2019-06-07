<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>form HTML</h1>
<?php   
if(isset($_GET)&& !empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>
<pre>
   $_GET gửi dữ liệu đi qua URL
   ví dụ mặc định http://localhost/1901ephp1/day3/1.senddata/get.php
   khi form method ="get" gửi dữ liệu đi:
    http://localhost/1901ephp1/day3/1.senddata/get.php?username=aaa&password=111&submit=%C4%90%C4%83ng+k%C3%BD
    lúc này php sẽ đưa các tên của ô input trong form và giá trị của chúng
    lên trên query string của URL

</pre>
<form name="register" action="" method="get">

  <div>
      <label>username</label>
    <input type="text" name="username" value="" placeholder="nhập tài khoản">
</div>

<div>
    <label>password</label>
    <input type="text" name="password" value="" placeholder="nhập mật khẩu">
</div>
<div>
<button type="submit" value="Đăng Ký">Đăng Nhập</button>
  </div>
</html>