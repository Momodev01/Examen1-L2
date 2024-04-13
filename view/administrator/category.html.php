<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des catégories </h1>
            <button> <a href="<? path('trucks', 'newCategory') ?>"> Ajouter </a></button>
        </div>

        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Marque </th>
                    <th class="th1"> Modèle </th>
                    <th class="th1"> Catégorie </th>
                    <th class="th1"> Caution </th>
                    <th class="th1"> Actions </th>
                </tr>
                <?php foreach ($ctgList as $ctg):?>
                <tr class="tr1">
                    <td class="td1"> <?= $ctg["nom_marque"] ?> </td>
                    <td class="td1"> <?= $ctg["nom_modele"] ?> </td>
                    <td class="td1"> <?= $ctg["nom_categorie"] ?> </td>
                    <td class="td1"> <?= $ctg["caution_location"] ?> </td>
                    <td class="td1"> <a href=""> Modifier </a> </td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
    </section>
</main>