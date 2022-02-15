<?php
include 'db_conectar.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dob = $_POST['dob'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$tel_area = $_POST['tel_area'];
$tel_fijo = $_POST['tel_fijo'];
$tel_cel = $_POST['tel_cel'];
$dom_calle = $_POST['dom_calle'];
$dom_altura = $_POST['dom_altura'];
$dom_piso = $_POST['dom_piso'];
$dom_dpto = $_POST['dom_dpto'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$cp = $_POST['cp'];
$user = $_POST['user'];
$pw = $_POST['pw'];

$query_insertar = "INSERT INTO `clientes` (`nombre`, `apellido`, `dob`, `dni`, `email`, `tel_area`, `tel_fijo`, `tel_cel`, `dom_calle`, `dom_altura`, `dom_piso`, `dom_dpto`, `ciudad`, `provincia`, `cp`, `user`, `pw`)
VALUES ('$nombre','$apellido','$dob','$dni','$email','$tel_area','$tel_fijo','$tel_cel','$dom_calle','$dom_altura','$dom_dpto','$dom_piso','$ciudad','$provincia','$cp','$user','$pw')";

if(mysqli_query($conexion, $query_insertar)){
  echo '<script>alert("Cliente registrado.");
  window.location.href="pag_elenco.php"</script>';
}else{
  echo 'ERROR: No pudo insertarse el registro. '.mysqli_error($conexion);
}

mysqli_close($conexion);
?>
