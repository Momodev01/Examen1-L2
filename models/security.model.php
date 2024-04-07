<?php

function connexion(string $username, string $password): array|null {
    // Récupérer tous les utilisateurs
    $users = findAllUsers();
    // Parcourir la liste des utilisateurs
    foreach ($users as $user) {
        // Vérifier les identifiants correspondants
        if ($user['username'] == $username && $user['passwd'] == $password) {
            return $user; // Retourner le user correspondant
        }
    }
    return null; // Retourner null si aucune correspondance
}
