<?php

if (isset($_REQUEST['action'])) {
    $profil = findProfil();
    // dd( $profil[0]['nom_user'] );
    if ($_REQUEST['action'] == "dashboard") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        // dd('$cars');
        loadView('administrator/gesboard', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil]);
    } 
    elseif ($_REQUEST['action'] == "cars") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $carsList = findAllCars();
        // dd('$cars');
        loadView('administrator/cars', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "carsList" => $carsList, "profil" => $profil]);
    }
    elseif ($_REQUEST['action'] == "trucks") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $trucksList = findAllTrucks();
        // dd('$cars');
        loadView('administrator/trucks', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "trucksList" => $trucksList, "profil" => $profil]);
    }
    elseif ($_REQUEST['action'] == "category") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $ctgList = findAllCategories();
        $vehicules = findVehicule();
        // dd('$cars');
        loadView('administrator/category', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "ctgList" => $ctgList, "profil" => $profil]);
    }
    elseif ($_REQUEST['action'] == "brands") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        // dd('$cars');
        loadView('administrator/brands', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil]);
    }
    elseif ($_REQUEST['action'] == "modele") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        // dd('$cars');
        loadView('administrator/models', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil]);
    }
    elseif ($_REQUEST['action'] == "drivers") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        $driversList = findAllConducteurs();
        // dd('$cars');
        loadView('administrator/drivers', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "driversList" => $driversList, "profil" => $profil]);
    }
    else {
        $profil = findProfil();
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        // dd('$cars');
        loadView('administrator/gesboard', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "profil" => $profil]);
    } 
}
else {
    # code...
}
