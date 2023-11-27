<?php
$resultado1= (3*2-4/2*1)>(3*2+2*1) && (5>11%4);
/* resultado= (6-2*1)>(6+2) y (5>3)
  resultado= 4>8 y true
  resultado= false y true
  resultado false */
var_dump($resultado1);

$resultado2= (3>=3 || 5!= 5) && ! (15/5 + 2<>5);
/*resultado= (true o false) y no (5 <> 5) -> false
  resultado= true y true
  reusltado= true
 */
var_dump($resultado2);

 $resultado3= !(!((3*(-3))*2 > (3-(-3)*2) || 1 ^ 3 * 2 > 6));
/*resultado= no (no -9 * 2 > 3 + 6) o 1 * 2 > 6
  resultado= no no - 18 > 9 o 2 > 6
  resultado= no (false) o false
  resultado= no (false)
  resultado=  true
   */
var_dump($resultado3); 

$resultado4= (3>=4 && 5>3 && 3>3) || ! (4<= 4 || 5>4 || 6>=7);
/* resultado= (false y true y false) o no (true o true o false)
  resultado= false o no true
  resultado= false o false
  resultado= false */
var_dump($resultado4);
