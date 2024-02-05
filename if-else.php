<?php

/*

if ( "Condicion" ) {
	Si la condición se cumple, se ejecuta esto.
}
else {
	Si no se cumple, entonces se ejecuta esto.
}

Los corchetes {} los usamos si hay más de una condición, si no, no son necesarios.


*/

$asientos_disponibles = 0;
$es_hijo_de_tom_holland = true;
$conoce_a_tony_stark = false;

if ($asientos_disponibles > 0)
	echo "Puedes ver la pelicula";
else if ($es_hijo_de_tom_holland == true)
	echo "Alome, pero puedes pasar a ver la pelicula";
else if ($conoce_a_tony_stark == true)
	echo "Alome, pero puedes pasar a ver la pelicula";
else 
	echo "Lo sentimos, no hay asientos disponibles";


echo "\n";


/*

Para hacer comprobaciones, podemos modificar los valores de las distintas variables para así
jugar con el resultado del bucle. Modificar el numero de asientos disponibles, si es hijo de
tom holland, o si conoce a tony stark, cambiando los valores, realizamos comprobaciones.

*/