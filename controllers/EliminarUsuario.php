<?php
    include_once "../models/Usuario.php";

    $id = $_GET['id'];

    $usuarioExistente= Usuario :: TraerPorID($id);

    if($usuarioExistente != null)
    {
        Usuario :: EliminarUno($id);
        header('Location: ../views/Principal.php');
    }
    
?>