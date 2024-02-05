<?php

/*

tienda 2 -> 1 camino
tienda 3 -> 2 caminos
tienda 4 -> 3 caminos
tienda 5 -> 5 caminos
tienda 6 -> 8 caminos
tienda 7 -> 13 caminos
tienda 8 -> 21 caminos

*/

$numero_tienda = (int) readline("Dime el numero de tienda: ");
$anterior = 0;
$actual = 1;

for ($i = 2; $i <= $numero_tienda ; $i++) { 
	
	$temporal = $actual;
	$actual += $anterior;
	$anterior = $temporal;


}

echo "Hay $actual formas distintas de llegar.";

echo "\n";