<?php

$nota= readline("ingrese la nota del examen: ");
$carrera= readline("ingrese su carrera: ");
if ($carrera=="vespertina") {
    if ($nota>=6){
        echo "esta eximido";
    }   else {
        echo ($nota>=3.5) ? "rinde un examen" .PHP_EOL : "esta reprobado";
    }
} elseif ($carrera="diurnas"){
    if ($nota>=6){
        echo "esta eximido";
    }   else {
        echo ($nota>=3.5) ? "rinde un examen" .PHP_EOL : "esta reprobado";
    }
}
   
