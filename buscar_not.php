<?php
include_once("layout.php");
include_once("clasess/conexionopen.php");
?>

<div class="row">
    <div class="col-4 col-md-4"></div>
    <div class="col-4 col-md-4">

    <?php 
        $_id = $_POST['buscar'];

        $_buscar = mysqli_query($conexion, "SELECT * FROM notas WHERE nombre LIKE '$_id%'");
        $consulta = mysqli_fetch_array($_buscar);

    ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                       <td><?php echo $consulta['id']; ?></td>
                        <td><?php echo $consulta['nombre']; ?></td>
                        <td><?php echo $consulta['descripcion']; ?></td>
                        <td><?php echo $consulta['estado']; ?></td> 
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-4 col-md-4"></div>
</div>


