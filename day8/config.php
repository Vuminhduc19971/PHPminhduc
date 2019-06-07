<?php
define("SEVERNAME","localhost");
define("Username","root");
define("Password","");
define("DBNAME","localhost");


$connection = mysqli_connect(SEVERNAME,Username,Password,DBNAME);

if(!$connection)
{
    die("Ket noi csdl loi :".mysqli_connect_error());
}
echo 'Ket noi thanh cong';

?>