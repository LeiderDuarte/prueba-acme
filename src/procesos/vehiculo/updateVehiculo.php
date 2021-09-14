<?php 

    require_once "../../conexion/conexion.php";
    require_once "../../metodos/metodosCrud.php";

    $placa=$_POST['placa'];
    $color=$_POST['color'];
    $marca=$_POST['marca'];
    $tipodv=$_POST['tipodv'];
    $conductor=$_POST['conductor'];
    $propietario=$_POST['propietario'];
    $id=$_POST['id'];

    $datos=array(
        $placa,
        $color,
        $marca,
        $tipodv,
        $conductor,
        $propietario,
        $id
    );

    $obj=new metodosVehiculo();
    if ($obj->actualizarVehiculo($datos)==1) {
        header("location:../../views/vehiculo/updateVehiculo.php");
    }else{
        echo "Failed to update";
    }

?>