<?php

	require_once "main.php";

	#Conexion a la db#
	$infoDog = conexion();
	$infoDog = $infoDog->query("SELECT * FROM dog");

	if ($infoDog->rowCount() > 0) {
		$infoDogs = $infoDog->fetchAll(PDO::FETCH_ASSOC);

		function gender($dog) {
			if ($dog['gender']=='macho') {
				return '<i class="fa-solid fa-mars" style="color:blue;"></i>';
			} elseif ($dog['gender']=='hembra') {
				return '<i class="fa-solid fa-venus" style="color:pink;"></i>';
			} else {
				return '<p>No definido</p>';
			}
		}

		foreach ($infoDogs as $dog) {
			echo '
			<article class="article_dog">
				<figure class="conteiner_img_dog">
					<img src="'.$dog['photo'].'" class="img_dog">
				</figure>
				<section class="description_dog">
					<header class="header_dog">
						<h2>'.$dog['name'].'</h2>
						'.gender($dog).'
					</header>
					<footer class="footer_dog">
						<p>'.$dog['time'].
					'</footer>
				</section>
			</article>';
		}
	} else {
		echo "No se encontraron perros.";
	}

	$infoDog = null;
