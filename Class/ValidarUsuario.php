<?php
require_once('ConexionDB.php');

class ValidarUsuario 
{
    private $user;
    private $pass;
    public function __construct($user,$pass) {
        $this->user = $user;
        $this->pass = $pass;
        
    }
    public function VerificarUsuario()
    {
        $user = $this->user;
        $pass = $this->pass;
      
        $query ="SELECT * FROM tbadmin WHERE NickAdmin = '$user' AND PassAdmin = '$pass'";

        $conexion = new ConexionDB();
        $process = mysqli_query($conexion->EstalecerConexion(),$query);
        return $process;
    }
    
}

?>