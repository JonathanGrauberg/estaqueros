<?php
session_start();

include('con_db.php');

foreach ($_POST as $name => $value) {
    // echo $name;
    global $name;
}

$_SESSION['idEvent'] = $name;

$consultaAsistencias = "SELECT * from attendant a inner JOIN user u ON a.id_user = u.id where id_event = " . $name;
$resultadoAsistencias = mysqli_query($conex, $consultaAsistencias);
