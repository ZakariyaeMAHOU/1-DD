<?php
/*
    Control Structure
    - Ternary Operator => Short If
*/
// Condition ? True : False;
$a = 10;
//normal
if ($a > 8) {
    echo "Good";
} else {
    echo "Bad";
}
echo '<br>';
//short
echo $a > 8 ? "Good" : "Bad";
echo '<br>';


//Advence practice
    //normal
    echo "I Love PHP Because Its A ";
    if ($a > 8) {
        echo "Good";
    } else {
        echo "Bad";
    }
    echo " Language";
    echo '<br>';
    //short
        // 1
        echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";
        echo '<br>';
        // 2
        $result = $a > 8 ? "Good" : "Bad";
        echo "I Love PHP Because Its A $result Language";