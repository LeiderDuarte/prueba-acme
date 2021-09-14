<?php 

    require_once "../../conexion/conexion.php";
    require_once "../../metodos/metodosCrud.php";

    $id=$_GET['id'];

    $obj= new metodosVehiculo();
    if ($obj->eliminarVehiculo($id)==1){
        header("location:../../views/vehiculo/updateVehiculo.php");
    }else{
        echo "Failed to delete";
    }

?>