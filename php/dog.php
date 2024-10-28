<?php

	require_once "main.php";

	#Conexion a la db#
	$infoDog = conexion();
	$infoDog = $infoDog->query("SELECT * FROM dog");

	if ($infoDog->rowCount() > 0) {
		$infoDogs = $infoDog->fetchAll(PDO::FETCH_ASSOC);

		foreach ($infoDogs as $dog) {
			echo '
			<article class="article_dog">
				<img src="'.$dog['photo'].'" class="img_dog">
				<h2>'.$dog['name'].'</h2>
				<p>'.$dog['gender'].'</p>
				<p>'.$dog['time'].
			'</article>';
		}
	} else {
		echo "No se encontraron perros.";
	}

	$infoDog = null;
