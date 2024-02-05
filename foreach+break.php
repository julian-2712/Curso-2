<?php

/*

foreach ($iterable as $valor){
	Codigo a repetir por cada valor
}

foreach ($iterable as $llave => $valor){
	Codigo a repetir por cada valor
}

*/

$tienda_cafes = array(
	"Americano" => 3,
	"Latte" => 4,
	"Recalentado" => 1,
	"Capuccino" => 5,
	"Mocca" => 6
);

/*
foreach ($tienda_cafes as $cafe => $precio) {
	echo "El cafe $cafe cuesta $precio € \n";
}
*/

foreach ($tienda_cafes as $cafe => $precio) {

	echo "Actualmente encontre el cafe $cafe \n";

	if ($cafe == "Latte"){
		echo "Encontramos tu cafe \n";
		break;
	}

}
	