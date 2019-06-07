<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>mảng đa chiều chính là mảng lồng mảng</h1>

<h1>Mảng 2 chiều</h1>
<?php   
$class9a=array("an","huong","son","linh");
$class9b=array("an1","huong1","son1","linh1");
$class9c=array("an2","huong2","son2","linh2");
$class9d=array("an3","huong3","son3","linh3");


$dinhtienhoang=array($class9a,$class9b,$class9c,$class9d);
echo"<pre>";
print_r($dinhtienhoang);
echo"</pre>";


if(is-array($dinhtienhoang)&& !empty($dinhtienhoang)){
    foreach($dinhtienhoang as $key_class => $class){
        echo "<br>-".$class['name_class'];
        if(is_array($class["students"]) && !empty($class["student"])) {
            foreach($class["students"] as $key_student => $student) {
                echo "<br> -- " . $student;
            }
        }
    }
}


?>
</body>
</html>