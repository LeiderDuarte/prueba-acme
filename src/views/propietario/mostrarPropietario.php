<?php

require_once "../../conexion/conexion.php";
require_once "../../metodos/metodosPropietario.php";

?>

<?php include("static/header.php") ?>

<?php include("static/nav.php") ?>

<main class="mt-2 pt-2">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Ciudad</th>
                    </tr>
                </thead>

                <?php

                $obj = new metodosPropietario();
                $sql = "SELECT * FROM propietario";
                $datos = $obj->mostrarPropietario($sql);

                foreach ($datos as $key) {
                ?>

                    <tbody>
                        <tr>
                            <td><?php echo $key['cedula'] ?></td>
                            <td><?php echo $key['pnombre'] ?></td>
                            <td><?php echo $key['snombre'] ?></td>
                            <td><?php echo $key['apellidos'] ?></td>
                            <td><?php echo $key['direccion'] ?></td>
                            <td><?php echo $key['telefono'] ?></td>
                            <td><?php echo $key['ciudad'] ?></td>
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