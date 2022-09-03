<?php
include('con_db.php');

if (isset($_POST["ingrersar"])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña'] >= 1)) {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $consultaLogin = "SELECT * from user where user = '$usuario' and password = '$contraseña'";
        $resultadoLogin = mysqli_query($conex, $consultaLogin);
        $corroborar = mysqli_num_rows($resultadoLogin);
        if ($corroborar) {
            session_start();
            $consultaIdUser = "SELECT id FROM user WHERE user = '$usuario'";
            $resultadoIdUser = mysqli_query($conex, $consultaIdUser);
            $obtengoId = mysqli_fetch_array($resultadoIdUser);

            $idUser = $obtengoId['id'];
            $_SESSION['idUser'] = $idUser;
            $_SESSION['user'] = $usuario;


            header('location:../Web/inicio.php');           
        } else {
            echo '<script language="javascript">alert("El usuario no existe");</script>';
        }
    } else {
        echo '<script language="javascript">alert("Completá todos los campos");</script>';
    }
}
