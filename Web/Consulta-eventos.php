<?php

include('con_db.php');
// cantidad de eventos
$consultaEventos = "SELECT * from event";
$resultadoEventos = mysqli_query($conex, $consultaEventos);



