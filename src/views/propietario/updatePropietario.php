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
                        <th>Accion</th>
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
                            <td>
                                <a href="../../views/propietario/editPropietario.php?id=<?php echo $key['id'] ?>" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-marker"></i> Actualizar
                                </a>

                                <a href="../../procesos/propietario/deletePropietario.php?id=<?php echo $key['id'] ?>" class="btn btn-danger btn-sm">
                                    <i class="far fa-trash-alt"></i> Borrar
                                </a>
                            </td>
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