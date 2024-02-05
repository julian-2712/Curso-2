<?php

/*

do {
	Aqui va todo el codigo que se va a repetir.
}
while ( Condicion );

*/

$usernames = ["Juan", "Pepito", "Paco"];

do {
	
	$username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

	echo "\n";

} while ( in_array($username, $usernames) );

echo "\n";