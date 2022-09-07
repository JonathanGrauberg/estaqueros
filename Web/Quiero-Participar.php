<?php
include('con_db.php');

if (isset($_POST["qParticipar"])) {
    session_start();
    $idUser = $_SESSION['idUser'];
    $idEvent = $_SESSION['idEvent'];
    $consultaAttendant = "SELECT * from attendant where id_event = '$idEvent' and id_user = '$idUser'";
    $resultadoAttendant = mysqli_query($conex, $consultaAttendant);
    $corroborar = mysqli_num_rows($resultadoAttendant);
    if ($corroborar) {
        echo '<script language="javascript">alert("Ya estás agregado en la lista!");</script>';
    } else {
        $insertAttendant = "INSERT INTO attendant(id_event, id_user) VALUES ('$idEvent', '$idUser')";
        $resultado = mysqli_query($conex, $insertAttendant);
        if ($resultado) {
            header("refresh:1;Inicio.php");
            echo '<script language="javascript">alert("Listo! ya estas anotado en el evento");</script>';
        }
    }
}
