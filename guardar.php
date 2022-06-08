<?php

include "conexion.php";

$nombre=$_REQUEST["nombre"];
$tipo_sangre=$_REQUEST["tipo_sangre"];
$precio=$_REQUEST["precio"];

$foto_nombre = $_FILES["foto"]["name"];
$foto_tipo = $_FILES["foto"]["type"];

if ($foto_tipo == 'image/png'){
    echo "esta todo bien"; 
}else{
    exit; 
}

$destino = "img/". basename($foto_nombre);

move_uploaded_file($_FILES['foto']['tmp_name'],$destino);

$sql = "INSERT INTO Organos VALUE (null,'$nombre' , '$tipo_sangre' , $precio , '$destino')";

$con->query($sql);
