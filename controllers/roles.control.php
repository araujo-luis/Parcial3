<?php
/* Controlado:
 * Fecha:
 * Created By:
 * Last Modification:
 */
  require_once("libs/template_engine.php");
  //Agregar requires de modelos aquí
  require_once("models/roles.model.php");



  //=================================
  function run(){
    $roles=array();

    $roles=obtenerRoles();
    renderizar("roles",array("roles"=>$roles));
  }
  run();
?>
