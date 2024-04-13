<?php

function findAllUsers():array|null{
    $sql = "SELECT * FROM `users`";
    return executeSelect($sql);
};

function findAllRoles():array|null {
    $sql = "SELECT * FROM `role`";
    return executeSelect($sql);
}

function findProfil() {
    $sql = "SELECT * FROM users, role
            WHERE users.`id_role` = role.`id_role`";
    return executeSelect($sql);
}