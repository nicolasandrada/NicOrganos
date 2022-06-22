<?php

include "conexion.php";
$id=$_REQUEST['id'];

$nombre=$_REQUEST["nombre"];
$tipo_sangre=$_REQUEST["tipo_sangre"];
$precio=$_REQUEST["precio"];

$foto_nombre = $_FILES["foto"]["name"];
$foto_tipo = $_FILES["foto"]["type"];


$destino = "img/". basename($foto_nombre);

move_uploaded_file($_FILES['foto']['tmp_name'],$destino);

$sql = "UPDATE Organos SET organo = '$nombre', tipo_sangre = '$tipo_sangre', precio= $precio, foto='$destino' WHERE id = $id";

$con->query($sql);
