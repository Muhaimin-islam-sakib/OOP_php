<?php 

// class OSTAD{
//     public function __construct($num1,$num2)
//     {
//         echo $num1+$num2;
//     }
// }

// new OSTAD(3,4);

class car{
    public $name;
    public $model;
    public $year;

    public function __construct($nameValue,$modelValue,$yearValue){
        $this->name=$nameValue;
        $this->model=$modelValue;
        $this->year=$yearValue;
    }

    public function Mycar(){
        echo "My car name is {$this->name}, model is $this->model & the year is $this->year".PHP_EOL;;
    }
    public function Mycar1(){
        echo "My car name is {$this->name}, model is $this->model & the year is $this->year".PHP_EOL;
    }
    public function Mycar2(){
        echo "My car name is {$this->name}, model is $this->model & the year is $this->year".PHP_EOL;
    }

}

$CarObj = new Car("Toyota","Allion","2022\n");
$CarObj->Mycar();
$CarObj = new Car("BMW","7Series","2024\n");
$CarObj->Mycar1();
$CarObj = new Car("lexus","s680","2019\n");
$CarObj->Mycar2();

//==================================================================================

// class car{
   
//     public function Mycar($name,$model,$year){
//         echo "My car name is $name model is $model & the year is $year";
//     }
// }

// $CarObj = new car();
// $CarObj->Mycar("Toyota","Corolla","2014");