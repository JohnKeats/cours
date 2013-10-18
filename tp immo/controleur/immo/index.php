<?php

include_once('modele/immo/annonces.php');
$annonces = liste_annonces();

foreach($annonces as $cle => $annonce)
{
	$annonces[$cle]['MAN_TITRE'] = $annonce['MAN_TITRE'];
	$annonces[$cle]['MAN_DESCR'] = htmlspecialchars($annonce['MAN_DESCR']);
	$annonces[$cle]['MAN_REF'] = $annonce['MAN_REF'];
	$annonces[$cle]['MAN_TARIF'] = $annonce['MAN_TARIF'];
	$annonces[$cle]['MAN_REG_LIB'] = $annonce['MAN_REG_LIB'];
	
	}

$photos = photo_annonce();

foreach($photos as $cle => $photo)
{
	$photos[$cle]['PHO_SRC'] = $photo['PHO_SRC'];
	$photos[$cle]['MAN_ID'] = $photo['MAN_ID'];


}
include_once('vue/immo/index.php');

?>