<?php
	include("./config_globale.php");
?>

<!DOCTYPE>
<html>
	
	
	
	<head>
		<?php include("./meta.php"); ?>
		<title><?php echo $conf_globale["title"]; ?></title>
		<link rel="stylesheet" href="<?php echo $conf_globale["root"]; ?>/css/style.css" />
		<link rel="stylesheet" href="<?php echo $conf_globale["root"]; ?>/css/matieres.css" />
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
				<h2>Filtres</h2>
				<form>
					Promotion : <input type="text" class="input_text" /> 
					Groupe : <input type="text" class="input_text" /> 
					Enseignant : <input type="text" class="input_text" /> 
					Salle : <input type="text" class="input_text" /><br /><br />
					<div id="bouton_refresh_edt"><input type="button" class="input_button" value="Rafraichir l'EDT" /></div>
				</form>
				<h2>Emploi du temps</h2>
				<table id="edt_semaine">
					<tr>
						<th class="empty"><!--EMPTY--></th>
						<th>Lundi</th>
						<th>Mardi</th>
						<th>Mercredi</th>
						<th>Jeudi</th>
						<th>Vendredi</th>
					</tr>
					<tr>
						<td class="hour">8h30</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="hour">9h00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="hour">9h30</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="hour">10h00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<div id="copyright">
				<?php include("./copyright.php"); ?>
			</div>
		</div>
	</body>
	
	
	
</html>
