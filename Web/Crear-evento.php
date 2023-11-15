<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/registro.css">
    <title>Crear Evento | Estaqueros</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-auto text-center login-box">
            <a href="../Web/inicio.php"><img class="avatar" src="../images/Logo estaueros rojo y blanco.png" alt="logo de estaqueros"></a>
            <h1>Crear Evento</h1>
            <form method="post">
                <label for="nombreevento">Nuevo Evento</label>
                <input type="text" name="nombreevento" placeholder="Nombre">

                <label for="fechaevento">Fecha del Evento</label>
                <input type="date" name="fechaevento">

                <label for="lugarevento">Lugar del Evento</label>
                <input type="text" name="lugarevento" placeholder="Lugar">

                <input name="crearevento" type="submit" value="Crear">
            </form>

            <?php
            include("evento.php");
            ?>

        </div>
    </div>
</body>