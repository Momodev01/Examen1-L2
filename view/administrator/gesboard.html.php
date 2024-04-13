
<main class="">
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="boxs flex jc-se aic">
            <div class="box1 flex column jc-se">
                <span> <?= $cars[0]['cars'] ?> </span>
                <p> Voitures </p>
            </div>
            <div class="box1 flex column jc-se">
                <span> <?= $trucks[0]['trucks'] ?> </span>
                <p> Camions </p>
            </div>
            <div class="box1 flex column jc-se">
                <span> <?= $brands[0]['brands'] ?> </span>
                <p> Marques </p>
            </div>
            <div class="box1 flex column jc-se">
                <span> <?= $models[0]['models'] ?> </span>
                <p> Modèles </p>
            </div>
        </div>

        <div>
        <table class="table1">
            <tr class="tr1">
                <th class="th1"> Marques </th>
                <th class="th1"> Modèles </th>
                <th class="th1"> Type </th>
                <th class="th1"> Catégorie </th>
            </tr>
            <?php foreach ($vehicules as $vehicule):?>
            <tr class="tr1">
                <td class="td1"> <?= $vehicule["nom_marque"] ?> </td>
                <td class="td1"> <?= $vehicule["nom_modele"] ?> </td>
                <td class="td1"> <?= $vehicule["nom_type_vehicule"] ?> </td>
                <td class="td1"> <?= $vehicule["nom_categorie"] ?> </td>
            </tr>
            <?php endforeach?>
        </table>
        </div>
    </section>
</main>