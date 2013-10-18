<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>test</title>

</head>

<body>
<div>
	<h2>Last articles</h2>
	
	<?php
	
	foreach($tweets as $tweet)
	{
		echo '<div>';
		echo 'Date = '.$tweet['USERS_USE_NAME'].'<br/>';
		echo 'Tweet = '.$tweet['TWE_TEXT'];
		echo '</div>';
	}
?>
</div>
</body>
</html>