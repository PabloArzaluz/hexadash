<?php
    include("config.php");
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

    function regresa_estatus_os($estado,$tipo_regresa){
        $arr_estatus_os = $GLOBALS['arr_estatus_os'];
        $arr_estatus_os_relation_color = $GLOBALS['arr_estatus_os_relation_color'];
        
        $val = $arr_estatus_os[$estado];
        $val_relation_color = $arr_estatus_os_relation_color[$estado];

        $output = "";

        if($tipo_regresa == "plain"){
            $output = $val;
        }

        if($tipo_regresa == "badge-status"){
            $output = ' <div class="dm-badge-text">
                            <span class="badge-dot dot-'.$val_relation_color.'"></span>
                            <span>'.$val.'</span>
                        </div>';
        }
        $danger =  '<span class="media-badge color-white bg-danger">on hold</span>';
        $warning = '<span class="media-badge color-white bg-warning">late</span>';

        return $output;
    }

    function formatea_fecha($fecha,$formato){
        if($fecha == "" || $fecha == "0000-00-00"){
            $formatted_date = "Sin informacion";
         }else{
            $date = $fecha;
            $dateTime = new DateTime($date);
            $formatted_date=date_format ( $dateTime, 'd-m-Y' );  
         }
         return $formatted_date;
    }
?>