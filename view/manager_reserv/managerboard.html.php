
<main class="">
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section class="flex jcc aic">
        <div class="boxes flex wrap jc-se aic">
            <div class="boxe1 flex column jc-se">
                <span> <?= $carsDispo[0]['carsDispo'] ?> </span>
                <p> Voitures disponibles</p>
            </div>
            <div class="boxe1 flex column jc-se">
                <span> <?= $trucksDispo[0]['trucksDispo'] ?> </span>
                <p> Camions disponibles</p>
            </div>
            <div class="boxe1 flex column jc-se">
                <span> <?= $carsLocated[0]['carsLocated'] ?> </span>
                <p> Voitures en Location dans la journée </p>
            </div>
            <div class="boxe1 flex column jc-se">
                <span> <?= $nbrReservEnCours[0]['nbrReservEnCours'] ?> </span>
                <p> Réservations en cours de la journée </p>
            </div>
            <div class="boxe1 flex column jc-se">
                <span> 0 </span>
                <p> Réservations annulées dans la journée </p>
            </div>
            <div class="boxe1 flex column jc-se">
                <span> 0 </span>
                <p> Véhicules à rendre dans la journée </p>
            </div>
        </div>

        <!-- <div>
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
        </div> -->
    </section>
</main>