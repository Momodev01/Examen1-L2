<?php

function findVehicule() {
    $sql = "SELECT * 
            FROM `marque` as mq, `modele` as md, `type_vehicule` as tv, `vehicule` as vh, `categorie` as cg
            WHERE vh.`id_marque` = mq.`id_marque`
            AND vh.`id_modele` = md.`id_modele`
            AND vh.`id_type_vehicule` = tv.`id_type_vehicule`
            AND vh.`id_categorie` = cg.`id_categorie`";
    return executeSelect($sql);
}
function findAllCars() {
    $sql = "SELECT * FROM vehicules WHERE id_type_vehicule = 1";
    return executeSelect($sql);
}

function findAllTrucks() {
    $sql = "SELECT * FROM vehicules WHERE id_type_vehicule = 2";
    return executeSelect($sql);
}

function findAllCategories() {
    $sql = "SELECT * FROM categorie";
    return executeSelect($sql);
}

function findAllMarques() {
    $sql = "SELECT * FROM marque";
    return executeSelect($sql);
}

function findAllModels() {
    $sql = "SELECT * FROM modele";
    return executeSelect($sql);
}

function findAllConducteurs() {
    $sql = "SELECT * FROM conducteur";
    return executeSelect($sql);
}

function cars() {
    $sql = "SELECT COUNT(*) AS cars FROM vehicule WHERE id_type_vehicule = 1";
    return executeSelect($sql);
}

function trucks() {
    $sql = "SELECT COUNT(*) AS trucks FROM vehicule WHERE id_type_vehicule = 2";
    return executeSelect($sql);
}
function brands() {
    $sql = "SELECT COUNT(*) AS brands FROM marque";
    return executeSelect($sql);
}

function drivers() {
    $sql = "SELECT COUNT(*) AS drivers FROM conducteur";
    return executeSelect($sql);
}