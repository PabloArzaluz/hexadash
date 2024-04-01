<?php
//insert.php  
include("../include/connect.php");

if(!empty($_POST))
{
 $output = '';
    $nombre = mysqli_real_escape_string($mysqli, $_POST["nombre_cliente"]);  
    $empresa = mysqli_real_escape_string($mysqli, $_POST["empresa_cliente"]);  
    $telefonos = mysqli_real_escape_string($mysqli, $_POST["telefonos_cliente"]);  
    $email = mysqli_real_escape_string($mysqli, $_POST["email_cliente"]);  
    $direccion = mysqli_real_escape_string($mysqli, $_POST["direccion_cliente"]);
    $comentarios = mysqli_real_escape_string($mysqli, $_POST["comentarios_clientes"]);
    $query = "
    INSERT INTO clientes_hx(nombre, empresa, telefonos, correo, direccion, comentarios)  
     VALUES('$nombre', '$empresa', '$telefonos', '$email', '$direccion' , '$comentarios')
    ";
    if(mysqli_query($mysqli, $query))
    {
    $query_ultimo = "SELECT LAST_INSERT_ID();";
    
    $resultado_ultimo = mysqli_query($mysqli, $query_ultimo);
    $row_ultimo = mysqli_fetch_array($resultado_ultimo);
     $output .= '<label class="text-success">Se registro cliente exitosamente: '.$nombre.'</label>';
    }
    echo $output;
}
?>