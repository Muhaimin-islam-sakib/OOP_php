<?php 
//Inheritance

/*
class Father{
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

}
class Son extends Father{

}
$obj= new Son();
$obj->Print100();
*/

//Overwrite
/*
class Father{
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

}
class Son extends Father{
    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i <br/>";
        }
    }
}
$obj= new Son();
$obj->Print100();
*/

//Final Keyword
/*

final class Father{
    final public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

}
class Son extends Father{
    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i <br/>";
        }
    }
}
$obj= new Son();
$obj->Print100();

*/

//Abstract Classes

/*
abstract class Father{
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

}
class Son extends Father{
    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i <br/>";
        }
    }
}
$obj= new Son();
$obj->Print100();

*/

//Constructors and Inheritance
/*
class Father{
    public function __construct(){
        echo "Father Constructor\n";
    }
}

class Son extends Father{
    public function __construct(){
        parent:: __construct();
        echo "Son Constructor";
    }
}

new Son();
new Father();
*/

//parent Keyword:

/*

class Father {
    public function Abba(){
        echo "Hello From Father";
    }
}
class Son extends Father{
    public function Chele(){
    parent::Abba();
    }
}
$obj= new Son();
$obj->Chele();

*/

