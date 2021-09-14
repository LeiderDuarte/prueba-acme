<?php

    class metodosPropietario {
        //Get
        public function mostrarPropietario($sql){
            $c= new conectar();
            $conexion=$c->conexion();

            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        //Post
        public function agregarPropietario($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into propietario (cedula,pnombre,snombre,apellidos,direccion,telefono,ciudad) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";
            return $result=mysqli_query($conexion,$sql);
        }

        //update
        public function actualizarPropietario($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="UPDATE propietario set cedula='$datos[0]',
                                      pnombre='$datos[1]',
                                      snombre='$datos[2]',
                                      apellidos='$datos[3]',
                                      direccion='$datos[4]',
                                      telefono='$datos[5]',
                                      ciudad='$datos[6]'
                                where id='$datos[7]'";
            return $result=mysqli_query($conexion,$sql);
        }

        //delete
        public function eliminarPropietario($id){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from propietario where id='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
    }

?>