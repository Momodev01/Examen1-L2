<?php

function findAllClients(){
    $users = findAllUsers();
        $profil = [];
        foreach ($users as $user) {
            if ($user["id_role"] == 3) { 
                $role = findAllRoles();
                $profilClient = array_merge($role,$user);
                $profil[] = $profilClient;
            }
        }
    return $profil;
}; 
