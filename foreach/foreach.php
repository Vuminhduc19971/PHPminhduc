<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
Mảng chứa danh sach các dữ liệu khác nhau chứa được giá trị
Các kiểu dữ liệu số ,chuỗi chỉ được duy nhất 1 giá trị
để khai báo mảng $mang=array('nguyenvana','nguyenvanb','nguyenvanc');
Cấu trúc của mảng
gồm 2 phần chính:key và value
key được coi là chỉ số
value được hiểu là 1 giá trị
Mình sẽ có 1 cái tủ đựng đồ.Mỗi ô tủ còn 1 mã số thì cái key trong mảng chính là mã số đó
còn cái chứa trong tủ thì sẽ là giá trị value
Key trong mảng tuần tự thì sẽ là giá trị value
key trong mảng tuần tự thì bắt đầu từ 0
</pre>


<?php
   $mang=array("nguyenvana","nguyenvanb","nguyenvanc");
   //lấy giá trị của mảng thông qua việc truy cập vào key mảng
   echo"<br>".$mang[0];
   echo"<br>".$mang[1];
   echo"<br>".$mang[2];
    echo "<pre>";
    print_r($mang);
    echo"</pre>";
//thay đổi giá trị của các phần tử trong mảng thông qua key của nó
    $mang[0]="123";
    $mang[1]="456";
    $mang[2]="789";


    echo"<br>" .$mang[0];
    
    echo"<br>" .$mang[1];
    
    
    echo"<br>" .$mang[2];

    //Lệnh in ra cấu trúc của mảng trong php
    echo"<pre>";
    print_r($mang);
    echo"</pre>";
    





?>
</body>
</html>