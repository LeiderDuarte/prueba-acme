<?php

require_once "../../conexion/conexion.php";
require_once "../../metodos/metodosCrud.php";

?>

<?php include("static/header.php") ?>

<?php include("static/nav.php") ?>

<main class="mt-2 pt-2">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Placa</th>
                        <th>Color</th>
                        <th>Marca</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Conductor</th>
                        <th>Propietario</th>
                    </tr>
                </thead>

                <?php

                $obj = new metodosVehiculo();
                $sql = "SELECT * FROM vehiculo";
                $datos = $obj->mostrarVehiculo($sql);

                foreach ($datos as $key) {
                ?>

                    <tbody>
                        <tr>
                            <td><?php echo $key['placa'] ?></td>
                            <td><?php echo $key['color'] ?></td>
                            <td><?php echo $key['marca'] ?></td>
                            <td><?php echo $key['tipodv'] ?></td>
                            <td><?php echo $key['conductor'] ?></td>
                            <td><?php echo $key['propietario'] ?></td>
                        </tr>
                    <?php
                }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</main>

<?php include("static/footer.php") ?>