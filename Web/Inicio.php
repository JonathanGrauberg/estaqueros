<?php
//  session_start(); 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/registro.css">
    <title>Eventos | Estaqueros</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-auto text-center login-box inicio">
            <a href="../Registro/Ingreso.php"><img class="avatar" src="../Images/Logo estaueros rojo y blanco.png" alt="logo de estaqueros"></a>
            <h1>Eventos</h1>

            <?php
            include('consulta-eventos.php');

            while ($CantidadDeEventos = mysqli_fetch_array($resultadoEventos)) {
            ?>
                <form action="../Web/Asistencias.php" method="post">
                    <label for="<?php echo $CantidadDeEventos['name'] ?>"></label>
                    <input type="submit" value="<?php echo $CantidadDeEventos['name'] ?>" name="<?php echo $CantidadDeEventos['id'] ?>">

                </form>
            <?php
            }

            ?>
            <!-- <input name="crearUnEvento" type="submit" value="Crear Evento" class="btcrearevento"> -->
            <a href="Crear-evento.php" class="btn">+</a>


            <?php
            foreach ($_POST as $name => $value) {
                session_start();
                $_SESSION['idEvent'] = $name;  
            }
            
                    
            

            ?>
        </div>
    </div>
</body>

</html>