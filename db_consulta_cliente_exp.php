<?php
include "db_conectar.php";

$id = $_GET['id'];

$resultado = mysqli_query($conexion, "SELECT * FROM `clientes` WHERE id_cliente=$id");
$fila = mysqli_num_rows($resultado);
?>
