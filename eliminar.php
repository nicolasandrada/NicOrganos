
<?php

include "conexion.php";

$id=$_REQUEST["id"];

$sql = "DELETE FROM Organos WHERE id=$id";

$con->query($sql);

header('location: mostrar.php');