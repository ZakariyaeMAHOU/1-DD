<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["lang"] === "ar") {
        echo "مرحبا " . $_POST["username"];
    }
    elseif ($_POST["lang"] === "en") {
        echo "Hello " . $_POST["username"];
    }
    elseif ($_POST["lang"] === "fr") {
        echo "Bonjour " . $_POST["username"];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" id="username">
        <select name="lang" id="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="fr">Franch</option>
        </select>
        <input type="submit" value="send">
    </form>
</body>
</html>