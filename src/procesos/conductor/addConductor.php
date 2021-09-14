<?php 

    require_once "../../conexion/conexion.php";
    require_once "../../metodos/metodosConductor.php";

    $cedula=$_POST['cedula'];
    $pnombre=$_POST['pnombre'];
    $snombre=$_POST['snombre'];
    $apellidos=$_POST['apellidos'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $ciudad=$_POST['ciudad'];

    $datos=array(
        $cedula,
        $pnombre,
        $snombre,
        $apellidos,
        $direccion,
        $telefono,
        $ciudad
    );

    $obj=new metodosConductor();
    if ($obj->agregarConductor($datos)==1) {
        header("location:../../views/conductor/addConductor.php");
    }else{
        echo "Failed to Added";
    }

?>