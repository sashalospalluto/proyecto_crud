<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/css/all.min.css">
</head>

<?php
    session_start();
    if(!empty($_SESSION['usuario']))
    {
        header('Location: controllers/login.php');
    }
    else
    {
        session_destroy();
?>

    <body>
        <div class="contenedor">
            <div class="contenido-login">
                <form action="controllers/login.php" method="post">
                    <div class="trans">
                        <img src="imagenes/yell-ducal-equipo-programacion.png">
                        <h2>sign in</h2>
                        <div class="input-div dni">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>USUARIO</h5>
                                <input type="text" name="user" class="input">
                            </div>
                        </div>
        
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>CLAVE</h5>
                                <input type="password" name="pass" class="input">
                            </div>
                        </div>
                            <a>Olvide la clave</a>
                            <input type="submit" class="btn" value="Iniciar Sesion">
                    </div>
                </form>
            </div>

        </div>

    </body>
    <script src="javascript/login.js"></script>
    </html>
<?php
}
?>