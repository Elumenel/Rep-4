<?php
include "db_conectar.php";

$id = $_GET['id'];

$query_delete = "DELETE FROM `clientes` WHERE `id_cliente`='$id'";

if(mysqli_query($conexion, $query_delete)){
	echo '<script>alert("Registro eliminado.");
    window.location.href="pag_elenco.php"</script>';
}else{
echo "ERROR: No pudo ejecutarse $query_delete. ".mysqli_error($conexion);
}

mysqli_close($conexion);
?>
