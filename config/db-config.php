<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PSWD', '');
define('DB_PORT', 3306);
define('DB_NAME', 'emgbd');

// Ouverture de la connexion
function openConnexion() {
    // Methode PDO
    try {
        $DSN = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        
        $conn = new PDO($DSN, DB_USER, DB_PSWD, $options);
    }
    catch(PDOException $e){
        die("Erreur : " . $e->getMessage());
    }

    // Method mysqli
    // $conn = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_NAME, DB_PORT);
    // if( $conn->connect_error ) {
    //     die("Erreur : $conn->connect_error");
    // }
    //  else {
    //     echo "Connecté avec succès à la base de données ! <br/>";
    // }
    
    return $conn;
}

function closeConnexion($conn) {
    // Fermeture de la connexion
    $conn = null;
}

function executeSelect(string $sql, array $data=[], $single = false):array|null {
    $result = [];
    // Ouverture de la connexion
    $conn = openConnexion();
    // Preparation de la requete SELECT
    $stmt = $conn->prepare($sql);
    // Execution de la requete SELECT
    COUNT($data) == 0 ? $stmt-> execute() : $stmt-> execute($data);
    // Recuperation de données
    $result = $single == true ? $stmt-> fetch() : $stmt-> fetchAll();
    //  Fermeture de la connexion
    closeConnexion($conn);

    return $result;
}

function executeUpdate(string $sql, array $data) {
    // Ouverture de la connexion
    $conn = openConnexion();
    // Preparation de la requete UPDATE
    $stmt = $conn->prepare($sql);
    // Execution de la requete UPDATE
    $stmt-> execute($data);
    //  Fermeture de la connexion
    closeConnexion($conn);
}
