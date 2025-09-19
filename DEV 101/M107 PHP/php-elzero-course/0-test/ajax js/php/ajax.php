<?php

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $lName = $_POST["lName"];
        $fName = $_POST["fName"];

        $fullName = $fName . " " .$lName;

        echo "Hello " . $fullName;
    }
?>