<?php
	
	/*
	 * Cette page contient la configuration commune à l'ensemble des outils
	 */

	$conf_globale["root"] = "/edt2.0";
	$conf_globale["title"] = "Emploi du temps - D&eacute;partement Informatique - IUT S&eacute;nart/Fontainebleau";
	$conf_globale["webmaster"]["name"] = "Déviation sur email de Cyroul";
	$conf_globale["webmaster"]["email"] = "cyril_defaye@yahoo.fr";
	
	ini_set("include_path", $conf_globale["root"].":".ini_get("include_path"));
	