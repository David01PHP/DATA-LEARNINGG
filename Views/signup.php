<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style-Signup.css">

    <title>.::Data-Learning::.</title>
</head>

<body>
    <br>
    <div class="container-fluid">
        <div class="row">
            <center>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="d-grid gap-3">
                        <div class="shadow-lg p-3 mb-5 bg-body rounded">
                            <br>
                            <form   method="POST" class="form">
                            
                                <div class="col-12 user-img">
                                    <img src="./img/icon-signup.png" th:src="@{/img/user.png}" />
                                </div>
                                <h1>¡REGISTRARSE!</h1>
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Nombre" class="form-control " required >
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="usuario" placeholder="Nombre de usuario personalizado" class="form-control" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                                </div>

                                <div class="col-auto">
                                    <label for="privilegio"></label>
                                    <select class="form-select" id="privilegio" name="privilegio" >
                                        <option selected>-Seleccionar un rol- </option>
                                        <option value="2"> Profesor</option>
                                        <option value="3">Alumno</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
                                </div>
                                <br>
                                <div class="d-grid gap-2 ">
                                    <input type="submit" value="Crear Cuenta" name="btnregistrar" class="btn btn-outline-success">
                                </div>
                                <div class="flex-col-c p-t-170 p-b-40">
                                    <span class="OLVIDE">
                                        Ya tiene una cuenta?
                                    </span>
                                    <br>
                                    <div class="d-grid gap-2 ">
                                        <a id="btnSA_3" href="../index.php" class="btn btn-outline-warning0">
                                            Iniciar Sesón!
                                        </a>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </center>

        </div>

    </div>
    
    <?php
   require_once('InsertarUsuario.php');
    ?>
   
</body>
<script></script>

</html>