<?php
    include_once "../models/Usuario.php";

    $id = $_GET['id'];
    $usuario = $_POST['user'];
    $clave = $_POST['pass'];

    $usuarioExistente= Usuario :: TraerPorID($id);
    if($usuarioExistente != null)
    {
        $usuarioRepetido = Usuario :: TraerUno($usuario);
        if($usuarioRepetido == null || empty($usuarioRepetido))
        {
            Usuario :: ModificarUno($usuario,$clave,$usuarioExistente->id);
        }
        header('Location: ../views/Principal.php');
    }
    else
    {
        header('Location: ../views/Principal.php');
    }
    
?>