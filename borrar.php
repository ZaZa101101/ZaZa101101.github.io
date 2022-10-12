<?php
include("conexion.php");												// Conecta con el servidor web local (Apache2 o NGiNX), MySQl y la base de datos

if(isset($_GET['id'])) {
  $conexion = mysqli_connect('localhost', 'root', '', 'escuela') or die (mysqli_error($mysqli));
  $id = $_GET['id'];
  $query = "DELETE FROM alumnos WHERE id = $id";							// Elimina el registro con SQL
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("No se pudo insertar datos (Query Failed!)");					// Muestra el mensaje después del alta de registro
  }


  header('Location: index.php');										// Redirección al archivo index.php
}
?>