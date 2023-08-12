<?php
class Car{
    public $color,$model;

    function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a ".$this->color . " " .$this ->model."!"."\n";
    }

}
$myCar = new Car("black","Audi");
echo $myCar->message();
$myCar = new Car("red","Porshe");
echo $myCar->message();
?>
