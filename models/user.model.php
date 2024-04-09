<?php

function findAllUsers():array|null{
    $sql = "SELECT * FROM `users`";
    return executeSelect($sql);
};

function findAllRoles():array|null {
    $sql = "SELECT * FROM `role`";
    return executeSelect($sql);
}