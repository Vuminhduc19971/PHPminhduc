<?php
class ClassicPhone{
    public function  callVoice() {
        echo "<br>".__METHOD__;
    }
    public function receiveVoice(){
        echo "<br>".__METHOD__;
    }

}
/**
 * Khai báo trait
 * Trait Ipod
 */
trait Ipod{
    public  function listenMusic(){
        echo "<br>".__METHOD__;
    }
}
trait  Radio{

    public function listenRadio(){
        echo "<br>".__METHOD__;
    }
}
trait Computer{
    public  function sendEmail(){
        echo "<br>".__METHOD__;
    }
    public  function  playGame(){
        echo "<br>".__METHOD__;
    }
    public  function  worldOfice(){
        echo "<br>".__METHOD__;
    }
}
class Smartphone extends ClassicPhone{
    /**
     * Nhúng trait vào trong class
     * để sử dụng đa kế thừa
     */
    use Ipod,Radio,Computer;
}
/**
* Khởi tạo đối tượng smartphone
*/
$samsung = new Smartphone();
$samsung->callVoice();
$samsung->listenMusic();
$samsung->listenRadio();
$samsung->receiveVoice();
$samsung->worldOfice();