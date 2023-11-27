<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>notas del estudiante</h1>
    <?php
    $nota = $_GET['nota'];
    $nombre = $_GET['nombre'];

    if (isset($nombre)) {
        switch ($nota) {
            case 10:
                echo "$nombre su nota es sobresaliente";
                break;
            case 9:
            case 8:
                echo "$nombre su nota es distinguido";
                break;
            case 7:
            case 6:
                echo "$nombre su nota es bueno";
                break;
            case 5:
            case 4:
                echo "$nombre su nota es suficiente";
                break;
            case 3:
            case 2:
            case 1:
                echo "$nombre su nota es insuficiente";
                break;
            case 0:
                echo "$nombre su nota es reprobado";
                break;
            default:
                echo "ingrese una nota valida";
                break;
        }
    }

    ?>
</body>

</html>