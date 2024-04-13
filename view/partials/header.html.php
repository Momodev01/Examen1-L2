<header class="flex jc-sb aic">
        <div class="profil flex jc-se aic">
            <img src="../images/persona.png" alt="">
            <p> <?= $profil[0]['nom_user'], ' ',$profil[0]['prenom_user'] ?> </p>
        </div>
        <div class="role flex jcc aic">
            <p> <?= $profil[0]['libelle_role'] ?> </p>
        </div>
</header>