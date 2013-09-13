<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/saisies/position_construire_formulaire.html
 * Date :      Wed, 13 Jul 2011 14:00:08 GMT
 * Compile :   Wed, 01 May 2013 13:02:53 GMT
 * Boucles :   _parcours_recursif, _test_enfants, _parcours
 */ 

function BOUCLE_parcours_recursifhtml_0a89c392d42883d1bf60b89ccca056ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_parcours']) ? $Numrows['_parcours'] : array());
	$t0 = (($t1 = BOUCLE_parcourshtml_0a89c392d42883d1bf60b89ccca056ee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
	' .
		vide($Pile['vars'][(string)'parent'] = table_valeur(table_valeur($Pile["vars"], (string)'liste_parents', null),moins(count(table_valeur($Pile["vars"], (string)'liste_parents', null)),'1'))) .
		'<option value="[' .
		table_valeur($Pile["vars"], (string)'parent', null) .
		']" style="padding-left:' .
		table_valeur($Pile["vars"], (string)'padding', null) .
		'px; font-style:italic;">
		' .
		(!(table_valeur($Pile["vars"], (string)'parent', null))  ?
				(' ' . (	'
			' .
			_T('saisies:construire_position_fin_formulaire') .
			'
		')) :
				'') .
		'
		' .
		((table_valeur($Pile["vars"], (string)'parent', null))  ?
				(' ' . (	'
			' .
			vide($Pile['vars'][(string)'groupe'] = table_valeur(table_valeur($Pile["vars"], (string)'tab_par_nom', null),table_valeur($Pile["vars"], (string)'parent', null))) .
			vide($Pile['vars'][(string)'groupe'] = couper(((($a = table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'label')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'nom')),'60')) .
			_T('saisies:construire_position_fin_groupe', array('groupe' => table_valeur($Pile["vars"], (string)'groupe', null))) .
			'
		')) :
				'') .
		'
	</option>
	')) :
		((	'
	' .
	vide($Pile['vars'][(string)'parent'] = table_valeur(table_valeur($Pile["vars"], (string)'liste_parents', null),moins(count(table_valeur($Pile["vars"], (string)'liste_parents', null)),'1'))) .
	'<option value="[' .
	table_valeur($Pile["vars"], (string)'parent', null) .
	']" style="padding-left:' .
	table_valeur($Pile["vars"], (string)'padding', null) .
	'px; font-style:italic;">
		' .
	(!(table_valeur($Pile["vars"], (string)'parent', null))  ?
			(' ' . (	'
			' .
		_T('saisies:construire_position_fin_formulaire') .
		'
		')) :
			'') .
	'
		' .
	((table_valeur($Pile["vars"], (string)'parent', null))  ?
			(' ' . (	'
			' .
		vide($Pile['vars'][(string)'groupe'] = table_valeur(table_valeur($Pile["vars"], (string)'tab_par_nom', null),table_valeur($Pile["vars"], (string)'parent', null))) .
		vide($Pile['vars'][(string)'groupe'] = couper(((($a = table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'label')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'nom')),'60')) .
		_T('saisies:construire_position_fin_groupe', array('groupe' => table_valeur($Pile["vars"], (string)'groupe', null))) .
		'
		')) :
			'') .
	'
	</option>
	')));
	$Numrows['_parcours'] = ($save_numrows);
	return $t0;
}


function BOUCLE_test_enfantshtml_0a89c392d42883d1bf60b89ccca056ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = ((((table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom') != interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'saisie_a_positionner', null),true)))) AND (is_array(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'saisies')))) ?' ' :'');

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
		array('../plugins/auto/saisies/v1.27.0/saisies/position_construire_formulaire.html','html_0a89c392d42883d1bf60b89ccca056ee','_test_enfants',13,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
vide($Pile['vars'][(string)'tab'] = table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'saisies')) .
vide($Pile['vars'][(string)'padding'] = plus(table_valeur($Pile["vars"], (string)'padding', null),'20')) .
vide(($cle='liste_parents')
			. vide((!isset($Pile['vars'][$cle]) OR !is_array($Pile['vars'][$cle]))?$Pile['vars'][$cle]=array():'')
			. vide($Pile['vars'][$cle][]=table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom'))) .
BOUCLE_parcours_recursifhtml_0a89c392d42883d1bf60b89ccca056ee($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		' .
vide($Pile['vars'][(string)'padding'] = moins(table_valeur($Pile["vars"], (string)'padding', null),'20')) .
vide($Pile['vars'][(string)'liste_parents'] = array_slice(table_valeur($Pile["vars"], (string)'liste_parents', null),'0','-1')));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_parcourshtml_0a89c392d42883d1bf60b89ccca056ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('../plugins/auto/saisies/v1.27.0/saisies/position_construire_formulaire.html','html_0a89c392d42883d1bf60b89ccca056ee','_parcours',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][(string)'saisie'] = interdire_scripts($Pile[$SP]['valeur'])) .
'<option value="' .
table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom') .
'" style="padding-left:' .
table_valeur($Pile["vars"], (string)'padding', null) .
'px" ' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'saisie_a_positionner', null),true))),true) == table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom'))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>
		' .
couper(((($a = table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'label')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'saisie', null),'options'),'nom')),'60') .
'
	</option>
		' .
BOUCLE_test_enfantshtml_0a89c392d42883d1bf60b89ccca056ee($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/saisies/position_construire_formulaire.html
// Temps de compilation total: 15.519 ms
//

function html_0a89c392d42883d1bf60b89ccca056ee($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<select name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" id="champ_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'">
	' .
vide($Pile['vars'][(string)'tab'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'formulaire', null),true))) .
vide($Pile['vars'][(string)'tab_par_nom'] = interdire_scripts(saisies_lister_par_nom(entites_html(table_valeur(@$Pile[0], (string)'formulaire', null),true)))) .
vide($Pile['vars'][(string)'padding'] = '0') .
vide($Pile['vars'][(string)'liste_parents'] = array('0' => '')) .
(($t1 = BOUCLE_parcourshtml_0a89c392d42883d1bf60b89ccca056ee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
	' .
		vide($Pile['vars'][(string)'parent'] = table_valeur(table_valeur($Pile["vars"], (string)'liste_parents', null),moins(count(table_valeur($Pile["vars"], (string)'liste_parents', null)),'1'))) .
		'<option value="[' .
		table_valeur($Pile["vars"], (string)'parent', null) .
		']" style="padding-left:' .
		table_valeur($Pile["vars"], (string)'padding', null) .
		'px; font-style:italic;">
		' .
		(!(table_valeur($Pile["vars"], (string)'parent', null))  ?
				(' ' . (	'
			' .
			_T('saisies:construire_position_fin_formulaire') .
			'
		')) :
				'') .
		'
		' .
		((table_valeur($Pile["vars"], (string)'parent', null))  ?
				(' ' . (	'
			' .
			vide($Pile['vars'][(string)'groupe'] = table_valeur(table_valeur($Pile["vars"], (string)'tab_par_nom', null),table_valeur($Pile["vars"], (string)'parent', null))) .
			vide($Pile['vars'][(string)'groupe'] = couper(((($a = table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'label')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'nom')),'60')) .
			_T('saisies:construire_position_fin_groupe', array('groupe' => table_valeur($Pile["vars"], (string)'groupe', null))) .
			'
		')) :
				'') .
		'
	</option>
	')) :
		((	'
	' .
	vide($Pile['vars'][(string)'parent'] = table_valeur(table_valeur($Pile["vars"], (string)'liste_parents', null),moins(count(table_valeur($Pile["vars"], (string)'liste_parents', null)),'1'))) .
	'<option value="[' .
	table_valeur($Pile["vars"], (string)'parent', null) .
	']" style="padding-left:' .
	table_valeur($Pile["vars"], (string)'padding', null) .
	'px; font-style:italic;">
		' .
	(!(table_valeur($Pile["vars"], (string)'parent', null))  ?
			(' ' . (	'
			' .
		_T('saisies:construire_position_fin_formulaire') .
		'
		')) :
			'') .
	'
		' .
	((table_valeur($Pile["vars"], (string)'parent', null))  ?
			(' ' . (	'
			' .
		vide($Pile['vars'][(string)'groupe'] = table_valeur(table_valeur($Pile["vars"], (string)'tab_par_nom', null),table_valeur($Pile["vars"], (string)'parent', null))) .
		vide($Pile['vars'][(string)'groupe'] = couper(((($a = table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'label')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'groupe', null),'options'),'nom')),'60')) .
		_T('saisies:construire_position_fin_groupe', array('groupe' => table_valeur($Pile["vars"], (string)'groupe', null))) .
		'
		')) :
			'') .
	'
	</option>
	'))) .
'
</select>
');

	return analyse_resultat_skel('html_0a89c392d42883d1bf60b89ccca056ee', $Cache, $page, '../plugins/auto/saisies/v1.27.0/saisies/position_construire_formulaire.html');
}
?>