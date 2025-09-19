<?php
$players = ["Pedri", "Yamal", "Gavi", "Raphinha", "Lewandowski", "Cubarsi"];

foreach ($players as $player) :
    if($player === "Raphinha")
        break;
    echo $player . "<br>";
endforeach;

echo "########## <br>";

foreach ($players as $player) :
    if($player === "Raphinha")
        continue;
    echo $player . "<br>";
endforeach;