<?php

  require_once("libs/template_engine.php");
  require_once("models/funciones.model.php");
  function run(){

    $htmlDatos = array();
    $htmlDatos["tituloFunciones"] = "";
    $htmlDatos["modoFunciones"] = "";
    $htmlDatos["fnccod"] = "";
    $htmlDatos["fncdsc"]="";
    $htmlDatos["fncest"]="";
    $htmlDatos["actSelected"]="selected";
    $htmlDatos["inaSelected"]="";
    $htmlDatos["disabled"]="";
    if(isset($_GET["acc"])){
      switch($_GET["acc"]){
        //Manejando si es un insert
        case "ins":
          $htmlDatos["tituloFunciones"] = "Ingreso de Nueva Función";
          $htmlDatos["modoFunciones"] = "ins";
          //se determina si es una acción del formulario
          if(isset($_POST["btnacc"])){
            $lastID = insertarFuncion($_POST);
            if($lastID){
              redirectWithMessage("¡Función Ingresada!","index.php?page=frmFunciones&acc=upd&fnccod=".$lastID);
            }else{
              //Se obtiene los datos que estaban en el post
              $htmlDatos["fnccod"] = $_POST["fnccod"];
              $htmlDatos["fncdsc"]=$_POST["fncdsc"];
              $htmlDatos["fncest"]=$_POST["fncest"];
              $htmlDatos["actSelected"]=($_POST["fncest"] =="ACT")?"selected":"";
              $htmlDatos["inaSelected"]=($_POST["fncest"] =="INA")?"selected":"";
            }
          }
          //si no es una acción del post se muestra los datos
          renderizar("frmFunciones", $htmlDatos);
          break;
        //Manejando si es un Update
        case "upd":
          if(isset($_POST["btnacc"])){
            //implementar logica de guardado
            if(actualizarFuncion($_POST)){
              //forzando a que se actualice con los datos de la db
              redirectWithMessage("¡Función Actualizada!","index.php?page=frmFunciones&acc=upd&fnccod=".$_POST["fnccod"]);
            }
          }
          if(isset($_GET["fnccod"])){
            $funcion = obtenerFuncion($_GET["fnccod"]);
            if($funcion){
              $htmlDatos["tituloFunciones"] = "Actualizar ".$funcion["fncdsc"];
              $htmlDatos["modoFunciones"] = "upd";
              $htmlDatos["fnccod"] = $funcion["fnccod"];
              $htmlDatos["fncdsc"]=$funcion["fncdsc"];
              $htmlDatos["fncest"]=$funcion["fncest"];
              $htmlDatos["actSelected"]=($funcion["fncest"] =="ACT")?"selected":"";
              $htmlDatos["inaSelected"]=($funcion["fncest"] =="INA")?"selected":"";
              renderizar("frmFunciones", $htmlDatos);
            }else{
              redirectWithMessage("¡Función No Encontrada!","index.php?page=funciones");
            }
          }else{
            redirectWithMessage("¡Función No Encontrada!","index.php?page=funciones");
          }
          break;
        //Manejando un delete
        case "dlt":
        if(isset($_POST["btnacc"])){
          //implementar logica de guardado
          if(borrarFuncion($_POST["fnccod"])){
            //forzando a que se actualice con los datos de la db
            redirectWithMessage("¡Función Borrada!","index.php?page=funciones");
          }
        }
          if(isset($_GET["fnccod"])){
            $funcion = obtenerFuncion($_GET["fnccod"]);
            if($funcion){
              $htmlDatos["tituloFunciones"] = "¿Desea borrar ".$funcion["fncdsc"] . "?";
              $htmlDatos["modoFunciones"] = "dlt";
              $htmlDatos["fnccod"] = $funcion["fnccod"];
              $htmlDatos["fncdsc"]=$funcion["fncdsc"];
              $htmlDatos["fncest"]=$funcion["fncest"];
              $htmlDatos["actSelected"]=($funcion["fncest"] =="ACT")?"selected":"";
              $htmlDatos["inaSelected"]=($funcion["fncest"] =="INA")?"selected":"";
              $htmlDatos["disabled"]='disabled="disabled"';
              renderizar("frmFunciones", $htmlDatos);
            }else{
              redirectWithMessage("¡Función No Encontrada!","index.php?page=funciones");
            }
          }else{
            redirectWithMessage("¡Función No Encontrada!","index.php?page=funciones");
          }
          break;
        defualt:
          redirectWithMessage("¡Acción no permitida!","index.php?page=funciones");
          break;
      }
    }
  }
  run();
?>
