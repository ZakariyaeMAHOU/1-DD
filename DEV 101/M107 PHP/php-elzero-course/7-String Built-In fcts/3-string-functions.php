<?php
    // implode(Separator[Optional], Array[Required])
    $friends = ["Ahmed", "Osama", "Ali", "Salem"];
    echo implode("@@", $friends) . "<br>";// Ahmed@@Osama@@Ali@@Salem

    // explode(Separator[Required], String[Required], Limit[Optional])
    $str = "Elzero Web School Is Cool";
    echo "<pre>";
    print_r(explode("I", $str)); // [Elzero, Web, School, Is, Cool]
    echo "</pre>";
    
    echo str_shuffle("Elzero") . "<br>"; // String shuffle => (نتيجة عشوائية مثل: oEelzr)
    echo strrev("Elzero") . "<br>"; // String reverse => orezlE

    echo strlen("   Elzero  ") . "<br>"; // String length with spaces => 11
    echo strlen(trim("   Elzero  ")) . "<br>"; // String length after trim => 6

    echo trim("#@@Elzero@@@###", "@#") . "<br>"; // Elzero

    echo rtrim("#@@Elzero@@@###", "#@") . "<br>";// #@@Elzero
    echo ltrim("#@@Elzero@@@###", "#@") . "<br>";// Elzero@@@###