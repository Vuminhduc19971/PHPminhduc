<?php

     class Hinhtron {
          public static $r;
          public static function datbankinh($r){
                // khi mà truy cập vào thuộc tính  hay phương thức không có từ khóa static
                //  thì ta sẽ dùng $this->tenthuocthinh và $this->tenphuongthuc
                //  khi mà truy cập vào thuộc tính hay phương thức có từ khóa static 
                //  thì dùng từ khóa self thay $this
                //  và sẽ viết lại là self::tenphuongthuc() và self::tenthuoctinh();


            self::$r=$r;
            return self::$r;
          }
          public static function tinhchuvi($r){
              $cv=$r*2*3.14;
              return $cv;
          }
          public static function tinhdientich($r){
              $s=$r*$r*3.14;
              return $s;
          }
        }
        /**
 * khi khởi tạo đối tượng thông thường
 * $doituong = new TenClass();
 * gọi đến thuộc tính hay phương thức của class
 * thì sẽ phải gọi qua đối tượng
 * $doituong->tenthuoctinh;
 * $doituong->tenphuongthuc();
 */
/**
 * khi class có các thuộc tính hay phương thức có từ khoá static
 * thì không cần khởi tạo đối tượng bằng từ khoá new
 * gọi đến thuộc tính statuc bằng cách
 * TenClass::TenThuocTinh;
 * gọi đến phương thức static bằng cách
 * TenClass::TenPhuongThuc();
 *
 *
 */

          $bankinh = Hinhtron::datbankinh(5);
          echo"<br> bankinh" .$bankinh;
          $chuvi = Hinhtron::tinhchuvi(5);
          echo"<br>" .$chuvi;
          $dientich = Hinhtron::tinhdientich(5);
            echo "<br> dientich ". $dientich;


     





?>