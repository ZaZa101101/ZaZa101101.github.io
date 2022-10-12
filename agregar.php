<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Agregar Usuario</title>

</head>



<body>

    <br>
  <div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>

<div class="container p-4 fondotabla">

  <form action="guardar.php" method="POST">				<!-- Enviar datos al script guardar.php -->

    <div class="row mb-3">
      <label for="nombre" class="col-sm-2 col-form-label" >
        <tr><td><?php echo "Nombre:" ?></td></tr>
      </label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="nombre" required>
    </div>
</div>

<div class="row mb-3">
  <label for="apellido" class="col-sm-2 col-form-label">
    <tr><td><?php echo "Apellido:" ?></td></tr>
  </label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="apellido" required>
  </div>
</div>

<div class="row mb-3">
  <label for="dni" class="col-sm-2 col-form-label">
    <tr><td><?php echo "D.N.I.:" ?></td></tr>
  </label>
 <div class="col-sm-10">
   <input type="text" class="form-control" name="dni" required>
 </div>
</div>

<div class="row mb-3">
 <label for="email" class="col-sm-2 col-form-label">
  <tr><td><?php echo "E-Mail:" ?></td></tr>
 </label>
 <div class="col-sm-10">
  <input type="email" class="form-control" name="email" required>
 </div>
</div>

  <input type="submit" name="guardar" class="btn fondotabla" value="Guardar">
</form>
</div>
</div>

</body>
</html>