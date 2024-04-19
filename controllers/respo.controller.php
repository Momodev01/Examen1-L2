<?php

if (isset($_REQUEST['action'])) {
    $profil = $_SESSION['userConnect'];
    // dd( $profil[0]['nom_user'] );
    if ($_REQUEST['action'] == "dashboard") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        $carsDispo = carsDispo();
        $trucksDispo = trucksDispo();
        $nbrReservEnCours = nbrReservEnCours();
        $carsLocated = carsLocated();
        // dd($nbrReservEnCours);
        loadView('manager_reserv/managerboard', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil, "carsDispo" => $carsDispo, "carsLocated" => $carsLocated, "trucksDispo" => $trucksDispo, "nbrReservEnCours" => $nbrReservEnCours]);

    }
    elseif ($_REQUEST['action'] == "reservations") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        $carsDispo = carsDispo();
        $trucksDispo = trucksDispo();
        $nbrReservEnCours = nbrReservEnCours();
        $carsLocated = carsLocated();
        $reservations = findAllReservations();
        // dd($nbrReservEnCours);
        loadView('manager_reserv/mesreservations', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil, "carsDispo" => $carsDispo, "carsLocated" => $carsLocated, "trucksDispo" => $trucksDispo, "nbrReservEnCours" => $nbrReservEnCours, "reservations" => $reservations]);
    }
    elseif ($_REQUEST['action'] == "vehicules") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        $carsDispo = carsDispo();
        $trucksDispo = trucksDispo();
        $nbrReservEnCours = nbrReservEnCours();
        $carsLocated = carsLocated();
        $reservations = findAllReservations();
        // dd($nbrReservEnCours);
        loadView('manager_reserv/vehicules', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil, "carsDispo" => $carsDispo, "carsLocated" => $carsLocated, "trucksDispo" => $trucksDispo, "nbrReservEnCours" => $nbrReservEnCours, "reservations" => $reservations]);
    }
    elseif ($_REQUEST['action'] == "customer") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        $carsDispo = carsDispo();
        $trucksDispo = trucksDispo();
        $nbrReservEnCours = nbrReservEnCours();
        $carsLocated = carsLocated();
        $reservations = findAllReservations();
        $customers = findAllCustomers();
        // dd($nbrReservEnCours);
        loadView('manager_reserv/customers', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil, "carsDispo" => $carsDispo, "carsLocated" => $carsLocated, "trucksDispo" => $trucksDispo, "nbrReservEnCours" => $nbrReservEnCours, "reservations" => $reservations, "customers" => $customers]);
    }
    else {
        $profil = $_SESSION['userConnect'];
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        $carsDispo = carsDispo();
        $trucksDispo = trucksDispo();
        $nbrReservEnCours = nbrReservEnCours();
        $carsLocated = carsLocated();
        // dd($nbrReservEnCours);
        loadView('manager_reserv/managerboard', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil, "carsDispo" => $carsDispo, "carsLocated" => $carsLocated, "trucksDispo" => $trucksDispo, "nbrReservEnCours" => $nbrReservEnCours]);

    }
}
