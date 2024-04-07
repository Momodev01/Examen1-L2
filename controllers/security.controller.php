<?php

if (isset($_REQUEST["action"])) {
    
    if ($_REQUEST["action"] == "logout") {
        unset($_SESSION["userConnect"]);
        session_destroy();
        header("location:".WEBROOT);
    }
    elseif ($_REQUEST["action"] == "inscription") {
        require_once('../security/signup.html.php');
    }
    elseif ($_REQUEST["action"] == "login") {
        // dd('');
        if (isset($_POST['username']) && isset($_POST['passwd'])) {
            $username = $_POST['username'];
            $password = $_POST['passwd'];
            $userConnect = connexion($username, $password);
            // $_SESSION['userConnect'] = $userConnect;
            // dd($_SESSION); 
            // Vérifier si la connexion a réussi
            if ($userConnect != null) {
                if ($userConnect['id_role'] == 1) {
                    $_SESSION['userConnect'] = $userConnect; 
                    loadView('administrator/gesboard'); 
                }
                else if ($userConnect['id_role'] == 2) {
                    $_SESSION['userConnect'] = $userConnect;
                    loadView('manager_resev/managerboard');   
                }
                else if ($userConnect['id_role'] == 3) {
                    $_SESSION['userConnect'] = $userConnect;
                    loadView('customer/dashboard'); 
                }
            }
            else{
                header("location:".WEBROOT);
            }
        }
    }
}  
else{
    // Page par défaut
    require_once("../security/login.html.php");
}
