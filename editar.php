<?php
include("conexion.php");												// Conecta con el servidor web local (Apache2 o NGiNX), MySQl y la base de datos
$nombres= '';															// Limpia las variables
$apellidos= '';
$dni= '';
$email= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM alumnos WHERE id=$id";							// Selecciona un registo con SQL
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombres = $row['nombres'];
    $apellidos = $row['apellidos'];
    $dni = $row['DNI'];
    $email = $row['email'];
  }
}

if (isset($_POST['update'])) {											// Modifica el registro con SQL
  $id = $_GET['id'];
  echo ($id);
  $nombres= $_POST['nombres'];
  echo ($nombres);
  $apellidos= $_POST['apellidos'];
  echo ($apellidos);
  $dni= $_POST['DNI'];
  echo ($dni);
  $email = $_POST['email'];
  echo ($email);

  $query = "UPDATE alumnos set nombres = '$nombres', apellidos = '$apellidos', DNI = '$dni', email = '$email' WHERE id=$id";
  mysqli_query($conn, $query);
  $result = mysqli_query($conn, $query);               
  header('Location: index.php');										// Redirección al archivo index.php


}										
?>

<?php include('includes/header.php');?>								<!-- Incluye, agrega la cabecera que tiene Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">

<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body fondotabla">										<!-- Formulario de Edición -->
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
        <label for="nombres">
        <?php echo "Nombres:" ?>
        </label>
          <input name="nombres" type="text" class="form-control" value="<?php echo $nombres; ?>" placeholder="Nuevo nombre">
        </div>
        <div class="form-group">
        <label for="apellidos">
        <?php echo "Apellidos:" ?>
        </label>
          <input name="apellidos" type="text" class="form-control" value="<?php echo $apellidos; ?>" placeholder="Nuevo apellido">
        </div>
        <div class="form-group">
        <label for="DNI">
        <?php echo "D.N.I:" ?>
        </label>
          <input name="DNI" type="text" class="form-control" value="<?php echo $dni; ?>" placeholder="Nuevo DNI">
        </div>
        <div class="form-group">
        <label for="email">
        <?php echo "E-Mail:" ?>
        </label>
          <input name="email" type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Nuevo E-Mail">
        </div>
        <button class="btn fondotabla" name="update"> Guardar </button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php');?>						<!-- Incluye, agrega el pie de página que tiene Bootstrap -->