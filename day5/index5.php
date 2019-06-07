<?php
  

  class Test{
    public $a = 5;

    protected $b =7;


    private $c= 8;

  }
 class Test1 extends Test{
    public function truycpthuoctinhpubliccha(){
        echo "<br>" .__METHOD__. " " .$this->a;
    }


      // chỉ Có thể truy cập vào thuộc tính hoặc phương thức có giới hạn là protected
        // từ các class kế thừa của class cha
        // không thể truy cập từ bên ngoài class cha hoặc class kế thừa từ class cha 

    public function truycapthuoctinhprotectedcha(){

        echo "<br>" .__METHOD__. " " .$this->b;// METHOD dùng để in

    }
    public function truycapthuoctinhprivatecha(){
        echo "<br>" .__METHOD__. "" .$this->c;
    }
}


$t1= new Test1();
$t1->truycpthuoctinhpubliccha();
$t1->truycapthuoctinhprotectedcha();
$t1->truycapthuoctinhprivatecha();
    





?>