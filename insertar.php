<?php 


include("conexion.php");
$correo = $_GET['nombre'];
$especialidad = $_GET['especialidad'];
$fecha_nacimiento = $_GET['agno']."-".$_GET['mes']."-".$_GET['day'];

$numero_control = $_GET['agno']."00".$_GET['mes']."00".$_GET['day']."777";



mysqli_query($conexion,"INSERT INTO registro(nombre,fecha_nacimiento,especialidad,numero_control) VALUES ('$correo','$fecha_nacimiento','$especialidad','$numero_control')");

echo "Su número de control es: ".$numero_control;

?>
