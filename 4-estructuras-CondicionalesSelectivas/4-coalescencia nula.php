<?php
// null coalesce: ?? // coalescencia nula
/*La idea es que si el primer valor es null entonces tomará el segundo valor.
Si ese valor es null tomará el siguiente valor.
*/

// Ejemplo de variable con valor nulo
$nombre1 = "rocio";
$nombre2=null;

// Usando el operador de fusión de null para proporcionar un valor predeterminado
$nombreCompleto = $nombre ?? 'Usuario';

// El resultado será "Usuario" porque $nombre es nulo
echo $nombreCompleto;
 