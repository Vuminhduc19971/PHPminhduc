<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    kiểu số trong php
</pre>
<?php
$a=10;
$b=5;
echo"<br>Tổng:" .($a+$b);
echo" <br>Hiệu" .($a-$b);
echo"<br>Tích" .($a*$b);
echo"<br>Thương" .($a/$b);
echo"<br>Chia lấy dư".($a%$b);
echo '<br>var_dump();được sử dụng để debug xem kiểu dữ liệu và giá trị của biến <br>';
var_dump($a);
echo'<br>';
var_dump($b);
?>
</body>
</html>