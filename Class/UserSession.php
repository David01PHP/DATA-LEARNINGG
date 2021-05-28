<?php
class UsesSession{
    public function __construct()
    {
        session_start();
    }
    public function setCurrentUser($usuario)
    {
        $_SESSION['usuario'] = $usuario;
    }
    public function getCurrentUser()
    {
        return $_SESSION['usuario']; 
    }

    public function CloseSession()
    {
        session_unset();
        session_destroy();
    }
}
?>