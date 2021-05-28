<?php
require_once 'ConexionDB.php';
require_once 'Persona.php';

class RegistrarUsuario extends Persona
{
    protected $Usuario;
    protected $Password;
    
    public function __construct($nombre,$apellido,$usuario,$email,$idprivilegio,$password)
    {
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->Usuario = $usuario;
        $this->Email = $email;
        $this->Privilegio = $idprivilegio;
        $this->Password = $password;
        ini_set('date.timezone', 'America/Bogota');
        $this->FechaRegistro = date(DATE_RFC2822);
      
    
    }
    public function InsertarUsuario()
    {
        $nombre = $this->Nombre;
        $apellido = $this->Apellido;
        $usuario = $this->Usuario;
        $email = $this->Email;
        $idprivilegio = $this->Privilegio;
        $password = $this->Password;
        $fecharegistro = $this->FechaRegistro;

        $Conexion = New ConexionDB();
        $Conexion->EstalecerConexion()->query("INSERT INTO usuario(nombre, apellido , usuario ,email,id_privilegio,password ,fecha_registro) VALUES ('$nombre','$apellido','$usuario','$email','$idprivilegio','$password','$fecharegistro')");
        echo '
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        jQuery(function(){   
            swal({
                  title: "¡Bien!",
                  text: "Te has registrado con exito",
                  type: "success",
                  //timer: 3000
             }, 
             function(){
                  window.location.href = "../../data-learning/index.php";
                  
             })
            });
        </script>
        <script type="text/javascript" src="../Views/js/EvitarReenvio.js"></script>
        ';


    }
}

?>