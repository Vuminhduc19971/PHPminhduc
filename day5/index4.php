<?php
  

  class Test{
    public $a = 5;

    protected $b =7;


    private $c= 8;

  }
  $t =new Test();


  echo "<br>" . $t->a;

//truy cập vào thuộc tính có giới hạn truy cập là private
  echo "<br>" . $t->c; 


?>