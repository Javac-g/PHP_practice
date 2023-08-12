<?php

class Test{
    public $str;

    public function __construct($str){
        $this -> str = $str;
    }
    public function test_1(){
        echo $this->str. "] length: ".strlen($this->str)."\n";
        echo $this->str . "] words: " .str_word_count($this->str)."\n";
        echo $this->str . "] reverse: " .strrev($this->str)."\n";
    }
    public function test_2($str,$text){
        echo strpos($str,$text)."\n";
    }
    public function test_3($strrem,$strnew,$text){
        echo str_replace($strrem,$strnew,$text)."\n";
    }

}
$myTest = new Test("hello world");
$myTest->test_1();
$myTest->test_2("hello my friend","my");
$myTest->test_3("world","Max","hello world");
?>