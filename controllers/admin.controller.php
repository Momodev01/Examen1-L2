<?php

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "dashboard") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $drivers = drivers();
        $vehicules = findVehicule();
        // dd('$cars');
        loadView('administrator/gesboard', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "drivers" => $drivers, "vehicules" => $vehicules]);
    } 
    elseif ($_REQUEST['action'] == "cars") {
        # code...
    }
    elseif ($_REQUEST['action'] == "trucks") {
        # code...
    }
    elseif ($_REQUEST['action'] == "category") {
        # code...
    }
    elseif ($_REQUEST['action'] == "marque") {
        # code...
    }
    elseif ($_REQUEST['action'] == "modele") {
        # code...
    }
    elseif ($_REQUEST['action'] == "drivers") {
        # code...
    }
    else {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $drivers = drivers();
        $vehicules = findVehicule();
        // dd('$cars');
        loadView('administrator/gesboard', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "drivers" => $drivers, "vehicules" => $vehicules]);
    } 
}
else {
    # code...
}