<?php
include_once "AccesoDatos.php";

class Usuario
{
    public static function Login($usuario,$clave)
    {
        $objetoAccesoDato = AccesoDatos::DameUnObjetoAcceso();
     
        $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :clave");

        $consulta->bindValue(':usuario',$usuario , PDO::PARAM_STR); 
        $consulta->bindValue(':clave', $clave, PDO::PARAM_STR);

        $consulta->execute();
        
        $respuesta = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $respuesta; 
    }

    public static function MostrarTodos()
    {
        $objetoAccesoDato = AccesoDatos::DameUnObjetoAcceso();
     
        $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuarios");

        $consulta->execute();
        
        $respuesta = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $respuesta; 
    }

    public static function TraerUno($usuario)
    {
        $objetoAccesoDato = AccesoDatos::DameUnObjetoAcceso();
     
        $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuarios where usuario = :usuario");
        $consulta->bindValue(':usuario',$usuario , PDO::PARAM_STR); 

        $consulta->execute();
        
        $respuesta = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $respuesta; 
    }

    public static function CargarNuevoUsuario($usuario, $clave)
    {
        $objetoAccesoDato = AccesoDatos::DameUnObjetoAcceso();
     
        $consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO usuarios (usuario, clave) VALUES (:usuario,:clave)");

        $consulta->bindValue(':usuario',$usuario , PDO::PARAM_STR); 
        $consulta->bindValue(':clave', $clave, PDO::PARAM_STR);

        $consulta->execute();
        
        $respuesta = $objetoAccesoDato->RetornarUltimoIdInsertado();

        return $respuesta; 
    }

    public static function TraerPorID($id)
    {
        $objetoAccesoDato = AccesoDatos::DameUnObjetoAcceso();
     
        $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuarios where id = :id");
        $consulta->bindValue(':id',$id , PDO::PARAM_INT); 

        $consulta->execute();
        
        $respuesta = $consulta->fetch(PDO::FETCH_OBJ);

        return $respuesta; 
    }

    public static function ModificarUno($usuario,$clave,$id)
    {
        $objetoAccesoDato = AccesoDatos::DameUnObjetoAcceso();
     
        $consulta =$objetoAccesoDato->RetornarConsulta("UPDATE usuarios SET usuario = :usuario , clave = :clave WHERE id = :id");

        $consulta->bindValue(':usuario',$usuario , PDO::PARAM_STR); 
        $consulta->bindValue(':clave', $clave, PDO::PARAM_STR);
        $consulta->bindValue(':id', $id, PDO::PARAM_INT);

        $consulta->execute();
        
        $respuesta = $objetoAccesoDato->RetornarUltimoIdInsertado();

        return $respuesta; 
    }

    public static function EliminarUno($id)
    {
        $objetoAccesoDato = AccesoDatos::DameUnObjetoAcceso();
     
        $consulta =$objetoAccesoDato->RetornarConsulta("DELETE FROM usuarios WHERE id = :id");

        $consulta->bindValue(':id', $id, PDO::PARAM_INT);

        $consulta->execute();
        
        $respuesta = $objetoAccesoDato->RetornarUltimoIdInsertado();

        return $respuesta; 
    }

}



?>