<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/saisies/champ.html
 * Date :      Sun, 22 Jan 2012 10:00:14 GMT
 * Compile :   Wed, 01 May 2013 13:03:41 GMT
 * Boucles :   _test_type, _parcours_recursif, _test_enfants, _parcours
 */ 

function BOUCLE_test_typehtml_f6660a8d2791ea80eef24266363b8ca6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'forcer_type', null),true)) ?'' :' ')) OR (in_array(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'saisie'),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'forcer_type', null),true))))) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_type';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/auto/formidable/v1.3.5/saisies/champ.html','html_f6660a8d2791ea80eef24266363b8ca6','_test_type',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			<option value="' .
table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom') .
'" style="padding-left:' .
table_valeur($Pile["vars"], (string)'padding', null) .
'px" ' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'saisie_a_positionner', null),true))),true) == table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom'))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>
				' .
((($a = table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'label')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom')) .
'
			</option>
			');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_parcours_recursifhtml_f6660a8d2791ea80eef24266363b8ca6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_parcours']) ? $Numrows['_parcours'] : array());
	$t0 = BOUCLE_parcourshtml_f6660a8d2791ea80eef24266363b8ca6($Cache, $Pile, $doublons, $Numrows, $SP);
	$Numrows['_parcours'] = ($save_numrows);
	return $t0;
}


function BOUCLE_test_enfantshtml_f6660a8d2791ea80eef24266363b8ca6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = is_array(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'saisies'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_enfants';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/auto/formidable/v1.3.5/saisies/champ.html','html_f6660a8d2791ea80eef24266363b8ca6','_test_enfants',13,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		<optgroup style="padding-left:' .
table_valeur($Pile["vars"], (string)'padding', null) .
'px" label="' .
((($a = table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'label')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom')) .
'">
				' .
vide($Pile['vars'][(string)'tab'] = table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'saisies')) .
vide($Pile['vars'][(string)'padding'] = plus(table_valeur($Pile["vars"], (string)'padding', null),'20')) .
BOUCLE_parcours_recursifhtml_f6660a8d2791ea80eef24266363b8ca6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				' .
vide($Pile['vars'][(string)'padding'] = moins(table_valeur($Pile["vars"], (string)'padding', null),'20')) .
'</optgroup>
		');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_parcourshtml_f6660a8d2791ea80eef24266363b8ca6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'tab', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_parcours';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/formidable/v1.3.5/saisies/champ.html','html_f6660a8d2791ea80eef24266363b8ca6','_parcours',11,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
vide($Pile['vars'][(string)'saisie'] = interdire_scripts($Pile[$SP]['valeur'])) .
(($t1 = BOUCLE_test_enfantshtml_f6660a8d2791ea80eef24266363b8ca6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
			' .
	BOUCLE_test_typehtml_f6660a8d2791ea80eef24266363b8ca6($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
		'))) .
'
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/saisies/champ.html
// Temps de compilation total: 8.653 ms
//

function html_f6660a8d2791ea80eef24266363b8ca6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<select name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" id="champ_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'">
	<option value="">' .
_T('formidable:traitements_champ_aucun') .
'</option>
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'forcer_type', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][(string)'tab'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'formulaire', null),true))))) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'forcer_type', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][(string)'tab'] = interdire_scripts(saisies_lister_par_nom(entites_html(table_valeur(@$Pile[0], (string)'formulaire', null),true),'0'))) .
	'
	')) :
		'') .
'
	' .
vide($Pile['vars'][(string)'padding'] = '0') .
BOUCLE_parcourshtml_f6660a8d2791ea80eef24266363b8ca6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>
');

	return analyse_resultat_skel('html_f6660a8d2791ea80eef24266363b8ca6', $Cache, $page, '../plugins/auto/formidable/v1.3.5/saisies/champ.html');
}
?>