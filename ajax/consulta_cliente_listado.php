<?php
include("../include/connect.php");

// Number of records fetch
$numberofrecords = 10;

if(!isset($_POST['searchTerm'])){

	// Fetch records
	$stmt = $connPDO->prepare("SELECT * FROM clientes_hx ORDER BY 1 desc LIMIT :limit");
	$stmt->bindValue(':limit', (int)$numberofrecords, PDO::PARAM_INT);
	$stmt->execute();
	$usersList = $stmt->fetchAll();

}else{

	$search = $_POST['searchTerm'];// Search text
	
	// Fetch records
	$stmt = $connPDO->prepare("SELECT * FROM clientes_hx WHERE nombre like :nombre or empresa like :nombre ORDER BY nombre LIMIT :limit");
	$stmt->bindValue(':nombre', '%'.$search.'%', PDO::PARAM_STR);
	$stmt->bindValue(':limit', (int)$numberofrecords, PDO::PARAM_INT);
	$stmt->execute();
	$usersList = $stmt->fetchAll();

}
	
$response = array();

// Read Data
foreach($usersList as $user){
	$empresa_string = "";
	if($user['empresa'] == "" ){
		$empresa_string = "";
	} else{
		$empresa_string = " | Empresa: ".$user['empresa'];
	}
	$response[] = array(
		"id" => $user['id_clientes_hx'],
		"text" => $user['nombre']." ".$empresa_string." | ".$user['telefonos']." | ".$user['correo']." | ".$user['direccion'],
	);
}

echo json_encode($response);
exit();
