<?php
// while- Mientras (que la condicion sea verdadera se ejecuta)
/* Si la expresión es verdadera, el código dentro del bucle 
 se ejecutará, de lo contrario, se saldrá del bucle  
------------------------------------------------------- */

/*  $edad= readline("ingrese su edad: ");

 while ($edad>=18) {
    echo "es mayor de edad, tiene $edad " . PHP_EOL;
    $edad--; //nos permite salir del bucle decrementando uno en uno hasta llegar a la condicion dicha
 } echo "es menor de edad, tiene $edad  ";
 
 --------------------------------------*/

 /* $conteo=1; //arranca desde 1 

 while ($conteo<=10) /*hasta 10 {
   echo "conteo: $conteo" . PHP_EOL;
   $conteo++; //incrementa de uno en uno 
 } 
 echo "se salio del bucle con la variable conteo= $conteo";
 --------------------------------------------- */

 $suma=0;
 $limite=100;

 while ($suma<$limite) {
      $num= readline("ingrese un numero: ");
      $suma= $suma + $num; // $suma += $num (otra forma)
      echo "la suma parcial es: " . $suma . PHP_EOL;
 }
 echo "la suma final es: " . $suma;

