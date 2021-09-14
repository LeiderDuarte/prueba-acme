<?php 

    require_once "../../conexion/conexion.php";
    require_once "../../metodos/metodosCrud.php";

    $placa=$_POST['placa'];
    $color=$_POST['color'];
    $marca=$_POST['marca'];
    $tipodv=$_POST['tipodv'];
    $conductor=$_POST['conductor'];
    $propietario=$_POST['propietario'];

    $datos=array(
        $placa,
        $color,
        $marca,
        $tipodv,
        $conductor,
        $propietario
    );

    $obj=new metodosVehiculo();
    if ($obj->agregarVehiculo($datos)==1) {
        header("location:../../views/vehiculo/addVehiculo.php");
    }else{
        echo "Failed to Added";
    }

?>