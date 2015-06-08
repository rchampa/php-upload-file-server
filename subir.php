<?php

if (isset($_FILES['myFile'])) {

	$name = "";

	if (isset($_POST['myName'])) {
		$name = $_POST['myName'];
	}	
    
    move_uploaded_file($_FILES['myFile']['tmp_name'], "uploads/" . $_FILES['myFile']['name']);
    $respuesta = array("code"=>2000,"message"=>"successful", "name"=>$name);
    echo json_encode($respuesta);
}
else{
    $respuesta = array("code"=>4000,"message"=>"fail");
    echo json_encode($respuesta);
}
?>