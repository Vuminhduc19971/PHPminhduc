<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Lambda là hàm không có tên</h1>
<?php
function hello($name){
    echo"<br>Hello ".$name;
}
hello ("function");


/*
     * Có những hàm chỉ cần sử dụng duy nhất 1 lần
     * Khi mình khai báo và gán 1 cái lambda cho 1 biến thì cần kết thúc lambda bằng dấu ;
     */

$hello= function(){
     return 'Hello World';
};

/**
 * Gọi lambda qua biến
 *
 * $bien("truyền vào tham số nếu có")
 */
echo $hello();


/**
 * CALLBACK
 * Khi mà thực hiện xong  1 hành động  mới cho phép 1 hành động khác chạy ngay đó
 * thì người ta gọi cái hành động chạy phía sau là call back
 * @param $country
 * tham số truyền vào hàm này là bắt buộc phải là 1 lambda đóng vai trò callback của hàm showMessage()
 */

function showMesage($coutry){
    echo "<br> Xin Chào" .$coutry();
}
/**
 * function (){
return "Korea";
}
 * đóng vài trò là giá trị truyền vào và nó là 1 lambda
 */
showMesage(function (){
    return "lambda truyền ở dạng callback";
});

//2biến global
$city="hà nội";
$coutry="Việt Nam";


$go=function ($vehice) use ($city,$coutry){
 echo "<br>Go to travel city"  .$city."country".$coutry."by" .$vehice;
};
$go=("moto");

/**
 * Ví dụ tương tự closure
 */
$go1=function ($vehice,$city,$coutry)
{
    echo "<br>Go to travel city"  .$city."country".$coutry."by" .$vehice;
};
//gọi hàm
$go1("motor",$city,$coutry);

/**
 * Closure sử dụng biến global khi mà khai báo closure
 * Còn thằng truyền tham số sẽ truyền vào khi gọi hàm
 * khi mà tách quá trình khai báo clousure
 * và sử dụng closure ra 2 file khác nhau
 */




//$city="HA NOI";
//
//$go=function() use ($city){
//    echo "GO $city";
//};
//$go();


?>
</body>
</html>