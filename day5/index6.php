<?php
  

  class Test{

      /**
     * Những thuộc tính được khai báo giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * @var int
     */
    public $a = 5;

    protected $b =7;


    private $c= 8;

  

  public function getC() {
      echo "<br>" .__METHOD__. " " .$this->c;
  
}
  }

 /**
     * Chỉ có thể truy cập vào các phương thức hay các thuộc tính
     * có giới hạn truy cập private trong chính bản thân class đó
     */
  $t=new Test();
  $t->getC();

  ?>