<?php
	include("./config_globale.php");
	$root = $conf_globale["root"]."";
	$is_edt = true;
	$is_carte = false;
	$is_api = false;
	$keywords = "emploi du temps";
	$description = "Emploi du temps du d&eacute;partement informatique de l&#39;IUT S&eacute;nart/Fontainebleau";
	$title = "";
?>
<!DOCTYPE html>
<html lang="fr">
	
	
	
	<head>
		<?php include("/head.php"); ?>
		
	</head>
	
	
	
	<body>
		<div id="page">
			<?php include("/navbar.php"); ?>
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
				<?php include("/copyright.php"); ?>
			</div>
		</div>
	</body>
	
	
	
</html>
