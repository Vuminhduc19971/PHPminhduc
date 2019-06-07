<?php
   /**
 * Khai báo class trong php
 * Class Student
 */
     class Student {
  /**
     * Khai báo các thuộc tính ( properties ) của class
     * @var
     */
    public $name;

    public $age;

    public $location;

    public $point;




      /**
     * khai báo các phương thức ( method ) của class
     */
    /**
     * Hàm khởi tạo của class . hàm này sẽ chạy ngay khi khởi tạo đối tượng từ class
     * Student constructor.
     */

    public function __construct($name_param, $age_param, $location_param)
    {
        /**
         * trong các phương thức của class để gọi đến chính bản thân class
         * thì ta sử dụng $this
         */
        $this->name =$name_param;
        $this->age  = $age_param;
        $this->location = $location_param;
    }

        public function calculatePoint($point_arr_param){
            if(is_array($point_arr_param)&&!empty($point_arr_param)){
                $count = 0;
                $total= 0;
                foreach($point_arr_param as $key =>$value){
                        $total +=$value;
                        $count++;

                }
                $point=$total/$count;
                $this->$point=$point;


            }
            return false;


        }


     }
/**
 * khởi tạo đối tượng class
 */
 $name="Vu Minh Duc";
 $age=23;
 $location="Ha Noi";
 $duc =new Student($name,$age,$location);

 echo "<pre>";
print_r($duc);
echo "</pre>";


 $point= array(
    'JAVA'=>10,
    '.NET' =>8,
    'SQL'=>9,
    'PHP'=>7,

 );

 //GOI DEN PHUONG THUC CLASS
 $duc->calculatePoint($point);

 $cal_point = $duc->point;
 echo"diem trung binh la : " .$cal_point;

 echo "<pre>";
print_r($duc);
echo "</pre>";




?>