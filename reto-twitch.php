<?php


$donaciones = readline("Introduce cuanto dinero te han donado: ");

if($donaciones >= 100)
	echo "Tu dinero se enviara a tu cuenta.";
else
	echo "No tienes suficientes fondos para retirar.";

echo "\n";


