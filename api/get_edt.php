<?php
	/*
	 * Ce fichier retourne :
	 * 		* la liste de l'ensemble des cours,
	 *		* la liste des mati�res concern�s par les cours list�s,
	 *		* la liste des enseignants concern�s par les cours list�s,
	 *		* la liste desgroupes concern�s par les cours list�s,
	 *		* la liste des�l�ves concern�s par les cours list�s
	 *		* et la liste des salles concern�s par les cours list�s.
	 *
	 */
	
	/* Liste des fichiers inclus */
	include("../config_globale.php");
	include("./config.php");
?>
<?xml version="1.0" ?>



<?php
	/* D�but du fichier XML */
?>
<Reponse>
	<EDT>
		<Annee valeur="2012" >
			<Mois valeur="11" >
				<Jour valeur="19">
					<Cours matiere="1" enseignant="1" groupe="1 2 3 4 5 6" salle="201">
						<HeureDebut heure="08" minute="45"/>
						<HeureFin heure="10" minute="00"/>
					</Cours>
				</Jour>
			</Mois>
		</Annee>
	</EDT>
	<Matieres>
		<Matiere id="1" nom="AP" />
	</Matieres>
	<Enseignants>
<?php
	/*
	 * Cyril DEFAYE
	 * D�v.:
	 * Il faut remplacer l'include par une consultation en SQL de la BDD
	 */
	include("./liste_prof.php");
	foreach($liste_prof as $prof){
?>
		<Enseignant id="<?php echo $prof["id"]; ?>" nom="<?php echo $prof["name"]; ?>" />
<?php
	}
?>
	</Enseignants>
	<Groupes>
<?php
	/*
	 * Cyril DEFAYE
	 * D�v.:
	 * Il faut remplacer l'include par une consultation en SQL de la BDD
	 */
	include("./liste_groupe.php");
	foreach($liste_groupe as $groupe){
?>
		<Groupe id="<?php echo $groupe["id"]; ?>" nom="<?php echo $groupe["name"]; ?>" promotion="<?php echo $groupe["promotion"]; ?>" />
<?php
	}
?>
	</Groupes>
	<Promotions>
<?php
	/*
	 * Cyril DEFAYE
	 * D�v.:
	 * Il faut remplacer l'include par une consultation en SQL de la BDD
	 */
	include("./liste_promo.php");
	foreach($liste_promo as $promo){
?>
		<Promotion id="<?php echo $promo["id"]; ?>" nom="<?php echo $promo["name"]; ?>" />
<?php
	}
?>
	</Promotions>
	<Salles>
<?php
	/*
	 * Cyril DEFAYE
	 * D�v.:
	 * Il faut remplacer l'include par une consultation en SQL de la BDD
	 */
	include("./liste_salle.php");
	foreach($liste_salle as $salle){
?>
		<Salle id="<?php echo $salle["id"]; ?>" etage="<?php echo $salle["floor"]; ?>" nom="<?php echo $salle["name"]; ?>" />
<?php
	}
?>
	</Salles>
</Reponse>
<?php
	/* Fin du fichier XML */
?>