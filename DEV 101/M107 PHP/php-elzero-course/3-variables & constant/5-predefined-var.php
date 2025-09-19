<?php

    /*
        Pre-Defined Variables
        
        Search
        - PHP Pre-Defined Variables
    */

    // echo '<pre>';
    // print_r($_SERVER);
    // echo $_SERVER["HTTP_CONNECTION"];
    // echo '</pre>';

    // echo $_GET["username"];
    echo $_POST["username"];

?>

<!-- <form action="" method="get">
    <input type="text" name="username">
    <input type="submit" value="Send">
</form> -->
<form action="" method="post">
    <input type="text" name="username" value="user">
    <input type="submit" value="Send">
</form>