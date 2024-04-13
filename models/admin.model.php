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
    $sql = "SELECT * FROM vehicule as vh, marque as mq, modele as md, categorie as cg, type_vehicule as tv, options as op
            WHERE nom_type_vehicule LIKE 'Voiture'
            AND vh.`id_type_vehicule` = tv.`id_type_vehicule`
            AND vh.`id_marque` = mq.`id_marque`
            AND vh.`id_modele` = md.`id_modele`
            AND vh.`id_categorie` = cg.`id_categorie`
            AND vh.`id_options` = op.`id_options`";
    return executeSelect($sql);
}

function findAllTrucks() {
    $sql = "SELECT * FROM vehicule as vh, marque as mq, modele as md, categorie as cg, type_vehicule as tv
            WHERE nom_type_vehicule LIKE 'Camion'
            AND vh.`id_type_vehicule` = tv.`id_type_vehicule`
            AND vh.`id_marque` = mq.`id_marque`
            AND vh.`id_modele` = md.`id_modele`
            AND vh.`id_categorie` = cg.`id_categorie`";
    return executeSelect($sql);
}

function findAllCategories() {
    $sql = "SELECT * FROM vehicule as vh, marque as mq, modele as md, categorie as cg, type_vehicule as tv
            WHERE vh.`id_type_vehicule` = tv.`id_type_vehicule`
            AND vh.`id_marque` = mq.`id_marque`
            AND vh.`id_modele` = md.`id_modele`
            AND vh.`id_categorie` = cg.`id_categorie`";
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
    $sql = "SELECT * FROM conducteur as cd, permis as pm, adresse as ad
            WHERE cd.`id_permis` = pm.`id_permis`
            AND cd.`id_adresse` = ad.`id_adresse`";
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

function models() {
    $sql = "SELECT COUNT(*) AS models FROM modele";
    return executeSelect($sql);
}

function drivers() {
    $sql = "SELECT COUNT(*) AS drivers FROM conducteur";
    return executeSelect($sql);
}