<?php 

    require_once "../../conexion/conexion.php";
    require_once "../../metodos/metodosPropietario.php";

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

    $obj=new metodosPropietario();
    if ($obj->agregarPropietario($datos)==1) {
        header("location:../../views/propietario/addPropietario.php");
    }else{
        echo "Failed to Added";
    }

?>