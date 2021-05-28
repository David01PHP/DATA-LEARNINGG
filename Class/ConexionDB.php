 <?php
    class ConexionDB
    {
        private $host;
        private $user;
        private $password;
        private $db;

        public function __construct($host = "localhost", $user = "root", $password = "", $db = "edusystemdb")
        {
            $this->host      = $host;
            $this->db        = $db;
            $this->user      = $user;
            $this->password  = $password;
           
        }
        public function EstalecerConexion()
        {
           
            $conexion = new mysqli($this->host,$this->user,$this->password,$this->db);
            error_reporting(0);

            if ($conexion->connect_errno) {
                echo "Oops,Parece que ha ocurrido un error";
            }
            return $conexion;
        }
        
    
        function __destruct()
        {
            mysqli_close($this->EstalecerConexion());
        }

        
    }
    ?>