<?php

function es_estudiante_legend($platzi_rank) {

	if ($platzi_rank >= 20000) {
		echo "Eres un estudiante Legend!\n";
	}
	else {
		echo "Lo sentimos, aun no has alcanzado el nivel Legend.\n";
	}

}

do {

	$platzi_rank_user = (int) readline("Introduce tu Platzi Rank: ");

	es_estudiante_legend($platzi_rank_user);

} while(true);



echo "\n";