<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des marques </h1>
            <form method="post" action="<?=WEBROOT?>" class="form2 flex jc-sb btn-add">
                <input type="text" name="nom_marque" id="" placeholder="Nom de la marque">
                <input type="hidden" name="controller" value="admin">
                <button type="submit" name="action" value="addBrand"> Ajouter </button>
            </form>
        </div>
        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Identifiant </th>
                    <th class="th1"> Nom </th>
                    <th class="th1"> Actions </th>
                </tr>
                <?php foreach ($brandNames as $brandName):?>
                <tr class="tr1">
                    <td class="td1"> <?= $brandName["id_marque"] ?> </td>
                    <td class="td1"> <?= $brandName["nom_marque"] ?> </td>
                    <td class="td1 details"> <a href=""> Voir plus... </a> </td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
    </section>
</main>
