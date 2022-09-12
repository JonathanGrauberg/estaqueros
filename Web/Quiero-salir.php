<?php
include('con_db.php');

if (isset($_POST["qSalir"])) {
    session_start();
    $idUser = $_SESSION['idUser'];
    $idEvent = $_SESSION['idEvent'];
    $consultaAttendant = "SELECT * from attendant where id_event = '$idEvent' and id_user = '$idUser'";
    $resultadoAttendant = mysqli_query($conex, $consultaAttendant);
    $corroborar = mysqli_num_rows($resultadoAttendant);
    if ($corroborar) {
        $deleteAttendant = "DELETE FROM attendant WHERE id_event = '$idEvent' and id_user = '$idUser'";
        $resultado = mysqli_query($conex, $deleteAttendant);
        if ($resultado) {
            header("refresh:1;Inicio.php");
            echo '<script language="javascript">alert("Listo! ya no estas en la lista");</script>';
        }
    } else {
        header("refresh:1;Inicio.php");
        echo '<script language="javascript">alert("Tenes que estar en la lista primero.");</script>';
    }
}
