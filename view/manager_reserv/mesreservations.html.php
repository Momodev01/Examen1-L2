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
                    <th class="th1"> Client </th>
                    <th class="th1"> Véhicule </th>
                    <th class="th1"> Date début </th>
                    <th class="th1"> Date fin </th>
                    <th class="th1"> Actions </th>
                </tr>
                <?php foreach ($reservations as $reservation):?>
                <tr class="tr1">
                    <td class="td1"> <?= $reservation["prenom_user"],' ',$reservation["nom_user"] ?> </td>
                    <td class="td1"> <?= $reservation["nom_marque"],' ',$reservation["nom_modele"] ?> </td>
                    <td class="td1"> <?= $reservation["date_debut_location"] ?> </td>
                    <td class="td1"> <?= $reservation["date_fin_location"] ?> </td>
                    <td class="td1 details"> <a href=""> Voir plus... </a> </td>
                </tr>
                <?php endforeach?>
            </table>
            </div>
        </section>
</main>