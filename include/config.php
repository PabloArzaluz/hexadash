<?php

    date_default_timezone_set('America/Mexico_City');
    
	$fecha = date("Y-m-d");
  	$hora = date("G:i:s");

	$GLOBALS['arr_estatus_os'] = $arr_estatus_os;
	$arr_estatus_os = array(
		1=>"Registrado",
		2=>"En Revision",
	);

	$GLOBALS['arr_estatus_os_relation_color'] = $arr_estatus_os_relation_color;
	$arr_estatus_os_relation_color = array(
		1=>"default",
		2=>"info",
	);
?>