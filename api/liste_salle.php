<?php
for($i = 201; $i <= 219; $i++){
	$liste_salle[$i]["id"] = $i;
	$liste_salle[$i]["floor"] = 2;
	$liste_salle[$i]["name"] = "Salle ".$i;
}
$liste_salle[209]["name"] = "Toilettes Mixtes";
for($i = 220; $i <= 235; $i++){
	$liste_salle[$i]["id"] = $i;
	$liste_salle[$i]["floor"] = 2;
	$liste_salle[$i]["name"] = "Salle Machine ".$i;
}
$liste_salle[226]["name"] = "Toilettes Handicapés";
$liste_salle[227]["name"] = "Toilettes Femmes";
$liste_salle[228]["name"] = "Toilettes Hommes";
$liste_salle[233]["name"] = "Bureau Régis BROUARD";