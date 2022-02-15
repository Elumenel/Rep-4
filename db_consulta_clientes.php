<?php
include "db_conectar.php";

$resultado = mysqli_query($conexion, "SELECT * FROM `clientes` ORDER BY `nombre` ASC");
$fila = mysqli_num_rows($resultado);
?>
