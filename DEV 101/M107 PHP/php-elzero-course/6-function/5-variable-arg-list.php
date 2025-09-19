<?php

    /*
        Function
        - Variable Arguments List
        --- func_num_args()
        --- func_get_arg(index)
        --- func_get_args()

        Spread Syntax In JS
    */

    function calculate(...$nums) {
        echo "Number Of Arguments: " . func_num_args() . "<br>";
        echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
        print_r(func_get_args());
        $result = 0;
        foreach (func_get_args() as $arg) :
            $result += $arg;
        endforeach;
        echo "<br>" . $result . "<br>";
        
        echo "<br>########################<br><br>";

        echo "Number Of Arguments: " . sizeof($nums) . "<br>";
        echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
        print_r($nums);
        $result = 0;
        foreach ($nums as $num) :
            $result += $num;
        endforeach;
        echo "<br>" . $result . "<br>";
    }

    calculate(10, 20, 50, 30, 40, 50, 100);