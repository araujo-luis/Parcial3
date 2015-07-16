<?php

require_once("libs/dao.php");

function obtenerFunciones(){
    $categorias = array();
    $selectQuery = "SELECT * from funciones;";
    $categorias = obtenerRegistros($selectQuery);
    return $categorias;
}

function obtenerFuncion($funcionID){
      $funcion = array();
      $sqlstr = "select * from funciones where fnccod = '%s';";
      $sqlstr = sprintf($sqlstr, $funcionID);
      $funcion = obtenerUnRegistro($sqlstr);
      return $funcion;
    }
function insertarFuncion($funcion){
  if($funcion && is_array($funcion)){
     $sqlInsert = "INSERT INTO funciones(`fnccod`,`fncdsc`,`fncest`)VALUES('%s','%s','%s');";
     $sqlInsert = sprintf($sqlInsert,
                    valstr($funcion["fnccod"]),
                    valstr($funcion["fncdsc"]),
                    valstr($funcion["fncest"])

                  );
     if(ejecutarNonQuery($sqlInsert)){
       return getLastInserId();
     }
  }
  return false;
}


function actualizarFuncion($funcion){
  if($funcion && is_array($funcion)){
    $sqlUpdate = "update funciones set  fncdsc='%s',fncest='%s' where fnccod='%s';";
    $sqlUpdate = sprintf($sqlUpdate,
                  valstr($funcion["fncdsc"]),
                  valstr($funcion["fncest"]),
                  valstr($funcion["fnccod"])
                );
    return ejecutarNonQuery($sqlUpdate);
  }
  return false;
}
    function borrarFuncion($funcionID){
      if($funcionID){
        $sqlDelete = "delete from funciones where fnccod='%s';";
        $sqlDelete = sprintf($sqlDelete,
                      valstr($funcionID)
                    );
        return ejecutarNonQuery($sqlDelete);
      }
      return false;
    }

?>
