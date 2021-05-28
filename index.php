<?php
include_once("./include/header.php");
?>

<p>  efrbgwehlsbtueuibveutblptionts dhbfavklehyl fe bfvaih eclasd 
  eutbh´pwetnhb´setibnet esntb t b wptp bg ´pentp bpej psr b .eu8tr v9qwbrf 
 euib oasyfo seoutbnpsuilo sbañdjkvNÁWUIBV´SDBN{ SDIFB+AEOMRBETPB,K  JBN ZBVFA
ALUBFVÁSNDF´NAP PAN LADFV  PERTHOPN  ÑSDJF VLEIWGF´webv clñ} </p>

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

<?php
include_once("./include/footer.php");
?>