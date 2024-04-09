
<main class="">
    <header class="flex jc-sb aic">
        <div class="profil flex jc-se aic">
            <img src="../images/persona.png" alt="">
            <p> Momo Diallo </p>
        </div>
        <div class="role flex jcc aic">
            <p> Gestionnaire </p>
        </div>
    </header>
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
                <span> <?= $drivers[0]['drivers'] ?> </span>
                <p> Conducteurs </p>
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