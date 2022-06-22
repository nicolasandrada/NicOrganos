<?php

include "conexion.php";

$id=$_REQUEST["id"];

$sql = "SELECT * FROM Organos WHERE id=$id";

$res = $con->query($sql);

?>

<form action="guardarModificacion.php" enctype="multipart/form-data" method="post">
<?php 
while ($dato = $res->fetch_assoc()){
?>
<label for="">Nombre del Organo</label>
        <input class='form-control' type="text" value='<?php echo $dato['organo']?>' name="nombre" id="">
        <label for="">Tipo de Sangre</label>
        <select class='form-select' name="tipo_sangre" id="" >
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
        </select>
        <label for="">Precio</label>
        <input class='form-control' type="number" value='<?php echo $dato['precio']?>'name="precio" id="" step="0.01">
        <label for="">Foto del Organo</label>
        <img width='100' src="<?php echo $dato['foto']?>" alt="">
        <input class='form-control' type="file" name="foto" id="" accept="image/jpeg, image/png">
        <input class="btn btn-primary my-4" type="submit" value="Guardar">

        <input type="hidden" value='<?php echo $dato['id']?>' name="id" id="">
<?php
}
?>

</form>