<?php
include('conexion.php');															// importa el script para conectar

if (isset($_POST['guardar'])) {														// Datos enviados del formulario
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $email = $_POST['email'];
  $query = "INSERT INTO alumnos(nombres, apellidos, DNI, email) VALUES ('$nombre', '$apellido', '$dni', '$email')";	// Alta de datos con SQL
  $result = mysqli_query($conn, $query);											
  if(!$result) {
    die("No se pudo insertar datos (Query Failed!)");								// Muestra el Error si no se pudo insertar los datos
  }
  header('Location: index.php');													// Redirección al archivo index.php

}
?>