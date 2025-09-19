
<?php
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$sexe = $_GET["sexe"];
$cours = $_GET["cours"];
// echo $nom . " " . $prenom . " " . $sexe . " " . $cours;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table, tr, td {
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Les données</h1>
    <a href="form.php">Essayer un nouveau</a>
    <table>
    <tr>
        <td>Nom</td>
        <td><?php echo $nom ?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?php echo $prenom ?></td>
    </tr>
    <tr>
        <td>Sexe</td>
        <td><?php echo $sexe ?></td>
    </tr>
    <tr>
        <td>Cours</td>
        <td><ul><?php
            if(isset($cours))
            foreach ($cours as $v)
                echo "<li>$v</li>";
                ?></ul>></td>
    </tr>
    </table>
</body>
</html>