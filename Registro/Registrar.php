<?php 
include('con_db.php');

if(isset($_POST['crear'])) {
    if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1){
        $usuario=trim($_POST['usuario']);
        $contraseña=trim($_POST['contraseña']);
        $telefono=trim($_POST['telefono']);
        $email=trim($_POST['email']);
        $consulta="INSERT INTO user(user, password, phone, email) VALUES ('$usuario','$contraseña','$telefono','$email')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            echo '<script language="javascript">alert("Creado con exito");</script>';
            header("location:Ingreso.php");
        }else{
            echo '<script language="javascript">alert("Algo salió mal");</script>';
        }
    }else{
        echo '<script language="javascript">alert("Completá todos los campos!");</script>';
    }
}
