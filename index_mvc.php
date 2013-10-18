<?php

//connect° bd

include_once('modele/param.inc.php');

//appel controler module ask
if (!isset($_GET['module']) OR $_GET['module'] == 'tp')
{
	include_once('controleur/tp/index.php');
}
else
{
	include_once('vue/404.php');
}
?>