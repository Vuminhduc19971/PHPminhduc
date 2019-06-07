<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
Mảng chứa danh sách các dữ liệu khác nhau chứa được nhiều giá trị
Các kiểu dữ liệu như số, chuỗi chỉ chứa được duy nhất 1 giá trị
Cấu trúc của mảng:
gồm 2 phần chính :key và value;
key được hiểu như 1 chỉ số
 value được hiểu như 1 giá trị
 Mình có 1 cái tủ đựng đồ.Mỗi ô tủ có 1 mã số thì cái key trong mảng chính
 là mã số đó còn cái chứa trong tủ thì sẽ là giá trị value
</pre>
    <?php
        $mang=array("Nguyen van a","Nguyen van b","Nguyen van c");
        //Lấy giá trị của mảng ra thông qua việc truy cập vào key của mảng
        echo"<br>" .$mang[0];
        echo"<br>" .$mang[1];
        echo"<br>" .$mang[2];
        echo "<pre>";
        print_r($mang);
        echo "</pre>";      

    //Thay đổi các phần tử trong mảng thông qua key
        $mnang[0]="123";
        $mang[1]="456";
        $mang[2]="789";

    //Lệnh in ra cấu trúc mảng trong php
    echo "<pre>";
    print_r($mang);
    echo"</pre>";   

    ?>


</body>
</html>


