
<form action="<?=WEBROOT?>" method="post" class="log-form col-5 flex column jc-se aic">
    <h1>Sign up</h1>
    <div class="log-child flex column">
        <!-- <label for="nom">Nom</label> -->
        <input type="text" id="nom" placeholder="Nom" name="nom_user">
    </div>
    <div class="log-child flex column">
        <!-- <label for="prenom">Prenom</label> -->
        <input type="text" id="prenom" placeholder="Prenom" name="prenom_user">
    </div>
    <div class="log-child flex column">
        <!-- <label for="mail">Adresse E-mail</label> -->
        <input type="email" id="mail" placeholder="E-mail" name="login">
    </div>
    <div class="log-child flex column">
        <!-- <label for="mdp">Mot de pass</label> -->
        <input type="password" id="mdp" placeholder="Saisir un mot de pass" name="passwd">
    </div>
    <div class="log-child flex column">
        <!-- <label for="mdp">Mot de pass</label> -->
        <input type="password" id="mdp" placeholder="Confirmer le mot de pass" name="passwd">
    </div>
    <div class="log-child flex jcc aic">
        <input type="hidden" name="controller" value="connexion">
        <button type="submit" name="action" value="addUser"> S'inscrire </button>
    </div>
    <div class="log-child flex column aic">
        <p> Vous avez déjà un compte? </p>
        <p> <a href="<?=path("connexion", "logout")?>"> Se connecter </a> </p>
    </div><div class=""></div>
</form>
