<?php

include_once('modele/tp/afficher_tweets.php');
$tweets = afficher_tweets(0, 5);

foreach($tweets as $cle => $tweets)
{
	$tweets[$cle]['USERS_USE_NAME'] = $tweets['USERS_USE_NAME'];
	$tweets[$cle]['TWE_TEXT'] = htmlspecialchars($tweets['TWE_TEXT']);
}

include_once('vue/tp/index.php');

?>