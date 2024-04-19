
<main class="">
    <?php
        require_once('../view/partials/header.html.php');
    ?>
<fieldset>
    <legend class="form1Leg">Ajouter une voiture</legend>
    <form class="form1 flex column jc-se aic" method="post" action="<?=WEBROOT?>">
        <select name="classe" id="class">
            <?php foreach ($type_vehicule as $tv): ?>
                <option value="<?=$tv['id_type_vehicule'];?>"> <?=$tv['nom_type_vehicule']?> </option>
            <?php endforeach ?>
        </select>
        <div class="container">
            <label for="libelle">Marque :</label>
            <input type="text" id="libelle" name="libelle">
        </div>
        <div class="container">
            <label for="model"> Modèle :</label>
            <input type="text" id="model" name="nom_modele">
        </div>
        <select name="classe" id="class">
            <?php foreach ($ctgList as $ctg): ?>
                <option value="<?=$ctg['id_categorie'];?>"> <?=$ctg['nom_categorie']?> </option>
            <?php endforeach ?>
        </select>
        <div class="container">
            <label for="stock"> Kilométrage :</label>
            <input type="number" id="stock" name="stock">
        </div>
        <div class="container">
            <label for="annee"> Année de circulation :</label>
            <input type="text" id="annee" name="annee_circulation">
        </div>
        <div class="container">
            <label for="options"> Options :</label>
            <input type="text" id="options" name="libelle_options">
        </div>
        <div class="container">
            <label for="volume"> Volume :</label>
            <input type="number" id="volume" name="volume">
        </div>
        <div class="container">
            <label for="charge"> Charge max :</label>
            <input type="number" id="charge" name="charge_max">
        </div>
        <div class="container">
            <label for="longueur"> Longueur :</label>
            <input type="number" id="longueur" name="longueur">
        </div>
        <div class="container">
            <label for="largeur"> Largeur :</label>
            <input type="number" id="largeur" name="largeur">
        </div>
        <div class="container">
            <label for="hauteur"> Hauteur :</label>
            <input type="number" id="hauteur" name="hauteur">
        </div>
        <div class="container">
            <button type="reset"> <a href="<?=path("admin", "cars")?>"> Annuler </a> </button>
            <input type="hidden" name="controller" value="admin">
            <button type="submit" name="action" value="addVehicule"> Enregistrer </button>
        </div>
    </form>
</fieldset>
</main>