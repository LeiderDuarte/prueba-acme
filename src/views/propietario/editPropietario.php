<?php

    require_once "../../conexion/conexion.php";
    $obj= new conectar();
    $conexion=$obj->conexion();
    $id=$_GET['id'];
    $sql="SELECT * FROM propietario where id='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);

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
                    <form action="../../procesos/propietario/updatePropietario.php" method="POST" class="row g-3">

                        <input type="text" hidden="" value="<?php echo $id?>" name="id">

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cedula</label>
                            <input type="number" name="cedula" value="<?php echo $ver[1] ?>" class="form-control" id="">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Primer nombre</label>
                            <input type="text" name="pnombre" value="<?php echo $ver[2] ?>" class="form-control" id="">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Segundo nombre</label>
                            <input type="text" name="snombre" value="<?php echo $ver[3] ?>" class="form-control" id="">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Apellidos</label>
                            <input type="text" name="apellidos" value="<?php echo $ver[4] ?>" class="form-control" id="">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Direccion</label>
                            <input type="text" name="direccion" value="<?php echo $ver[5] ?>" class="form-control" id="">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Telefono</label>
                            <input type="number" name="telefono" value="<?php echo $ver[6] ?>" class="form-control" id="">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Ciudad</label>
                            <input type="text" name="ciudad" value="<?php echo $ver[7] ?>" class="form-control" id="">
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