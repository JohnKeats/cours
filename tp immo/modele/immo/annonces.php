<?php

	function liste_annonces()
{
	global $connexion;
	
	//envoi requete
	$query = $connexion->query('SELECT MAN_TITRE, MAN_DESCR, MAN_REF, MAN_TARIF, MAN_REG_LIB FROM immo_mandats where MAN_WEB = 1' );
	
	
//recup
	$annonces = $query->fetchAll();
	
	//
	return $annonces;

}

function photo_annonce()

{
	global $connexion;
$query = $connexion->query('SELECT A.MAN_ID, PHO_SRC, B.MAN_ID FROM immo_mandats B, immo_photos A where A.MAN_ID=B.MAN_ID and MAN_WEB=1' );

$photos = $query->fetch();

return $photos;
}

	?>