<?php

if(isset($_REQUEST["controller"])) {
    if ($_REQUEST['controller'] == 'connexion') {
        require_once('../controllers/security.controller.php');
    }
    elseif ($_REQUEST['controller'] == 'admin') {
        require_once('../controllers/admin.controller.php');
    }
    elseif ($_REQUEST['controller'] == 'respo') {
        require_once('../controllers/respo.controller.php');
    }
    elseif ($_REQUEST['controller'] == 'commercial') {
        require_once('../controllers/commercial.controller.php');
    }
    elseif ($_REQUEST['controller'] == 'client') {
        require_once('../controllers/client.controller.php');
    }
}
else {
    require_once('../controllers/security.controller.php');
}