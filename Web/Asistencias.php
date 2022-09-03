<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/estilos/registro.css">
    <title>Eventos | Estaqueros</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-auto text-center login-box asistentes">
            <a href="inicio.php"><img class="avatar" src="/Images/Logo estaueros rojo y blanco.png" alt="logo de estaqueros"></a>
            <h1>Participantes</h1>
            <form method="POST">
                <?php
                include('consulta-asistencias.php');

                while ($CantidadDeAsistencias = mysqli_fetch_array($resultadoAsistencias)) {
                ?>
                    <form method="post">
                        <input type="text" value="<?php echo $CantidadDeAsistencias['user'] ?>" class="mitad">
                    </form>
                    <form method="post">
                        <input type="text" value="<?php echo "$ " . $CantidadDeAsistencias['monto'] ?> " class="mitad">
                    </form>
                <?php
                }
                ?>
                <input name="confirmarAsistencia" type="submit" value="Confirmar asistencia" class="btcrearevento">
            </form>
            <?php
            include('Crear-asistencia.php');
            ?>
        </div>
    </div>
</body>

</html>