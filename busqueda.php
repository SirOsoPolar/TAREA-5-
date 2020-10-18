<?php 

include("conexion.php");
$nombre = $_GET['nombre'];
$registros = mysqli_query($conexion,"SELECT * from registro where numero_control ='$nombre'");
if($reg = mysqli_fetch_array($registros)){
echo "Nombre: ".$reg['nombre']."<br>";
echo "Fecha de nacimiento: ".$reg['fecha_nacimiento']."<br>";
echo "Especialidad: ".$reg['especialidad']."<br>";
}

?>