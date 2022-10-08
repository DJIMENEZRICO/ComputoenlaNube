<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<?php
if(isset($_GET['error'])){
    $error= $_GET['error'];

    if ($error == "incorrecto"){
        echo "<h2>El usuario o contraseña no son correctos</h2>";
    }
    if ($error == "vacio"){
        echo "<h2>Los datos enviados estan vacios </h2>";
    }
}

?>
<body>
    <h2>iniciar sesion:</h2>
    <form action="procesar.php" method="POST">
  <p> <label for="nickname">Usuario</label>
   <input type="text" name="nickname"></p>

  <p> <label for="password">Contraseña</label>
   <input type="text" name="password"></p>

   <p><input type="submit" value="Acceder"></p>
   </form>
</body>
</html>