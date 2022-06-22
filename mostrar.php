<?php
include "conexion.php";

$sql = 'SELECT * FROM Organos';

$res = $con->query($sql);


echo "<table border=1>";
  while ($dato = $res->fetch_assoc()){
    echo '<tr>';
    echo "<td> {$dato['organo']} </td>";
    echo "<td> {$dato['precio']} </td>";
    echo "<td><form action='Eliminar.php' method='post'>";
    echo "<input type='hidden' name='id' value='{$dato['id']}' >";
    echo "<input type='submit' value='eliminar' onclick='return confirm('')'>";
    echo "</form></td>";
    echo '<tr>';
  }
  ?>
</table>
