<?php

function clear() {

	if (PHP_OS === "WINNT") {
		system("cls");
	}
	else {
		system("clear");
	}

}

$possible_words = ["Bebida", "Circulo", "Cuadro", "Reloj", 
"Toalla", "Ordenador", "Pizza", "Botella", "Papel", "Platzi"];

define("MAX_ATTEMPTS", 6);

echo "¡Juego del ahorcado! \n\n";

// Inicializamos el juego (las variables)

$choosen_word = $possible_words[ rand(0, 9) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;

do {

echo "Palabra de $word_length letras \n\n";
echo $discovered_letters . "\n\n";

// Pedimos al usuario que escriba
$player_letter = readline("Escribe una letra: ");
$player_letter = strtolower($player_letter);

	// code...
if ( str_contains($choosen_word, $player_letter) ) {

	// Verificamos todas las ocurrencias de esta letra para reemplazar
	$offset = 0;
	while ( 
		($letter_position = strpos($choosen_word, $player_letter, $offset) )
		!== false 
	)
	{
		
		$discovered_letters[$letter_position] = $player_letter;
		$offset = $letter_position + 1;

	}

}
else {

	clear();
	$attempts++;
	echo "Letra incorrecta. Te quedan " . (MAX_ATTEMPTS - $attempts) . " intentos.";
	sleep(2);
}

	clear();

} while( $attempts < MAX_ATTEMPTS && $discovered_letters != $choosen_word );

clear();

if ($attempts < MAX_ATTEMPTS)
	echo "¡Felicidades! Has adivinado la palabra. \n";
else
	echo "Suerte para la proxima, amigo! \n";

echo "La palabra es: $choosen_word \n";
echo "Tú descubriste: $discovered_letters";

echo "\n";