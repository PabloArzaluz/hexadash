<?php
	session_start(); // crea una sesion
	include("include/connect.php");
	include("include/config.php");
	include("include/functions.php");
	
	/*if(!isset($_SESSION['id_user_hx'])){
		header("Location: index.php");
		exit();
	}*/

	if(isset($_POST['username-hexa'])){
		
		$username = preg_replace('([^A-Za-z0-9])', '', $_POST['username-hexa']);
        $pass = preg_replace('([^A-Za-z0-9])', '', hash("sha256",$_POST['password-hexa']));

		//procedural 
		$mysqliConnProc   = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		$stmt = $mysqliConnProc->prepare("SELECT id_user,nivel,nombre,apellidos,puesto from user_hx where username=? and password = ? and status=1 limit 1");
		$stmt->bind_param("ss",$username,$pass);
		$stmt->execute();
		$stmt->bind_result($id_usuario,$nivel_user,$nombre_user,$apellido_user,$puesto_user);
		$stmt->store_result();
	
		if($stmt->num_rows == 1){
			while($stmt->fetch()){
			//Hay coincodencia
			$_SESSION['id_usuario_hx'] = $id_usuario;
			$_SESSION['level_user_hx'] = $nivel_user;
			$_SESSION['nombre_user_hx'] = $nombre_user;
			$_SESSION['apellido_user_hx'] = $apellido_user;
			$_SESSION['puesto_user_hx'] = $puesto_user;
			
			//Registra acceso en BD
			$query_registrarLogAcceso = "INSERT INTO log_acceso_hx(id_usuario,time) values(".$id_usuario.",'".hora_fecha()."');";
			$registrarLogAcceso = mysqli_query($mysqli,$query_registrarLogAcceso) or die (mysqli_error());
			$query_registrarLastLogin = "UPDATE user_hx set ultimo_acceso='".hora_fecha()."' WHERE id_user='".$id_usuario."';";
			$registrarLastLogin = mysqli_query($mysqli,$query_registrarLastLogin) or die (mysqli_error());
			//Fin Registra Acceso en BD
			
			//Genera Permisos
			$selecciona_permisos = "select * from permisos_hx where id_user='".$id_usuario."';";
			$iny_selecciona_permisos =  mysqli_query($mysqli,$selecciona_permisos) or die(mysqli_error());
			$filaPermisos = mysqli_fetch_assoc($iny_selecciona_permisos);
			$_SESSION['permisos_modulos'] = $filaPermisos;
			 header('Location: dashboard.php');
			}
		}else{
			header('Location: index.php?error_log');
		}
		$stmt->close();
	}else{
		header('Location: index.php?asd');
	}
	
 ?>
