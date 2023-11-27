<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recibo valor de bola</h1>
    <?php
    switch ($_GET['bola']){
        case "blanco";
        echo "no hay descuento ";
        $precio=$_GET['precio']; break;
        case "verde";
        echo "tiene un 10% de descuento ";
        $precio=$_GET['precio'] * 0.9 ; break;
        case "amarillo";
        echo "tiene un 25% de descuento ";
        $precio=$_GET['precio'] * 0.75 ; break;
        case "azul";
        echo "tiene un 50% de descuento ";
        $precio=$_GET['precio'] * 0.5 ; break;
        case "anaranjado";
        echo "tiene un 100% de descuento ";
        $precio=$_GET['precio'] * 0; break; 
        default:
        echo "tiene que seleccionar un color "; break;
        
    } 
    echo "el precio final es de: $precio";
    ?>
</body>
</html>