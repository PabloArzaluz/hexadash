<?php
//insert.php  
include("../include/connect.php");
time_nanosleep(0,250000000);
if(!empty($_POST))
{
 $output = '';
    $folio_os = mysqli_real_escape_string($mysqli, $_POST["folio-os"]);  
    
    $query = "
        SELECT count(folio_orden) from orden_servicio_hx where folio_orden = '".$folio_os."'
    ";
    if(mysqli_query($mysqli, $query))
    {
    
    $resultado_validacion = mysqli_query($mysqli, $query);
    $row_validacion = mysqli_fetch_array($resultado_validacion);
    $output = $row_validacion[0];
    
     
    }
    echo $output;
}
?>