<?php
	include("../config_globale.php");
	$is_edt = false;
	$is_carte = false;
	$is_api = true;
	$root = $conf_globale["root"]."/api"
?><!DOCTYPE html>
<html lang="fr">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" lang="fr" content="plan,departement,informatique,iut,senart,fontainebleau" />
		<meta name="description" content="Plan interactif du d&eacute;partement informatique de l&#39;IUT S&eacute;nart/Fontainebleau" />
		
		<title>API edt2.0 - D&eacute;partement Informatique - IUT S&eacute;nart/Fontainebleau</title>
		
		<link type="image/png" href="<?php echo $root ; ?>/pictures/general/favicon.png" rel="icon" />
		<link type="text/css" href="<?php echo $root ; ?>/style/default.css" rel="stylesheet" />
		<link type="text/css" href="<?php echo $conf_globale["root"]; ?>/bootstrap/css/bootstrap.css" rel="stylesheet" />
		
		<script type="text/javascript" src="<?php echo $root; ?>/plugins/script/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $root; ?>/script/mappage.js"></script>
		<script type="text/javascript" src="<?php echo $conf_globale["root"]; ?>/bootstrap/js/bootstrap.js"></script>
		
	</head>
	<body onload="body_start();">
		
		<?php include("../navbar.php"); ?>
		<h1>Documentation sur l'API de l'outil edt2.0</h1>
		<div class="alert alert-block alert-info">
			<span class="label label-info">Info</span> Bonjour. L'API est en cours d'élaboration. Merci de repasser plus tard pour y accéder.
		</div>
		<div id="copyright">
			<?php include("../copyright.php"); ?>
		</div>
		
	</body>
</html>