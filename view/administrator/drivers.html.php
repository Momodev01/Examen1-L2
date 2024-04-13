<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des conducteurs </h1>
            <button> <a href="<? path('trucks', 'newDriver') ?>"> Ajouter </a></button>
        </div>
        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Nom </th>
                    <th class="th1"> Prenom </th>
                    <th class="th1"> Telephone </th>
                    <th class="th1"> Adresse </th>
                    <th class="th1"> Type permis </th>
                    <th class="th1"> Actions </th>
                </tr>
                <?php foreach ($driversList as $driver):?>
                <tr class="tr1">
                    <td class="td1"> <?= $driver["nom_conducteur"] ?> </td>
                    <td class="td1"> <?= $driver["prenom_conducteur"] ?> </td>
                    <td class="td1"> <?= $driver["tel_conducteur"] ?> </td>
                    <td class="td1"> <?= $driver["rue"],', ', $driver["ville"] ?> </td>
                    <td class="td1"> <?= $driver["type_permis"] ?> </td>
                    <td class="td1"> <a href=""> Modifier </a> </td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
    </section>
</main>