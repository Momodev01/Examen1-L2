<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des réservations </h1>
            <!-- <button> <a href="<? path('trucks', 'newTruck') ?>"> Ajouter </a></button> -->
        </div>
        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Marque </th>
                    <th class="th1"> Modèle </th>
                    <th class="th1"> Catégorie </th>
                    <th class="th1"> Caution </th>
                    <th class="th1"> Etat </th>
                </tr>
                <?php foreach ($vehicules as $vehicule):?>
            <tr class="tr1">
                <td class="td1"> <?= $vehicule["nom_marque"] ?> </td>
                <td class="td1"> <?= $vehicule["nom_modele"] ?> </td>
                <td class="td1"> <?= $vehicule["nom_categorie"] ?> </td>
                <td class="td1"> <?= $vehicule["caution_location"] ?> </td>
                <td class="td1"> <?= $vehicule["etat_vehicule"] ?> </td>
            </tr>
            <?php endforeach?>
            </table>
            </div>
        </section>
</main>