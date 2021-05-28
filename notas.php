<?php
include_once("clasess/conexionopen.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="footer.css">
    <title>menu</title>
    <style type="text/css">
*{
    margin: 0px;
    padding: 0px;
     box-sizing: border-box;
     font-family: sans-serif;
}



	body{
    margin: 0;
    font-family: sans-serif;
   
}

header{
    width: 100%;
    background: #4e94ab;
}

#btn-menu{
    display: none;

}

header label{
    display: none;
    width: 30px;
    height:30px;
    padding: 10px;
    border-right:1px solid #fff;
}

#btn-menu{
    display: none;
}

header label:hover{
    cursor: pointer;
    background:  rgba(201, 26, 26, 0.5);
}
.menu ul {
margin: 0;
list-style: none;
padding: 0;
display: flex;
justify-content: center;
}
.menu li {
text-align: center;
flex-grow: 1;
border-right: 2px solid white;
transition: all 0.5s;
}

.menu li:hover{
background: rgba(0,0,0,0.3);
}

.menu li a {
display: block;
padding: 15px 20px;
color: #fff;
text-decoration: none;
}

@media (max-width:768px){
header label{
display:block
}
.menu{
position: absolute;
background: #4E94ab;
width: 70%;
margin: -70%;
}
.menu ul{
flex-direction: column;

}
.menu li {
border-top: 3px solid white;
}
}
#btn-menu:checked ~ .menu {
margin: 0;
}
*{
font-family: sans-serif;
border-radius: 5px;
}
.index{
background: url('2.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;

}
.demo {

position: absolute;

border: 1px solid black;
justify-content: space-around;
border-radius: 60px;
height: 750px;
position: center;
width: 580px;  

left: 50px;

}
.container-footer-all{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 40px;
   background: black; 
}
.colum3 label {
    font-size: 12px;
color: white;
}
h1 {
  color: white;
}



  </style>
</head>
<body >
    <header>

    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"><img src="5.png" alt="" width="30">></label>

    <nav class="menu">
        <ul>
            <li><a href="inicio.php">inicio</a></li>
            <li><a href="servicios.php">servicios</a></li>
            <li><a href="producto.php">productos</a></li>
            <li><a href="notas.php">notas</a></li>
            <li><a href="contactanos.php">contactanos</a></li>
        </ul>
    </nav>

    </header>







<div class="row" >
    <div class="col-3 col-md-2"></div>
    <div class="col-3 col-md-5">
        <form action="notas.php" method="POST">
        <label for="id"> id:</label>
            <input type="text" name="id" id="id" class="form-control" placeholder="id">
            <label for="nombre"> nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre">
            <label for="descripcion"> descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion">
            <label for="estado"> estado:</label>
            <input type="text" name="estado" id="estado" class="form-control" placeholder="estado"><br>
            <input type="submit" value="Ingresar" class="btn btn-primary" name="btningresar">
        </form>
        <?php

        if (isset($_POST['btningresar'])) {
            $_id = $_POST['id'];
            $_nombre = $_POST['nombre'];
            $_descripcion = $_POST['descripcion'];
            $_estado = $_POST['estado'];
            $conexion->query("INSERT INTO notas (id, nombre, descripcion, estado) VALUES('$_id','$_nombre','$_descripcion','$_estado')");
        }

        ?>
    </div>
    <div class="col-4 col-md-5">
    <center><form action="buscar_not.php" method="post">
            <label for="Buscar">Buscar por nombre</label>
            <input type="text" name="buscar" id="Buscar" class="form-control" placeholder="Ingrese nombre del producto"><br>
            <button class="btn btn-success">Buscar</button>
        </form></center> </div>  
   
    </div>
   
</div><br><br>
<div class="row">
    <div class="col-4 col-md-3"></div>
    <div class="col-4 col-md-6">
    <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>ESTADO</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM notas";
                $mostrar = mysqli_query($conexion, $query);
                while ($consulta = mysqli_fetch_array($mostrar)) {
                ?>

                    <tr>
                        <td><?php echo $consulta['id']; ?></td>
                        <td><?php echo $consulta['nombre']; ?></td>
                        <td><?php echo $consulta['descripcion']; ?></td>
                        <td><?php echo $consulta['estado']; ?></td> 
                        <td><a href="eliminar_not.php?id=<?php echo $consulta['id']; ?>"><button class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a><a href="modificar_not.php?id=<?php echo $consulta['id']; ?>"><button class="btn btn-success"><i class="fas fa-marker"></i></button></a></td> 
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
    <div class="col-4 col-md-3"></div>
</div><br><br><br><br><br><br>





    

<div class="row">
<footer>
        <div class="container-footer-all">
      <div class="conteiner-body">
      <div class="colum1">
      <h1> mas informacion de la empresa </h1>
      <p>
      Nuestros expertos en análisis, tecnología y negocios
       desbloquearán el valor de sus datos para alcanzar su
     máximo rendimiento en la era digital.</p>

    <p>Para hacer frente a  los  problemas complejos, 
    que  diseñamos  soluciones humana centros para entregar
    cada vez más  ambiciosos  proyectos de datos.</p>
    </div>




    <div class="colum2">

<h1> Redes sociales </h1>

<div class="row">
<img src="icons/descarga.png" >
<label >siguenos en facebook</label>
</div>

<div class="row">
<img src="icons/instagram.jpg">
<label >siguenos en instagram</label>
</div>

<div class="row">
<img src="icons/twitter.png" >
<label >siguenos en twiter</label>
</div>

<div class="row">
<img src="icons/google.jpg" >
<label href="https://es-la.facebook.com/r.php" >siguenos en google plus</label>
</div>
</div>




<div class="colum3">
<h1>informacion contactos</h1>

<div class="row2">
<img src="icons/home.png" >
<label >Data Learning,
republica de colombia
cll 59a 30-04</label>
</div>

<div class="row2">
<img src="icons/tele.png" >
<label >+57 3215154011</label>
</div>

<div class="row2">
<img src="icons/message.png" >
<label >adminyeimardb@gmail.com</label>
</div>

</div>   


      </div>
      </div>

      <div class="container-footer">
       
    <div class="copyright">
    2018 Todos los derechos reservado | <a href=""> login </a>
    </div>
    <div class="information">
    <a href=""> Informacion compañia </a> | <a href=""> Politicas y Politicas </a> | <a href=""> Terminos y condiciones </a>
    </div>
   
     </div>
</div>
</div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
</div>