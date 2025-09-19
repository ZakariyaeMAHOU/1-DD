<?php
function one() {
    return "One from Function";
}
// echo one();

$fct = "one";
// echo $fct();

if (function_exists($fct)) {
    echo $fct();
}

echo strlen("Zakaria");//7