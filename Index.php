 <?php
            $x = 21;
            $y = 8;



            function my_test(){
                global $x,$y;
                $y = $x + $y;
            }
            function my_test_two(){
                static $z = 0;
                echo $z."\n";
                $z++;
            }

            my_test();
            echo $y ."\n";

            my_test_two();
            my_test_two();
            my_test_two();
            echo $GLOBALS['y'];
 ?>


