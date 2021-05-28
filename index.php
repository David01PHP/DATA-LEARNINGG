<?php
include_once("./include/header.php");
?>



<?php
session_start();
require_once('./class/ValidarUsuario.php');
require_once('./Views/login.php');

if (isset($_POST['btnLogin'])) {

    $ValidarUsuario = new ValidarUsuario($_POST['usuario'], $_POST['password']);
    if (mysqli_num_rows($ValidarUsuario->VerificarUsuario()) > 0) {

        $_SESSION['usuario'] = $usuario;
        header('location:./App/admin/AdminPanel.php');
        exit;
    } else {
        echo '
    <script font-face="Century Gothic">
    alert("Usuariuo y/o Contraseña Incorrectos...[Por favor verifique los datos introducidos]");
    window.location = "./";
    </script>
    ';
        exit;
    }
}
?>
<?php
include_once("./include/footer.php");
?>