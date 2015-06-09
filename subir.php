<?php

header('Content-Type: application/json; charset=utf-8');
//header('Content-Type: text/html; charset=utf-8');

if (isset($_POST['comentario']) && isset($_POST['id'])) {
	$comentario = $_POST['comentario'];
	$id = $_POST['id'];
	if (isset($_FILES['myFile'])) {
    	move_uploaded_file($_FILES['myFile']['tmp_name'], "uploads/" . $_FILES['myFile']['name']);
	}

	
	$respuesta = array("code"=>2000,"message"=>"successful", "comentario"=>$comentario, "id"=>$id);
    // $class_response = json_decode(json_encode($respuesta));
    // echo $class_response->comentario;
    //echo $comentario;
    echo json_encode($respuesta);
}
else{
    $respuesta = array("code"=>4000,"message"=>"fail");
    echo json_encode($respuesta);
}



?>