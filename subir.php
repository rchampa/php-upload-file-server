<?php

$saludo = "Hola";

if (isset($_FILES['myFile'])) {
    // Example:
    move_uploaded_file($_FILES['myFile']['tmp_name'], "uploads/" . $_FILES['myFile']['name']);
    $respuesta = array("code"=>2000,"message"=>"successful");
    echo json_encode($respuesta);
}
else{
    $respuesta = array("code"=>4000,"message"=>"fail");
    echo json_encode($respuesta);
}
?>