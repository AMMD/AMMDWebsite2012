<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/saisies/selection.html
 * Date :      Sat, 06 Oct 2012 17:00:08 GMT
 * Compile :   Wed, 01 May 2013 13:01:48 GMT
 * Boucles :   _selection
 */ 

function BOUCLE_selectionhtml_fa3fc4dcc593748e49983a73002e2665(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'datas', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_selection';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
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
		array('../plugins/auto/saisies/v1.27.0/saisies/selection.html','html_fa3fc4dcc593748e49983a73002e2665','_selection',30,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<option value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['cle'] == table_valeur($Pile["vars"], (string)'valeur', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
interdire_scripts($Pile[$SP]['valeur']) .
'</option>
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/saisies/selection.html
// Temps de compilation total: 6.701 ms
//

function html_fa3fc4dcc593748e49983a73002e2665($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][(string)'datas'] = interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null))) .
vide($Pile['vars'][(string)'datas'] = (is_string(table_valeur($Pile["vars"], (string)'datas', null)) ? saisies_chaine2tableau(table_valeur($Pile["vars"], (string)'datas', null)):table_valeur($Pile["vars"], (string)'datas', null))) .
'
' .
vide($Pile['vars'][(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'valeur_forcee', null),true)) ? interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true)):interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true)))):interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur_forcee', null),true))))) .
'<select name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'size', null),true))))!=='' ?
		(' size="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
'>
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'cacher_option_intro', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'<option value="">' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'option_intro', null),true)) .
	'</option>')) :
		'') .
'
' .
BOUCLE_selectionhtml_fa3fc4dcc593748e49983a73002e2665($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>
');

	return analyse_resultat_skel('html_fa3fc4dcc593748e49983a73002e2665', $Cache, $page, '../plugins/auto/saisies/v1.27.0/saisies/selection.html');
}
?>