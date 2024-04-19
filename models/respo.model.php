<?php

function carsDispo() {
    $sql = "SELECT COUNT(*) AS carsDispo FROM vehicule WHERE id_type_vehicule = 1
            AND etat_vehicule LIKE 'Disponible' ";
    
    return executeSelect($sql);
}

function carsLocated() {
    $sql = "SELECT COUNT(*) AS carsLocated FROM vehicule WHERE id_type_vehicule = 1
            AND etat_vehicule LIKE 'Réservé' ";
    
    return executeSelect($sql);
}
function trucksDispo() {
    $sql = "SELECT COUNT(*) AS trucksDispo FROM vehicule WHERE id_type_vehicule = 2
            AND etat_vehicule LIKE 'Disponible' ";
    
    return executeSelect($sql);
}

function reservEnCours() {
    $sql = "SELECT * FROM vehicule, reservation 
            WHERE vehicule.`id_vehicule` = reservation.`id_vehicule`
            AND id_reservation = 1";
    
    return executeSelect($sql);
}

function nbrReservEnCours() {
    $sql = "SELECT COUNT(*) AS nbrReservEnCours FROM vehicule, reservation 
            WHERE vehicule.`id_vehicule` = reservation.`id_vehicule`
            AND id_reservation = 1";
    
    return executeSelect($sql);
}

function findAllReservations() {
    $sql = "SELECT * FROM vehicule, reservation, users, marque, modele
            WHERE vehicule.`id_vehicule` = reservation.`id_vehicule`
            AND reservation.`id_user` = users.`id_user`
            AND reservation.`id_marque` = marque.`id_marque`
            AND reservation.`id_modele` = modele.`id_modele`";
    
    return executeSelect($sql);
}

function findAllCustomers() {
    $sql = "SELECT * FROM users, adresse
            WHERE id_role = 3
            AND users.`id_adresse` = adresse.`id_adresse`";

    return executeSelect($sql);
}