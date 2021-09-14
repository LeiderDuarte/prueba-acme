<?php 

    require_once "../../conexion/conexion.php";
    require_once "../../metodos/metodosConductor.php";

    $id=$_GET['id'];

    $obj= new metodosConductor();
    if ($obj->eliminarConductor($id)==1){
        header("location:../../views/conductor/updateConductor.php");
    }else{
        echo "Failed to delete";
    }

?>