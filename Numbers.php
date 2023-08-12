<?php
    class Numbers_test{
        public $x;

        public function __construct($x){
            $this ->x = $x;
        }
        public  function test_1(){
            echo is_int($this->x)."\n";
            echo var_dump($this->x)."\n";
            echo var_dump(is_int($this->x))."\n";
            $xyz = acos(8);
            echo var_dump(is_nan($xyz))."\n";
        }
        public function test_2(){

            echo var_dump(is_numeric(23)) . "\n";

            echo var_dump(is_numeric("52")) . "\n";

            echo var_dump(is_numeric("hi")) . "\n";
        }

    }
$numTest = new Numbers_test(9);
    $numTest->test_1();
    $numTest->test_2();