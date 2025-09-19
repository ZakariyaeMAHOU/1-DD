<?php
/*
    Control Structure
    - Loop
    Foreach

    foreach ($array as $value) {
        echo $value . "<br>";
    }
    foreach ($array as $key => $value) {
        echo $value . "<br>";
    }
*/
$players = ["Pedri", "Yamal", "Gavi", "Raphinha"];

echo '<pre>';
print_r($players);
echo '</pre>';

foreach ($players as $player) {
    echo $player . "<br>";
}

$playersWithNumbers = ["Pedri" => 8, "Yamal" => 10, "Gavi" => 6, "Raphinha" => 11];
echo "<pre>";
print_r($playersWithNumbers);
echo "</pre>";

foreach($playersWithNumbers as $player => $number) :
    echo $player . " " . $number . "<br>";
endforeach;
