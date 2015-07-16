<?php
/* Controlado:
 * Fecha:
 * Created By:
 * Last Modification:
 */
  require_once("libs/template_engine.php");
  //Agregar requires de modelos aquí
  //ej require_once("models/tabla.model.php");

  require_once("models/funciones.model.php");

  //=================================
  function run(){
    $funciones=array();

$funciones=obtenerFunciones();
    renderizar("funciones",array("funciones"=>$funciones));


  }
  run();
?>
