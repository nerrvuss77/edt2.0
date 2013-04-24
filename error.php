<?php
	include("./config_globale.php");
	$code = $_GET['code'];
?>

<?php include("./config_globale.php"); ?>

<!DOCTYPE>
<html>
	
	
	
	<head>
		<?php include("./meta.php"); ?>
		<title><?php echo $conf_globale["title"]; ?> - Error <?php echo $code; ?></title>
		<link rel="stylesheet" href="<?php echo $conf_globale["root"]; ?>/css/style.css" />
	</head>
	
	
	
	<body>
		<div id="page">
			<div id="bann">
				<?php include("./bann.php"); ?>
			</div>
			<div id="menu">
				<?php include("./menu.php"); ?>
			</div>
			<div id="contenu">
				<h1>Error <?php echo $code; ?></h1>
				<p>
					<?php
						$txt = "";
						if($code == 403){
							$txt .= "Error 403 - Access Forbidden<br />";
							$txt .= "<br />";
							$txt .= "Vous ne disposez pas des droits n&eacute;c&eacutessaires pour consulter la page demand&eacute;e.<br />";
							$txt .= "Pour plus d'informations, veuillez contacter le <a href=\"mailto://".$conf_globale["webmaster"]["email"]."\">webmaster</a>";
							if($conf_globale["webmaster"]["name"] != ""){
								$txt .= " (".$conf_globale["webmaster"]["name"].")";
							}
							$txt .= " de ce site.<br />";
						}
						elseif($code == 404){
							$txt .= "Error 404 - Page not Found<br />";
							$txt .= "<br />";
							$txt .= "La page demand&eacute;e n&#39;a pas &eacute;t&eacute; trouv&eacute;e.<br />";
							$txt .= "Si le probl&egrave;me persiste, veuillez contacter le <a href=\"mailto://".$conf_globale["webmaster"]["email"]."\">webmaster</a>";
							if($conf_globale["webmaster"]["name"] != ""){
								$txt .= " (".$conf_globale["webmaster"]["name"].")";
							}
							$txt .= " de ce site.<br />";
						}
						else{
							$txt .= "Cette erreur n'est pas g&eacute;r&eacute;e par le site.<br />";
							$txt .= "Veuillez contacter le <a href=\"mailto://".$conf_globale["webmaster"]["email"]."\">webmaster</a>";
							if($conf_globale["webmaster"]["name"] != ""){
								$txt .= " (".$conf_globale["webmaster"]["name"].")";
							}
							$txt .= " de ce site pour plus de d&eacute;tails.<br />";
						}
						echo $txt;
					?>
				</p>
			</div>
			<div id="copyright">
				<?php include("./copyright.php"); ?>
			</div>
		</div>
	</body>
	
	
	
</html>
