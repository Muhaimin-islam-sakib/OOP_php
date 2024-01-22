<?php
// Access modifiers
// Access modifiers control the visibility of class properties and methods/

class Fruit{
    public $color;     // Can be accessed anywhere
    protected $taste;  // Can be accessed within this class and derived classes
    private $origin;   // Can be accessed only within this class


public function setTaste($taste){
    $this-> taste =$taste;
    }
public function setOrigin($origin){
    $this->origin = $origin;
}
public function describe(){
    echo "This fruit is " .$this->color . " and taste" . $this->taste . " from " . $this->origin . ".\n";
    }
}
class Apple extends Fruit{
    public function revealTaste(){
        return $this->taste; //Allowed because $taste is protected
    }
}

$apple = new Apple();
$apple->color = "red";
$apple->setOrigin("Washington");

$apple->describe();
echo $apple->revealTaste();