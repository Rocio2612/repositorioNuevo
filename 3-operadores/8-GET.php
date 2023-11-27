<!-- El método GET es una forma de enviar datos 
desde un cliente (como un navegador web) a un servidor web.  -->
<!-- Se muestran en la URL del navegador, lo que significa que no son
seguros para enviar información confidencial -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo GET</title>
</head>
<body>
    <form action="./resultado.php" method="GET">
        nombre:
        <input type="text" name="nombre"><br><br>
        correo:
        <input type="email" name="correo"><br><br>
        edad: 
        <input type="number" name="edad"><br><br>
        contraseña
        <input type="password" name="passwword"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>