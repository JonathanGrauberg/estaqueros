<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/estilos/registro.css">
    <title>Login</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-auto text-center login-box">
            <a href="#"><img class="avatar" src="/Images/Logo estaueros rojo y blanco.png" alt="logo de estaqueros"></a>
            <h1>Bienvenido</h1>
            <form method="post">
                <label for="Usuario">Usuario</label>
                <input type="text" name="usuario" placeholder="Escribe tu Usuario">

                <label for="Contraseña">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Escribe tu Contraseña">
               
                <input name="ingrersar" type="submit" value="Ingresar">
                <a href="/Registro/crear-usuario.php">No tengo Usuario</a>
            </form>
            <?php
                include('Ingresar.php');

                ?>
        </div>
    </div>
</body>

</html>