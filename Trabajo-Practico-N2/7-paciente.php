<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Recibo los dias del paciente</h1>
    <?php
    $tipoEnfermedad = $_GET['tipoEnfermedad'];
    $dias = $_GET['dias'];
    switch ($tipoEnfermedad) {
        case 1:
            echo "el precio total del paciente es de: " . 125 * $dias;
            break;
        case 2:
            echo "el precio total del paciente es de: " . 116 * $dias;
            break;
        case 3:
            echo "el precio total del paciente es de: " . 120 * $dias;
            break;
        case 4:
            echo "el precio total del paciente es de: " . 132 * $dias;
            break;
        case 5:
            echo "el precio total del paciente es de: " . 138 * $dias;
            break;
        default:
            echo "numero incorrecto";
            break;
    }
    ?>
</body>

</html>