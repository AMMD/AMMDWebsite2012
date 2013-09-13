<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/formulaires/inc-generer_saisies_configurables.html
 * Date :      Thu, 07 Jul 2011 17:00:02 GMT
 * Compile :   Wed, 01 May 2013 13:02:04 GMT
 * Boucles :   _contenu
 */ 

function BOUCLE_contenuhtml_a753113466bebbea197cfe990e6de052(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true)));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_contenu';
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
		array('../plugins/auto/saisies/v1.27.0/formulaires/inc-generer_saisies_configurables.html','html_a753113466bebbea197cfe990e6de052','_contenu',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
((array_key_exists('saisie',interdire_scripts($Pile[$SP]['valeur'])))  ?
		(' ' . (	'
	' .
	formidable_generer_saisie_configurable($Pile[$SP]['valeur'],interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'_env', null),true)) OR (is_string($a) AND strlen($a))) ? $a : unserialize(@serialize($Pile[0]))))) .
	'
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
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/formulaires/inc-generer_saisies_configurables.html
// Temps de compilation total: 2.434 ms
//

function html_a753113466bebbea197cfe990e6de052($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_contenuhtml_a753113466bebbea197cfe990e6de052($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_a753113466bebbea197cfe990e6de052', $Cache, $page, '../plugins/auto/saisies/v1.27.0/formulaires/inc-generer_saisies_configurables.html');
}
?>