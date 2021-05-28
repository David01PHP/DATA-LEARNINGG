<?php
include_once("./include/header.php");
include_once("class/conexionopen.php");
?>
<div class="row">
    <div class="col-4 col-md-5"></div>
    <?php
 
    if (isset($_GET['id'])) {
        $_id = $_GET['id'];
        $seleccionar = mysqli_query($conexion, "SELECT * FROM $tb1 WHERE id = '$_id'");

        if (mysqli_num_rows($seleccionar) == 1) {
            $row = mysqli_fetch_array($seleccionar);
            $_nombre = $_POST['nombre'];
            $_descripcion = $_POST['descripcion'];
            $_estado = $_POST['estado'];
        }
    }
    if (isset($_POST['btnmodificar'])) {
        $_nombre = $_POST['nombre'];
        $_descripcion = $_POST['descripcion'];
        $_estado = $_POST['estado'];
        mysqli_query($conexion, "UPDATE $tb1 SET nombre = '$_nombre', descripcion = '$_descripcion', estado = '$_estado' WHERE id = '$_id'");
        header("location:notas.php");
    }
    ?>
    <div class="col-4 col-md-2">
        <form action="modificar.php?id=<?php echo $_GET['id']; ?>" method="post">
        <label for="nombre"> nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre">
            <label for="descripcion"> descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion">
            <label for="estado"> estado:</label>
            <input type="text" name="estado" id="estado" class="form-control" placeholder="estado"><br>
            <input type="submit" value="modificar" class="btn btn-primary" name="btnmodificar">
        </form>
    </div>
    <div class="col-4 col-md-5"></div>
</div>



<?php
include_once("./include/footer.php");
?>

