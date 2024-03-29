<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/registro.css">
    <title>Estaqueros</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-auto text-center login-box asistentes">
            <a href="Inicio.php"><img class="avatar" src="../Images/Logo estaueros rojo y blanco.png" alt="logo de estaqueros"></a>
            <h1><?php echo $_SESSION['user'] ?></h1>

            <div class="opciones">
                <form action="Quiero-Participar.php" method="post">
                    <input type="submit" name="qParticipar" value="Quiero participar!" />
                    <?php include ("Quiero-Participar.php"); ?>
                </form>
                <form action="Quiero-salir.php" method="post">
                    <input type="submit" name="qSalir" value="Quiero salir" />
                    <?php include ("Quiero-salir.php"); ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>