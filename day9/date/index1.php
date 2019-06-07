<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>Unix time stamp- Thời gian unix
Khái niệm quen thuộc trong hệ thống Unix và lập trình PHP
Thời gian Unix, là hệ thống nhằm diễn tả một điểm trục thời gian,
theo trục thời gian nó sử dụng số giây kế để xác định thời điểm, với điểm gốc
tờ thời điểm 00.00.00 ngày 1/1/1970(UTC)

    Ví dụ lúc 00.00.00 - 1/1/2017  có giá trị timestamp là 1483228800;
    Có nghĩa là tính từ 00.00.00-1/1/1970 đến 00.00.00-1/1/2017 là 1483228800 giây.

    Trong PHP sử dụng hàm time() để lấy timestamp hiện tại
    Để đổi thời giạn dạng timestamp  sang các định dạng ngày tháng khác dùng hàm date().
</pre>



<?php echo "<br> thời gian timestamp hiện tại:" .time()
?>

<?php

//Chuyển đổi thời gian Unix timestamp sang dạng đọc được

$timestamp =time();
echo"<br>Thời gian date hiện tại :". date("H:i:s d/m/Y", $timestamp) ;

?>
</body>
</html>