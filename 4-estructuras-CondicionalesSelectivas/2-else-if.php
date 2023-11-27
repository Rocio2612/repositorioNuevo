<?php
// else- if

$edad = readline('Ingrese su edad');
$salario = readline('Ingrese su salario');

if ($salario < 67_000) {
    echo "Usted cobra menos del salario minimo";
} elseif ($salario < 100_000) {
    echo "Usted Cobra un poco mas del salario minimo";
} elseif ($salario < 200_000) {
    echo "Usted Cobra relativamente bien";
} elseif ($salario < 300_000) {
    echo "Esta cobrando muy por encima de la media";
} else  { //if ($salario >= 300_000)
    echo "Con este salario ya tiene que pagar impuesto a la riqueza";
}