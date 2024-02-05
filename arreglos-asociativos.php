<?php

/*
$edades = array(
	"Carlos" => 20,
	"Fran" => 18,
	"Juan" => 40
);

echo "La edad de Fran es " . $edades["Fran"];
*/

$cafes = array(
	"Capuccino" => 4,
	"Latte" => 3,
	"Espresso" => 2
);

// echo "El precio del cafe Latte es de {$cafes ['Latte']}";
/*
$personas = array(

	"Carlos" => array(
		"edad" => 20,
		"apellido" => "Sanchez"
	),

	"Fran" => array(
		"edad" => 18,
		"apellido" => "Gomez"
	),
);
*/
$personas = [

	"Carlos" => array(
		"edad" => 20,
		"apellido" => "Sanchez"
	),

	"Fran" => array(
		"edad" => 18,
		"apellido" => "Gomez"
	),
];

echo "La informacion de Fran es: Edad " . $personas
["Fran"]["edad"] . " Apellido: " . $personas
["Fran"]["apellido"];

echo "\n";