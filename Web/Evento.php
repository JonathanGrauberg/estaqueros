<?php 
include('con_db.php');

if(isset($_POST['crearevento'])) {
    if(strlen($_POST['nombreevento']) >= 1 && strlen($_POST['fechaevento']) >= 1 && strlen($_POST['lugarevento']) >= 1){
        $nombreEvento=trim($_POST['nombreevento']);
        $fechaEvento=trim($_POST['fechaevento']);
        $lugarEvento=trim($_POST['lugarevento']);        
        $consulta="INSERT INTO event(name, date, location) VALUES ('$nombreEvento','$fechaEvento','$lugarEvento')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){            
            header("location:inicio.php");
        }else{
            echo '<script language="javascript">alert("Algo salió mal");</script>';
        }
    }else{
        echo '<script language="javascript">alert("Completá todos los campos!");</script>';
    }
}