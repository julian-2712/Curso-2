<?php

/*

switch ( Variable a evaluar ) {

	case 1:
		// Codigo para el caso 1
	break;

	case 2:
		// Codigo para el caso 2
	break;

	case 3:
		// Codigo para el caso 3
	break;

	default:
		// Codigo por si ninguno de los casos se ejecuta.

}

*/

// Numeros favoritos para cada persona

// Persona 1: 9
// Persona 2: 4
// Persona 3: 3
// Persona 4: 9
// Persona 5: 0

$persona = 2;

switch( $persona ) {
	case 1:
		echo "Su numero favorito es el 9";
		break;

	case 2:
		echo "Su numero favorito es el 4";
		break;

	case 3:
		echo "Su numero favorito es el 3";
		break;

	case 4:
		echo "Su numero favorito es el 9";
		break;

	case 5:
		echo "Su numero favorito es el 0";
		break;	

	default:
		echo "Esa persona no existe";
}

echo "\n";