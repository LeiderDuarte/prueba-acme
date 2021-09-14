<?php

require_once "../../conexion/conexion.php";
require_once "../../metodos/metodosConductor.php";

?>

<?php include("static/header.php") ?>

<?php include("static/nav.php") ?>

<main class="mt-2 pt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mb-3">
                <div class="card card-body">
                    <h4>Agregar Conductor</h4>
                    <br>
                    <form action="../../procesos/conductor/addConductor.php" method="POST" class="row g-3" onsubmit="return validar();">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cedula</label>
                            <input type="number" name="cedula" class="form-control" id="cedula" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Primer nombre</label>
                            <input type="text" name="pnombre" class="form-control" id="pnombre" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Segundo nombre</label>
                            <input type="text" name="snombre" class="form-control" id="snombre" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" id="apellidos" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Direccion</label>
                            <input type="text" name="direccion" class="form-control" id="direccion" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Telefono</label>
                            <input type="number" name="telefono" class="form-control" id="telefono" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" id="ciudad" require>
                        </div>

                        <div class="col-md-6">
                            
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" value="enviar" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("static/footer.php") ?>