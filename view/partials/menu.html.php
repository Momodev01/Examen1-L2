<?php
$currentPage = 'accueil'; // ou 'produits', 'contact', etc., selon la page
?>

<aside class="">
    <div class="logo">
    <?php if ($_SESSION["userConnect"]['id_role'] == 1): ?>
        <a href="<?=path('admin', 'dashboard')?>"> <img src="../images/logo.png" alt=""> </a>
    <?php endif ?>
    <?php if ($_SESSION["userConnect"]['id_role'] == 2): ?>
        <a href="<?=path('respo', 'managerboard')?>"> <img src="../images/logo.png" alt=""> </a>
    <?php endif ?>
    <?php if ($_SESSION["userConnect"]['id_role'] == 3): ?>
        <a href="<?=path('client', 'customerboard')?>"> <img src="../images/logo.png" alt=""> </a>
    <?php endif ?>
    </div>
    <div class="menu flex">
        <nav class="flex">
            <ul class="flex column jc-se aic">
            <?php if ($_SESSION["userConnect"]['id_role'] == 1): ?>
                <li> 
                    <img src="../images/grid_view.png" alt=""> 
                    <a href="<?=path('admin', 'dashboard')?>"> Tableau de bord </a> 
                </li>
                <li> 
                    <img src="../images/directions_car.png" alt=""> 
                    <a href="<?=path('admin', 'cars')?>"> Voitures </a> 
                </li>
                <li> 
                    <img src="../images/local_shipping.png" alt=""> 
                    <a href="<?=path('admin', 'trucks')?>"> Camions </a> 
                </li>
                <li> 
                    <img src="../images/category.png" alt=""> 
                    <a href="<?=path('admin', 'category')?>"> Catégories </a> 
                </li>
                <li> 
                    <img src="../images/search_hands_free.png" alt=""> 
                    <a href="<?=path('admin', 'brands')?>"> Marques </a> 
                </li>
                <li> 
                    <img src="../images/model_training.png" alt=""> 
                    <a href="<?=path('admin', 'modele')?>"> Modèles </a> 
                </li>
                <li> 
                    <img src="../images/drivers.png" alt=""> 
                    <a href="<?=path('admin', 'drivers')?>"> Conducteurs </a> 
                </li>
            <?php endif ?>
            <?php if ($_SESSION["userConnect"]['id_role'] == 2): ?>
                <li> 
                    <img src="../images/grid_view.png" alt=""> 
                    <a href="<?=path('respo', 'managerboard')?>"> Tableau de bord </a> 
                </li>
                <li> 
                    <img src="../images/reservation.png" alt=""> 
                    <a href="<?=path('respo', 'reservations')?>"> Réservations </a> 
                </li>
                <li> 
                    <img src="../images/local_shipping.png" alt=""> 
                    <a href="<?=path('respo', 'vehicules')?>"> Véhicules </a> 
                </li>
                <li> 
                    <img src="../images/customer.png" alt=""> 
                    <a href="<?=path('respo', 'customer')?>"> Clients </a> 
                </li>
            <?php endif ?>
            </ul>
        </nav>
    </div>
    <div class="logoutbtn flex jcc aic">
        <button class="logoutbtn flex jc-se aic" name="action" value="logout">
            <img src="../images/logout.png" alt="">
            <a href="<?=WEBROOT;?>"> Déconnexion </a>
        </button>
    </div>
</aside>
