<?php

require_once("libs/dao.php");

function obtenerRoles(){
    $categorias = array();
    $selectQuery = "SELECT * from roles;";
    $categorias = obtenerRegistros($selectQuery);
    return $categorias;
}

?>
