<?php
$dns = 'mysql:host=localhost;dbname=immo';
$utilisateur = 'root';
$motDePasse = 'root';

$options = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
				
$connexion = new PDO( $dns, $utilisateur, $motDePasse, $options );

?>















































