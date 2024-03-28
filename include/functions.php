<?php

    //Mensaje Esperado Via GET 
    function mensaje_esperado_get($variable,$tipo,$estado,$mensaje){
        if(isset($_GET[$variable])){
            //if($_GET[$variable] == 1){
                if($tipo == "alert"){
                    $regresa = '<div class="alert alert-'.$estado.'" role="alert">'.$mensaje.'</div>';
                }
                return $regresa;
            //}            
        }
    }

    //Return date time on string
    function hora_fecha(){
		$fecha = date("Y-m-d");
  		$hora = date("G:i:s");
		$fechahora = $fecha." ".$hora;
		return $fechahora;
	}
?>