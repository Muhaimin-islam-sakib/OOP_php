<?php 

class INDEX{
    public $name = "PHP Batch\n";

    public function AddTwo($num1,$num2){
        echo $num1+$num2;
    }
}
$obj=new INDEX();
// $obj->AddTwo(2,3);

echo $obj->name;

class OSTAD{
    public $name = "Laravel";

    public function demo(){
        echo $this->name;
    }
}
$obj=new OSTAD();
// $obj->AddTwo(2,3);

echo $obj->demo();