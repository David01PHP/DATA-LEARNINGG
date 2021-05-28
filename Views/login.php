
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
  <link rel="stylesheet" href="Views/css/style-login.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <title>.::Data-Learning::.</title>
</head>

<body>
  <br />
  <div class="container-fluid">
    <div class="row">
      <center>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="d-grid gap-3">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
              <br />
              <div class="col-12 user-img">
                <img src="Views/img/icon-login.png" th:src="@{/img/user.png}" />
              </div>
              <form method="POST"location="RegistrarUsuario.php">
                <h1 class="">¡INICIAR SESION!</h1>

                <div class="form-floating ">
                  <i class="fas fa-user form-control-feedback"></i>
                  <input type="text" class="form-control " name="usuario" placeholder="Usuario" required />
                  <label for="floatingInput">Usuario</label>

                </div>
                <br />
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" placeholder=" Password" required />
                  <label for="floatingInput" ">Password</label>
                </div>
                <br>
                <div class="d-grid gap-2">
                  <input type="submit" value="Ingresar" name="btnLogin" class="btn btn-outline-primary" />
                </div>

                <div class="form-group mx-sm-4 text-right">
                  <span class="">No tienes una cuenta?</span>
                </div>
                <div class="d-grid gap-2">
                  <a href="./Views/signup.php" class="btn btn-success">Registrarse</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </center>
    </div>
  </div>

  <?php
  // include_once("./assets/php-script/validarLogin.php");
  // require("./assets/Connection/dbCloseConexion.php");
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>