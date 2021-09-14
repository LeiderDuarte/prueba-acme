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
    $id=$_POST['id'];

    $datos=array(
        $cedula,
        $pnombre,
        $snombre,
        $apellidos,
        $direccion,
        $telefono,
        $ciudad,
        $id
    );

    $obj=new metodosPropietario();
    if ($obj->actualizarPropietario($datos)==1) {
        header("location:../../views/propietario/updatePropietario.php");
    }else{
        echo "Failed to Added";
    }

?>