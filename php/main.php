<?php
#Conexion a la base de datos#
function conexion(){
	$pdo= new PDO('mysql:host=localhost;dbname=asoprofasil','root','');
	return $pdo;
}

