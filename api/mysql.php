<?php

// Retourne l'enseignant correspondant à l'identifiant saisi
function getEnseignantByID($id)
{
	var selectQuery = "SELECT en_id, nomADE FOM enseignant WHERE en_id =".$id.";";
}

// Retourne la liste des enseignants correspondant au nom saisi
function getEnseignantsByName($name)
{
	var selectQuery = "SELECT en_id, nomADE FROM enseignant WHERE nomADE LIKE ".$name."%;";
}

// Retourne la formation correspondant à l'identifiant saisi
function getFormationByID($id)
{
	var selectQuery = "SELECT f_id,nomFormation FROM formation WHERE f_id = ".$id.";";
}

// Retourne la liste des formations correspondant au nom saisi
function getFormationsByName($name)
{
	string selectQuery = "SELECT f_id, nomFormation FROM formation WHERE nomFormation LIKE ".$name."%;";
}

// Retourne le Groupe correspondant à l'identifiant saisi
function getGroupeByID($id)
{
	string selectQuery = "SELECT g_id, numero, p_id FROM groupe WHERE g_id = ".$id.";";
}

// Retourne la liste des groupes correspondant au nom saisi
function getGroupesByName($name)
{
	string selectQuery = "SELECT g_id, numero, p_id FROM groupe WHERE numero LIKE ".$name."%;";
}

// Retourne la séance correspondant à l'identifiant saisi
function getSeanceById($id)
{
	string selectQuery = "SELECT seance.s_id, matiere.matiereADE, enseignant.nomADE, groupe.numero, seance.h_debut, seance.h_fin, seance.appel ".
		"FROM seance, matiere, enseignant, groupe ".
		"WHERE matiere.m_id = seance.m_id ".
		"AND enseignant.en_id = seance.en_id ".
		"AND seance.g_id = groupe.g_id ".
		"AND seance.s_id = ".$id.";";
}

// Retourne la liste des séances en fonction des filtres saisis
function getSeancesByFiltre($filtre)
{
	string SelectPart = "SELECT * FROM seance";

	//REGION filtre Prof
	if (ListBox_Prof == checked)
	{
		int id_prof = ListBox_Prof.value;

		string selectQuery = SelectPart."WHERE en_id = ".$id_prof.";";
	}
	//ENDREGION

	//REGION Filtre sur groupe
	if (ListBox_Groupe == checked)
	{
		int id_groupe = ListBox_Groupe.value;

		string selectQuery = SelectPart."WHERE g_id = ".$id_groupe.";";
	}
	//ENDREGION

	//REGION Filtre sur la promo
	if (ListBox_Promo == checked)
	{
		int id_promo = ListBox_Promo.value;

		string selectQuery = SelectPart."WHERE f_id = ".^$id_promo.";";
	}
	//ENDREGION

	//REGION Filtre sur la salle
	if(ListBox_Salle == checked)
	{
		int id_salle = ListBox_Salle.value;

		string selectQuery = SelectPart."WHERE salle_id = ".$id_salle.";";
	}
	//ENDREGION

	//REGION Filtre sur les profs et la promo
	if (ListBox_Prof == checked && ListBox_Promo == checked)
	{
		int id_prof = ListBox_Prof.value;
		int id_promo = ListBox_Promo.value;

		string selectQuery = SelectPart."WHERE en_id = ".$id_prof." AND f_id = ".$id_promo.";";
	}
	//ENDREGION

	//REGION Filtre sur les profs et la salle
	if (ListBox_Prof == checked && ListBox_Salle == checked)
	{
		int id_prof = ListBox_Prof.value;
		int id_salle = ListBox_Salle.value;

		string selectQuery = SelectPart."WHERE en_id = ".$id_prof." AND salle_id = ".$id_salle.";";
	}
	//ENDREGION

	//REGION Filtre sur la promo et le groupe
	if (ListBox_Promo == checked && ListBox_Groupe == checked)
	{
		int id_promo = ListBox_Promo.value;
		int id_groupe = ListBox_Groupe.value;

		string selectQuery = SelectPart."WHERE f_id = ".$id_promo." AND g_id = ".$id_groupe.";";
	}
	//ENDREGION

	//REGION filtre sur les profs, la promo et les groupes
	if (ListBox_Prof == checked && ListBox_Promo == checked && ListBox_Groupe == checked)
	{
		int id_prof = ListBox_Prof.value;
		int id_promo = ListBox_Promo.value;
		int id_groupe = ListBox_Groupe.value;

		string selectQuery = SelectPart."WHERE en_id = ".$id_prof."AND f_id = ".$id_promo." AND g_id = ".$id_groupe.";";
	}
	//ENDREGION

}
