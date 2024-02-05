<?php

$personas = array(
	"Esteban" => array(
		"Profesion" => "Enfermero",
		"Color favorito" => "Azul",
		"Comida" => array(
			"Plato favorito" => "Calamares",
			"Plato menos preferido" => "Paella"
		)
	),
	"Eduardo" => array(
		"Profesion" => "Profesor",
		"Color favorito" => "Rojo",
		"Comida" => array(
			"Plato favorito" => "Puchero",
			"Plato menos preferido" => "Morcilla"
		)
	),
	"Roberto" => array(
		"Profesion" => "Cartero",
		"Color favorito" => "Verde",
		"Comida" => array(
			"Plato favorito" => "Pizza",
			"Plato menos preferido" => "Curry"
		)
	)
);

echo "La comida favorita de Eduardo es: " . $personas
["Eduardo"]["Comida"]["Plato favorito"];

echo "\n";