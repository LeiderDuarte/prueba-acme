<?php 

    class metodosVehiculo {
        //Get
        public function mostrarVehiculo($sql){
            $c= new conectar();
            $conexion=$c->conexion();

            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        //Post
        public function agregarVehiculo($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into vehiculo (placa,color,marca,tipodv,conductor,propietario) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
            return $result=mysqli_query($conexion,$sql);
        }

        //update
        public function actualizarVehiculo($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="UPDATE vehiculo set placa='$datos[0]',
                                      color='$datos[1]',
                                      marca='$datos[2]',
                                      tipodv='$datos[3]',
                                      conductor='$datos[4]',
                                      propietario='$datos[5]'
                                where id='$datos[6]'";
            return $result=mysqli_query($conexion,$sql);
        }

        //delete
        public function eliminarVehiculo($id){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from vehiculo where id='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
    }

?>