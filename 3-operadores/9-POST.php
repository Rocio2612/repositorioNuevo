<!-- los datos enviados a través de POST son encriptados y no
 se muestran en la URL, lo que los hace más seguros en 
 comparación con el método GET.
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo GET</title>
</head>
<body>
    <form action="./resultado-POST.php" method="POST">
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