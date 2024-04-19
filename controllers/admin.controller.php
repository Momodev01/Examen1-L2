<?php

if (isset($_REQUEST['action'])) {
    $profil = $_SESSION['userConnect'];
    // dd( $profil);
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
        $brandNames = findAllMarques();
        // dd($brandNames);
        loadView('administrator/cars', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "carsList" => $carsList, "brandNames" => $brandNames, "profil" => $profil]);
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
        $brandNames = findAllMarques();
        // dd('$cars');
        loadView('administrator/brands', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "brandNames" => $brandNames, "profil" => $profil]);
    }
    elseif ($_REQUEST['action'] == "modele") {
        $cars = cars();
        $trucks = trucks();
        $brands = brands();
        $models = models();
        $drivers = drivers();
        $vehicules = findVehicule();
        $ModelNames = findAllModels();
        // dd('$cars');
        loadView('administrator/models', ["cars" => $cars, "trucks" => $trucks, "brands" => $brands, "models" => $models, "drivers" => $drivers, "vehicules" => $vehicules, "ModelNames" => $ModelNames, "profil" => $profil]);
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
    elseif ($_REQUEST['action'] == "newCar") {
        $type_vehicule = findTypes();
        $ctgList = ctgNames();
        loadView('administrator/newCar', ['type_vehicule' => $type_vehicule, "ctgList" => $ctgList, "profil" => $profil]);
    }
    elseif ($_REQUEST['action'] == "addBrand") {
        unset($_POST["controller"]);
        unset($_POST["action"]);
        // dd($_POST);
        AddBrand($_POST);
        redirectToRoot("admin", "brands");
    }
    elseif ($_REQUEST['action'] == "addModele") {
        unset($_POST["controller"]);
        unset($_POST["action"]);
        // dd($_POST);
        AddModel($_POST);
        redirectToRoot("admin", "modele");
    }
    else {
        $profil = $_SESSION['userConnect'];
        // dd($profil['nom_user']);
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
// else {
//     header("location:".WEBROOT);
//     exit;
// }
