<?php
/*
    Control Structure
    - Loop
    While
*/
$i = 1;
while ($i <= 3) {
    echo "$i<br>";
    $i++;
}
//alternet syntax
$a = 1;
while ($a <= 3) :
    echo "$a<br>";
    $a++;
endwhile;