<?php

    class metodosConductor {
        //Get
        public function mostrarConductor($sql){
            $c= new conectar();
            $conexion=$c->conexion();

            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        //Post
        public function agregarConductor($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into conductor (cedula,pnombre,snombre,apellidos,direccion,telefono,ciudad) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";
            return $result=mysqli_query($conexion,$sql);
        }

        //update
        public function actualizarConductor($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="UPDATE conductor set cedula='$datos[0]',
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
        public function eliminarConductor($id){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from conductor where id='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
    }

?>