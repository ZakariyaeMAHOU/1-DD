<?php
$lign = $_POST['lign'];
$col = $_POST['col'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #000000;
            color: lawngreen;
        }
        form {
            margin: 10px;
        }
        tr, td {
            border: 1px solid lawngreen;
            width: 40px;
            height: 40px;
            text-align: center;
            font-weight: bolder;
        }
        td:first-child,
        tr:first-child {
            background-color: lawngreen;
            color: #000000;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label for="lign">Nombre de lignes</label>
    <input type="number" name="lign" id="lign">
    <label for="col">Nombre de colomnes</label>
    <input type="number" name="col" id="col">
    <button type="submit">Aficher</button>
</form>
<table>
    <tr>
        <?php
        // if($col > 9){
        //     $col = 9;
        // }
            for($i = 1; $i <= $col; $i++){
                echo "<td>" . $i . "</td>";
            }
        ?>
    </tr>
    <?php
    // if($lign > 9){
    //     $lign = 9;
    // }
    // if($col > 9){
    //     $col = 9;
    // }
    for($i = 2; $i <= $lign; $i++){
        echo "<tr>";
        for($j = 1; $j <= $col; $j++){
            echo "<td>" . $i*$j . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>