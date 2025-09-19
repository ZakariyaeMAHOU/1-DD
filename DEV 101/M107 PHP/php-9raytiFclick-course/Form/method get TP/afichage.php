
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
    <div class="container">
    <h1>Affichage des données saisies</h1>
    <ul>
        <li>Nom: <?php echo $nom ?></li>
        <li>Prénom: <?php echo $prenom ?></li>
        <li>Sexe: <?php echo $sexe ?></li>
        <li>Cours:
            <ul>
                <?php
                if(isset($cours))
                    foreach ($cours as $v)
                        echo "<li>$v</li>";
                ?>
            </ul>
        </li>
    </ul>
    <a href="form.php">Essayer un nouveau</a>
    </div>
</body>
</html>
