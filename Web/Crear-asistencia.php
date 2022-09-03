<?php


include('con_db.php');


if (isset($_POST["confirmarAsistencia"])) {
    if (!strlen($_SESSION['idUser'])) {
        $idEvent = $_SESSION['idEvent'];
        $idUser = $_SESSION['idUser'];
        $consultaAttendant = "INSERT INTO attendant(id_event, id_user) VALUES ('$idEvent','$idUser')";
        $resultadoAttendant = mysqli_query($conex, $consultaAttendant);
        header("Refresh:1");
    } else {
        echo "Ya estás confirmado al evento!";
    }
} else {
    echo '<script language="javascript">alert("ALGO ESTOY HACIENDO MAL");</script>';
}

echo $_SESSION['idUser'];
echo $_SESSION['idEvent'];
