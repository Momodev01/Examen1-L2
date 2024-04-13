<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des voitures </h1>
            <button> <a href="<? path('trucks', 'newCar') ?>"> Ajouter </a></button>

        </div>
        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Marques </th>
                    <th class="th1"> Modèles </th>
                    <th class="th1"> Immatriculation </th>
                    <th class="th1"> Kilométrage </th>
                    <th class="th1"> Options </th>
                    <th class="th1"> Actions </th>
                </tr>
                <?php foreach ($carsList as $car):?>
                <tr class="tr1">
                    <td class="td1"> <?= $car["nom_marque"] ?> </td>
                    <td class="td1"> <?= $car["nom_modele"] ?> </td>
                    <td class="td1"> <?= $car["immatriculation"] ?> </td>
                    <td class="td1"> <?= $car["kilometrage"] ?> </td>
                    <td class="td1"> <?= $car["libelle_options"] ?> </td>
                    <td class="td1"> <a href=""> Modifier </a> </td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
        </section>
</main>