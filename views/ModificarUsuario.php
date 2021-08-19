<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/modificarUsuario.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
</head>

<?php
    include_once "../models/Usuario.php";

    if(!isset($_GET['id']))
    {
        header('Location: Principal.php');
    }

    $usuario = Usuario :: TraerPorID($_GET['id']);
?>

<body>
    <div class="contenedor">
        <div class="contenido-login">
            <form action="../controllers/ModificarUsuario.php?id=<?php echo $usuario->id; ?>" method="post">
                <div class="trans">
                    <!-- <img src="../imagenes/yell-ducal-equipo-programacion.png"> -->
                    <h2>Modificar Usuario</h2>
                    <div class="input-div dni">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>USUARIO</h5>
                            <input type="text" name="user" class="input" minlength="5" maxlength="20" value=<?php echo $usuario->usuario?>>
                        </div>
                    </div>
    
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>CLAVE</h5>
                            <input type="password" name="pass" class="input" minlength="4" maxlength="14" value=<?php echo $usuario->clave?>>
                        </div>
                    </div>
                        <input type="submit" class="btn" value="Modificar">
                        <input type="button" class="btn" value="Volver" onclick="location='Principal.php'">
                    </div>
                </form>
        </div>
    </div>

</body>
</html>
