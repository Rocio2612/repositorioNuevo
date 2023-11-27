<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina de resultados</title>
</head>
<body>
    <h1>Recibo los datos del formulario</h1>
    <?php 
   $nombre= $_POST["nombre"];
    $edad= $_POST["edad"];

  /*   $edad= readline ("ingrese su edad: "); */
if ($edad >= 21) {
    echo "$nombre es mayor de edad, tiene: $edad" . PHP_EOL;
} else {
    echo "$nombre es menor de edad, tiene: $edad" . PHP_EOL;
    echo "acceso denegado" . PHP_EOL;
}
    ?>
</body>
</html>