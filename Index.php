<html>
    <head>

    </head>
    <body>
        <?php
            $x = 21;
            $y = 8;

            echo "21 + 8 = " .( $x + $y);

            function my_test(){
                global $x,$y;
                $y = $x + $y;
            }
            function my_test_two(){
                static $z = 0;
                echo $z;
                $z++;
            }

            my_test();
            echo $y;
            echo "\n";
            my_test_two();
            my_test_two();
            my_test_two();


        ?>
    </body>

</html>

