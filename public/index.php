<?php
define("ROOT", str_replace("\public", "", $_SERVER["DOCUMENT_ROOT"]));

require_once(ROOT.'/config/bootstrap.php');
// dd($_SERVER["DOCUMENT_ROOT"]);

// Routage
session_start();
require_once(ROOT."/config/rooter.php");
