<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/miestilo.cs.s">
</head>
<body class="">
    <form action="guardar.php" enctype="multipart/form-data" method="post">
        <label for="">Nombre del Organo</label>
        <input class='form-control' type="text" name="nombre" id="">
        <label for="">Tipo de Sangre</label>
        <select class='form-select' name="tipo_sangre" id="" >
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
        </select>
        <label for="">Precio</label>
        <input class='form-control' type="number" name="precio" id="" step="0.01">
        <label for="">Foto del Organo</label>
        <input class='form-control' type="file" name="foto" id="" accept="image/jpeg, image/png">
        <input class="btn btn-primary my-4" type="submit" value="Guardar">
    </form>
</body>
</html>
<!--
    UwUr 
-->