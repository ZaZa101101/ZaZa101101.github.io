<!-- incluye el script de conexion y el header del proyecto-->
<?php include("conexion.php"); ?>
<?php include('includes/header.php'); ?>
<!-- declaramos el tipo de archivo, lenguaje y otros -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>

    <!-- incluye la hoja de estilos y bootstrap 5 -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body style="background-color:white;">
<!-- fondo -->
<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
</div>


 <div class="container p-4">
    <div class="mx-auto">

      <!-- Mensaje -->

      <?php if (isset($_SESSION['mensaje'])) { ?>				<!-- Muestra el mensaje que envian los script editar.php o borrar.php -->
      <div class="alert alert-<?= $_SESSION['mensaje.C']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['mensaje']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>								<!-- PHP libera todas las variables de sesión registradas actualmente -->

        <!-- ta -->

     <div class="container">   
      <table class="table fondotabla">
        <thead>
          <tr style="text-align:center">
            <th> ID </th>											<!-- Nombres de columnas -->
            <th> Nombre </th>
            <th> Apellido </th>
            <th> D.N.I. </th>
            <th> E-Mail </th>
          </tr>
        </thead>

          <?php
          $query = "SELECT * FROM alumnos";						// Selección de todos los registros de la tabla datos
          $result_tasks = mysqli_query($conn, $query);			// Conexión con la base de datos y consulta de registros

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>	<!-- Estructura de repetición que carga con los registros de la tabla datos -->
          <tr style="text-align:center">													
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['DNI']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
            <a href="editar.php?id=<?php echo $row['id']?>" class="btn">	<!-- Botón Editar -->
                <i class="fas fa-marker"> Editar </i>
              </a>
            </td>
            <td>
                <a href="borrar.php?id=<?php echo $row['id']?>" class="btn">	<!-- Botón Borrar -->
                <i class="fas fa-trash"> Borrar </i>
                </a>
            </td>
          </tr>
          <?php } ?>				

      </table>	
      </div>
      <a href="agregar.php">	<!-- Botón Borrar -->
        <button type="button" class="btn fondotabla">Agregar Alumno</button>
      </a>

      
</body>
</html>