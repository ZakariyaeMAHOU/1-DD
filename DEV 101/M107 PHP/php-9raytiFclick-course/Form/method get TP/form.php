<form action="afichage.php" method="get">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom"><br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom"><br>
    <label>Séxe</label>
    <select name="sexe" id="sexe">
        <option value="M">Masculin</option>
        <option value="F">Feminin</option>
    </select><br>
    <label for="cours">Cours</label>
    <select name="cours[]" id="cours" multiple>
        <option value="simple">Simple</option>
        <option value="moyen">Moyen</option>
        <option value="difficile">Difficile</option>
    </select><br>
    <button type="submit">Submit</button>
</form>