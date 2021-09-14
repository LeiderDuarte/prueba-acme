<?php

require_once "../../conexion/conexion.php";
require_once "../../metodos/metodosCrud.php";

?>

<?php include("static/header.php") ?>

<?php include("static/nav.php") ?>

<main class="mt-2 pt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mb-3">
                <div class="card card-body">
                    <h4>Agregar Vehiculo</h4>
                    <br>
                    <form action="../../procesos/vehiculo/addVehiculo.php" method="POST" class="row g-3" onsubmit="return validar();">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Placa</label>
                            <input type="text" name="placa" id="placa" class="form-control" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Color</label>
                            <input type="text" name="color" id="color" class="form-control" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" require>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Tipo de Vehiculo</label>
                            <select class="form-select" name="tipodv" id="tipodv" require>
                                <option selected disabled value="">Selecione el tipo</option>
                                <option>Particular</option>
                                <option>Publico</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Conductor</label>
                            <input type="text" name="conductor" id="conductor" class="form-control" require>
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Propietario</label>
                            <input type="text" name="propietario" id="propietario" class="form-control" require>
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