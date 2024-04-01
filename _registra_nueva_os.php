<?php
session_start();
include("include/connect.php");
include("include/config.php");
include("include/functions.php");


if(!empty($_POST)){
    
    $cliente        =   $_POST["cliente"];
    $tipo_servicio        =   $_POST["tipo-servicio"];
    $folio_os        =   $_POST["folio-os"];
    $fecha_recepcion        =   $_POST["fecha_recepcion"];
    $recibido_por        =   $_POST["recibido_por"];
    $tipo_equipo            =   $_POST["tipo_equipo"];
    $marca_equipo           =   $_POST["marca_equipo"];
    $modelo_equipo          =   $_POST["modelo_equipo"];
    $serial_number          =   $_POST["serial-number"];
    
    $asunto_falla           =   $_POST["asunto_falla"];
    $descripcion_falla          =   $_POST["descripcion_falla"];
    $comentarios_observaciones_falla        =   $_POST["comentarios_observaciones_falla"];
    $accesorios_adicionales_os        =   $_POST["accesorios_adicionales_os"];
    $asignacion_dpto        =   $_POST["asignacion_dpto"];
    

    //Validar Folio Primero
    $validar_folio = "SELECT count(folio_orden) from orden_servicio_hx WHERE folio_orden = '".$_POST["folio-os"]."';"; 
    $q_validar_folio = mysqli_query($mysqli, $validar_folio);
    $f_validar_folio = mysqli_fetch_array($q_validar_folio);

    if($f_validar_folio[0] > 0){
        //Folio ya registrado
        header("Location:nueva-orden-servicio.php?folio_duplicado");
        exit();
    }else{
        //Folio Disponible
        $q_inserta_os = "
            INSERT INTO orden_servicio_hx(folio_orden, registrado, registrado_por, id_cliente, id_marca, id_tipo, modelo,numero_serie,tipo_servicio,asunto_falla,descripcion_falla,comentarios_observaciones_falla,accesorios_adicionales,status_actual,ultima_actualizacion_status,departamento_asignado,fecha_ingreso)  
            VALUES('".$folio_os."','".hora_fecha()."', '".$_SESSION['id_usuario_hx']."', ".$cliente.", ".$marca_equipo.", ".$tipo_equipo." , '".$modelo_equipo."','".$serial_number."','".$tipo_servicio."','".$asunto_falla."','".$descripcion_falla."','".$comentarios_observaciones_falla."','".$accesorios_adicionales_os."',1,'".hora_fecha()."',".$asignacion_dpto.",'".$fecha_recepcion ."')
            ";
            $i_inserta_os = mysqli_query($mysqli, $q_inserta_os);
            
            $resultado_ultimo = mysqli_query($mysqli, "SELECT LAST_INSERT_ID();");
            $row_ultimo = mysqli_fetch_array($resultado_ultimo);

            $q_actualiza_estatus = "INSERT INTO historial_status_os_hx(id_os, status_cambio_a, fechahora, usuario_cambio)  
            VALUES('".$row_ultimo[0]."',1,'".hora_fecha()."','".$_SESSION['id_usuario_hx']."');
            ";
            $i_actualiza_estatus = mysqli_query($mysqli, $q_actualiza_estatus);
            header("Location:listado_os.php?registrada_nueva_os");
    }
    
    
}else{
    header("dashboard.php");
    exit();
}
?>