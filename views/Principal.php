
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/principal.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
    <title>crud</title>
</head>
<body>

    <?php
    include_once "../models/Usuario.php";
    $usuarios = Usuario :: MostrarTodos();
    ?>
    <header class='header'>
        <div class="menu">
            <div class="contenedor-header">
                <p class="logo">CRUD USUARIOS</p>
                <nav>
                    <ul class="lista-menu">
                        <li><a href="NuevoUsuario.php" class='a-lista-menu'>Nuevo usuario</li></a>
                        <li><a href="../controllers/logout.php" class='a-lista-menu'>Cerrar sesion</li></a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <h1>BIENVENIDO</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>CLAVE</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
                <?php
                    foreach ($usuarios as $usuario)
                    {                   
                ?>
                    <tr>
                        <td> <?php echo $usuario['id']?> </td>
                        <td> <?php echo $usuario['usuario']?> </td>
                        <td> <?php echo $usuario['clave']?> </td>
                        <td> 
                            <a href="ModificarUsuario.php?id=<?php echo $usuario['id']; ?>"><i class="fas fa-edit"></i></a>
                            <a href="../controllers/EliminarUsuario.php?id=<?php echo $usuario['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
        </table>
    </div>




    
</body>
</html>