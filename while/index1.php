<?php
$i=100;
for($i=1;$i<=10;$i++){
    echo"<br>".$i;
}
$i=100;
while($i<=100){
echo"<br>".$i;
$i++;
}






/** 
*do...while sẽ chạy ít nhất 1 lần ngay cả khi điều kiện chạy vòng lặp là false
* từ 2 lần trở đi do....while mới check điều kiện là true thì chạy.
*
* for và while chỉ chạy điều kiện là true

*/

$i=100;
do{
 echo"<br>".$i;
 $i++;
}
while($i<=10);