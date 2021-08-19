<?php
    include_once "../models/Usuario.php";

    $usuario = $_POST['user'];
    $clave = $_POST['pass'];

    if($_POST['user']!=null && $_POST['pass']!=null)
    {
        $usuarioRepetido= Usuario :: TraerUno($usuario);
        if($usuarioRepetido == null || empty($usuarioRepetido))
        {
            Usuario :: CargarNuevoUsuario($usuario,$clave);
        }
        
        header('Location: ../views/Principal.php');
    }
    else
    {
         header('Location: ../views/Principal.php');
    }
?>