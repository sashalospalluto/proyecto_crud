<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/nuevoUsuario.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
    <link rel="shortcut icon" href="../imagenes/yell-ducal-equipo-programacion.png">
</head>


<body>
    <div class="contenedor">
        <div class="contenido-login">
            <form action="../controllers/NuevoUsuario.php" method="post">
                <div class="trans">
                    <!-- <img src="../imagenes/yell-ducal-equipo-programacion.png"> -->
                    <h2>Nuevo Usuario</h2>
                    <div class="input-div dni">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>USUARIO</h5>
                            <input type="text" name="user" class="input" minlength="5" maxlength="20">
                        </div>
                    </div>
    
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>CLAVE</h5>
                            <input type="password" name="pass" class="input" minlength="4" maxlength="14">
                        </div>
                    </div>
                        <input type="submit" class="btn" value="Crear">
                        <input type="button" class="btn" value="Volver" onclick="location='Principal.php'">
                    </div>
                </form>
        </div>

    </div>

</body>
<script src="../javascript/login.js"></script>
</html>
