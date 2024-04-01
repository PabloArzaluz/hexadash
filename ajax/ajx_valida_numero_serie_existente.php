<?php
//insert.php  
include("../include/connect.php");
time_nanosleep(0,500000000);
if(!empty($_POST))
{
 $output = '';
    $numero_serie = mysqli_real_escape_string($mysqli, $_POST["serial-number"]);  
    
    $query = "
        SELECT count(numero_serie) from orden_servicio_hx where numero_serie = '".$numero_serie."'
    ";
    if(mysqli_query($mysqli, $query))
    {
    
    $resultado_validacion = mysqli_query($mysqli, $query);
    $row_validacion = mysqli_fetch_array($resultado_validacion);

    if($row_validacion[0] > 0){
        $output .= '<br><div class="alert alert-primary" role="alert">
        Ya existe registro de '.$row_validacion[0].'  ingreso(s) previos con este mismo numero de serie anteriormente
      </div>';
    }else{
        $output .= '<br><div class="alert alert-dark" role="alert">
        El equipo no tiene registros previos de atenciones
      </div>';
    }
     
    }
    echo $output;
}
?>