<?php

    // chunk_split(String[Required], Length[Optional], End[Optional])
    echo chunk_split("Elzero Web School", 3, "@"); //Elz@ero@ We@b S@cho@ol@
    echo '<br>';

    // str_split(String[Required], Length[Optional])
    echo '<pre>';
    print_r(str_split("Elzero", 2)); // [El, ze, ro]
    echo '</pre>';
    
    // strip_tags(String[Required], Allowed[Optional])
    echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3>"); // <h3>Hello Elzero</h3>
    echo '<br>';