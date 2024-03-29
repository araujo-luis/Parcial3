<?php

    session_start();

    require_once("libs/utilities.php");

    $pageRequest = "home";

    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }

    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    require_once("controllers/site.mw.php");
    require_once("controllers/verificar.mw.php");

    //Este switch se encarga de todo el enrutamiento

    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;

        case "roles":
            //llamar al controlador
            require_once("controllers/roles.control.php");
            break;
        case "login":
            require_once("controllers/login.control.php");
            break;
            
        //MANTENIMIETNO FUNCIONES
        case "funciones":
            require_once("controllers/funciones.control.php");
            break;

        case "frmFunciones":
            require_once("controllers/frmFunciones.control.php");
            break;

        //para agregar una nueva pagina
        // agregar otro case
        default:
            require_once("controllers/error.control.php");

    }


?>
