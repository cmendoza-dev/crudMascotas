<?php
/*
Este archivo muestra un formulario que se envía a insertr.php, el cual guardará los datos
*/
?>
<?php include_once 'encabezado.php' ?>
<div class="row">
    <div class="col-12">
        <h1>Agregar</h1>
        <div class="justify-content-center align-items-center">
            <form action="insertar.php" method="POST" class="w-50 ">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de mascota" required>
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad de mascota" required>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="./listar.php" class="btn btn-warning">Ver todas</a>
            </form>
        </div>
    </div>
</div>
<?php include_once 'pie.php' ?>