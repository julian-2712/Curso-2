<?php

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

//usort ordena un arreglo utilizando una función de comparación personalizada

usort($precios_de_cafes, function($a, $b){

//La función de comparación utiliza el operador spaceship (<=>), que retorna -1 si
//$a es menor que $b, 0 si son iguales, y 1 si $a es mayor que $b.

	return $a <=> $b;
});

//var_dump imprime información detallada sobre una variable, en este caso, el arreglo ordenado
var_dump($precios_de_cafes);