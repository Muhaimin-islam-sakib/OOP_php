<?php 

//static properties
/*
class Myclass{
    public static function JonDoe(){
        echo "My Name is Khan";
    }
}

$obj=new Myclass();
$obj->JonDoe();

Myclass:: JonDoe();
*/
//Accessing Static Properties Inside Class Methods

class MyClass{
    public static $Hero = "Jamil";
    public static function Cinema(){
        echo self::$Hero;
    }
}

$obj=new MyClass();
$obj->Cinema();    
