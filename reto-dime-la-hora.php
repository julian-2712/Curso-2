<?php

echo "¡Hola! ¿Me podrias decir que hora es? \n";

function obtener_hora() {

	date_default_timezone_set('Europe/Madrid'); //Usarlo si se quiere mostrar otra zona horaria distinta.

	return date("H:i:s ");

};


echo "¡Claro! Son las " . obtener_hora();

echo "\n";