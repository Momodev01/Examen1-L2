<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des camions </h1>
            <button> <a href="<?= path('admin', 'newCar') ?>"> Ajouter </a></button>
        </div>
        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Marques </th>
                    <th class="th1"> Modèles </th>
                    <th class="th1"> Immatriculation </th>
                    <th class="th1"> Volume </th>
                    <th class="th1"> Charge Max </th>
                    <th class="th1"> Actions </th>
                    <tr class="tr1">
                </tr>
                <?php foreach ($trucksList as $truck):?>
                    <td class="td1"> <?= $truck["nom_marque"] ?> </td>
                    <td class="td1"> <?= $truck["nom_modele"] ?> </td>
                    <td class="td1"> <?= $truck["immatriculation"] ?> </td>
                    <td class="td1"> <?= $truck["volume"] ?> m³ </td>
                    <td class="td1"> <?= $truck["charge_max"] ?> kg </td>
                    <td class="td1 details"> <a href=""> Voir plus... </a> </td>
                </tr>
                <?php endforeach?>
            </table>
            </div>
        </section>
</main>