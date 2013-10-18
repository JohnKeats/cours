<?php
	function afficher_tweets($offset, $limite)
{
	global $connexion;
	
	//envoi requete
	$query = $connexion->prepare('SELECT * FROM TW_TWEETS ORDER BY TWE_DATE DESC LIMIT :offset, :limite');
	
	//
	
	$query->bindParam(':offset', $offset, PDO::PARAM_INT);
	$query->bindParam(':limite', $limite, PDO::PARAM_INT);
	
	//execution
	$query->execute();
	
	//recup
	$tweets = $query->fetchAll();
	
	//
	return $tweets;

}
?>