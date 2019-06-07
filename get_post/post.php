<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>form HTML</h1>
<?php   
if(isset($_POST)&& !empty($_POST)){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<pre>
    isset() được sử dụng để kiểm tra xem có sự tồn tại của biến trong hàm isset hay không
    nếu có tồn tại hàm trả về true không tồn tại trở về false &&  và thỏa các điều kiệ<nav>
        ||  hoặc tức là chỉ cần thoả 1 trong  các điều kiện
        $_POST khi gửi form đi và method="post" trong form
        và value là giá trị bên trong các ô input đó
</pre>
<form name="register" action="" method="post">

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