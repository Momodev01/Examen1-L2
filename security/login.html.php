
<form action="<?=WEBROOT?>" method="post" class="log-form col-5 flex column jc-se aic">
    <h1>Login</h1>
    <div class="log-child flex column">
        <!-- <label for="mail">Adresse E-mail</label> -->
        <input type="email" id="mail" placeholder="E-mail" name="username">
    </div>
    <div class="log-child flex column">
        <!-- <label for="mdp">Mot de pass</label> -->
        <input type="password" id="mdp" placeholder="********" name="passwd">
    </div>
    <div class="col-8 flex jc-sb">
        <div class="">
            <input type="checkbox" id="rappel" name="rappel"/>
            <label for="rappel">Se souvenir de moi </label>
        </div>
        <div class="">
            <p> <a href=""> Mot de pass oublié </a> </p>
        </div>
    </div>
    <div class="log-child flex jcc aic">
        <input type="hidden" name="controller" value="connexion">
        <button type="submit" name="action" value="login"> Se connecter </button>
    </div>
    <div class="log-child flex column aic">
        <p> Vous n'avez pas de compte? </p>
        <p> <a href="<?=path("connexion", "inscription")?>"> S'inscrire </a> </p>
    </div>
</form>