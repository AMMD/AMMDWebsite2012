<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/inclure/generer_saisies.html
 * Date :      Fri, 20 Jan 2012 19:00:24 GMT
 * Compile :   Wed, 01 May 2013 21:35:30 GMT
 * Boucles :   _contenu
 */ 

function BOUCLE_contenuhtml_223ed98757d64565f90b4002e82846a0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('plugins/auto/saisies/v1.27.0/inclure/generer_saisies.html','html_223ed98757d64565f90b4002e82846a0','_contenu',39,$GLOBALS['spip_lang'])
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
	saisies_generer_html($Pile[$SP]['valeur'],interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'_env', null),true)) OR (is_string($a) AND strlen($a))) ? $a : unserialize(@serialize($Pile[0]))))) .
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
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/inclure/generer_saisies.html
// Temps de compilation total: 2.959 ms
//

function html_223ed98757d64565f90b4002e82846a0($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
BOUCLE_contenuhtml_223ed98757d64565f90b4002e82846a0($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'from_fieldset', null),true)) ?'' :' ')) AND (interdire_scripts(saisies_afficher_si(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true))))) ?' ' :''))))!=='' ?
		($t1 . (	' ' .
	recuperer_fond( 'inclure/js_afficher_si' , array_merge($Pile[0],array()), array('compil'=>array('plugins/auto/saisies/v1.27.0/inclure/generer_saisies.html','html_223ed98757d64565f90b4002e82846a0','',46,$GLOBALS['spip_lang'])), ''))) :
		'') .
'
');

	return analyse_resultat_skel('html_223ed98757d64565f90b4002e82846a0', $Cache, $page, 'plugins/auto/saisies/v1.27.0/inclure/generer_saisies.html');
}
?>