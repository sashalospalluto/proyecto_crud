<?php
    include_once "../models/Usuario.php";

    session_start();
    $usuario = $_POST['user'];
    $clave = $_POST['pass'];

    if(empty($_SESSION['usuario']))
    {
        $usuarios = Usuario :: Login($usuario,$clave);

        if($usuarios!=null && !empty($usuarios)) 
        {
            $_SESSION['usuario'] = $usuarios;
            $_SESSION['clave'] = $clave;
    
            header('Location: ../views/Principal.php');
        }
        else
        {
            header('Location: ../views/login.php');
        }
    }
    else
    {
        header('Location: ../views/Principal.php');
    }

?>