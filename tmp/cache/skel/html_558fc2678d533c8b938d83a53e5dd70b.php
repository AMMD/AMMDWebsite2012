<?php

/*
 * Squelette : prive/formulaires/inc-options-langues.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   _langues
 */ 

function BOUCLE_langueshtml_558fc2678d533c8b938d83a53e5dd70b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(liste_options_langues(table_valeur(@$Pile[0], (string)'name', null))));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_langues';
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
		array('prive/formulaires/inc-options-langues.html','html_558fc2678d533c8b938d83a53e5dd70b','_langues',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_multi_herit');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'herit', null)))) ?' ' :''))))!=='' ?
		($t1 . (	'
		<option class=\'maj-debut on\' value=\'herit\'' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'default', null)))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	' dir="' .
	interdire_scripts(lang_dir($Pile[$SP]['valeur'],'ltr','rtl')) .
	'">&#91;' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'&#93; ' .
	interdire_scripts(traduire_nom_langue($Pile[$SP]['valeur'])) .
	' (' .
	$l1 .
	')</option>
	')) :
		'') .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'herit', null)))) ?'' :' '))))!=='' ?
		($t1 . (	'
		<option value=\'' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'\'' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'default', null)))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	' dir="' .
	interdire_scripts(lang_dir($Pile[$SP]['valeur'],'ltr','rtl')) .
	'">&#91;' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'&#93; ' .
	interdire_scripts(traduire_nom_langue($Pile[$SP]['valeur'])) .
	'</option>
	')) :
		'') .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette prive/formulaires/inc-options-langues.html
// Temps de compilation total: 5.890 ms
//

function html_558fc2678d533c8b938d83a53e5dd70b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_langueshtml_558fc2678d533c8b938d83a53e5dd70b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_558fc2678d533c8b938d83a53e5dd70b', $Cache, $page, 'prive/formulaires/inc-options-langues.html');
}
?>