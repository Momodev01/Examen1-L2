<main>
    <?php
        require_once('../view/partials/header.html.php');
    ?>
    <section>
        <div class="titleH1 flex jc-sb aic">
            <h1> Liste des clients </h1>
            <button> <a href="<? path('respo', 'newCustomer') ?>"> Ajouter </a></button>
        </div>
        <div>
            <table class="table1">
                <tr class="tr1">
                    <th class="th1"> Prénom </th>
                    <th class="th1"> Nom </th>
                    <th class="th1"> Adresse </th>
                    <th class="th1"> Actions </th>
                    <tr class="tr1">
                </tr>
                <?php foreach ($customers as $customer):?>
                    <td class="td1"> <?= $customer["prenom_user"] ?> </td>
                    <td class="td1"> <?= $customer["nom_user"] ?> </td>
                    <td class="td1"> <?= $customer["rue"],', ',$customer["ville"] ?> </td>
                    <td class="td1 details"> <a href=""> Voir plus... </a> </td>
                </tr>
                <?php endforeach?>
            </table>
            </div>
        </section>
</main>