<?php
 class Caster{
     public $num;
     public $str;

     public function __construct($num,$str){
         $this->num = $num;
         $this->str = $str;
     }
     public function to_int_cast($str){
         $this->num = (int)$str;
         $this->num = intval($str);
         echo var_dump($this->num)."\n";
     }
     public function to_str_cast($num){
         $this->str = (String)$num;
         echo var_dump($this->str)."\n";
     }
 }
 $myCaster = new Caster(123,"543");
 $myCaster->to_str_cast(333);
 $myCaster->to_int_cast("222");

 
