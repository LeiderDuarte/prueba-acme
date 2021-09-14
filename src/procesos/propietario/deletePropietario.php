<?php 

    require_once "../../conexion/conexion.php";
    require_once "../../metodos/metodosPropietario.php";

    $id=$_GET['id'];

    $obj= new metodosPropietario();
    if ($obj->eliminarPropietario($id)==1){
        header("location:../../views/propietario/updatePropietario.php");
    }else{
        echo "Failed to delete";
    }

?>