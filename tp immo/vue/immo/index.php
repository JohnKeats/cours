<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	 <link href="style.css" rel="stylesheet" type="text/css">
	<title>test</title>

</head>

<body>
<div>
	<h2>Annonces</h2>
	
	<?php
	
	echo '<ul>';
	
	foreach($annonces as $annonce) 
		{
		?>
			
		    
            <li class="info"><?php echo $annonce["MAN_TITRE"]?></li>
            <li class="infos"><?php echo $annonce["MAN_DESCR"]?></li>
            <li class="infos">Référence : <?php echo $annonce["MAN_REF"]?></li>
            <li class="infos">Prix : <?php echo $annonce["MAN_TARIF"]?><br/>
            <br/>
              <?php
			
			}
			foreach($photos as $photo)
			{
			?>
			
            <li><img src="http://ns366377.ovh.net/~giraud/immo/photos/Z<?php echo $photo ?>"/></li>

 <?php
			}
               
          
			echo '</ul>';
			echo '</li>';
			?>
					 			
			
</div>
</body>
</html>