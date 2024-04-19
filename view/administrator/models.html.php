<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des modèles </h1>
            <form method="post" action="<?=WEBROOT?>" class="form2 flex jc-sb btn-add">
                <input type="text" name="nom_modele" id="" placeholder="Nom du modèle">
                <input type="hidden" name="controller" value="admin">
                <button type="submit" name="action" value="addModele"> Ajouter </button>
            </form>
        </div>
        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Identifiant </th>
                    <th class="th1"> Nom </th>
                    <th class="th1"> Actions </th>
                </tr>
                <?php foreach ($ModelNames as $ModelName):?>
                <tr class="tr1">
                    <td class="td1"> <?= $ModelName["id_modele"] ?> </td>
                    <td class="td1"> <?= $ModelName["nom_modele"] ?> </td>
                    <td class="td1 details"> <a href=""> Voir plus... </a> </td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
    </section>
</main>