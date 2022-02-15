<?php
$conexion = mysqli_connect('localhost', 'root', '', 'castellarin_florencia');

if(mysqli_connect_errno()){
  echo("ERROR: No pudo conectarse. ".mysqli_connect_error());
}
?>
