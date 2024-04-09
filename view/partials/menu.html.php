<?php
$currentPage = 'accueil'; // ou 'produits', 'contact', etc., selon la page
?>

<aside class="">
    <div class="logo">
        <a href="<?=path('admin', 'dashboard')?>"> <img src="../images/logo.png" alt=""> </a>
    </div>
    <div class="menu flex">
        <nav class="flex">
            <ul class="flex column jc-se aic">
                <li> 
                    <img src="../images/grid_view.png" alt=""> 
                    <a <?php if ($currentPage == 'dashboard') echo 'class="active"'; ?> href="<?=path('admin', 'dashboard')?>"> Tableau de bord </a> 
                </li>
                <li> 
                    <img src="../images/directions_car.png" alt=""> 
                    <a <?php if ($currentPage == 'voitures') echo 'class="active"'; ?> href="<?=path('admin', 'show-cars')?>"> Voitures </a> 
                </li>
                <li> 
                    <img src="../images/local_shipping.png" alt=""> 
                    <a <?php if ($currentPage == 'camions') echo 'class="active"'; ?> href="<?=path('admin', 'show-trucks')?>"> Camions </a> 
                </li>
                <li> 
                    <img src="../images/category.png" alt=""> 
                    <a <?php if ($currentPage == 'categories') echo 'class="active"'; ?> href="<?=path('admin', 'show-categories')?>"> Catégories </a> 
                </li>
                <li> 
                    <img src="../images/search_hands_free.png" alt=""> 
                    <a <?php if ($currentPage == 'marques') echo 'class="active"'; ?> href="<?=path('admin', 'show-marques')?>"> Marques </a> 
                </li>
                <li> 
                    <img src="../images/model_training.png" alt=""> 
                    <a <?php if ($currentPage == 'modeles') echo 'class="active"'; ?> href="<?=path('admin', 'show-models')?>"> Modèles </a> 
                </li>
                <li> 
                    <img src="../images/drivers.png" alt=""> 
                    <a <?php if ($currentPage == 'conducteurs') echo 'class="active"'; ?> href="<?=path('admin', 'show-drivers')?>"> Conducteurs </a> 
                </li>
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