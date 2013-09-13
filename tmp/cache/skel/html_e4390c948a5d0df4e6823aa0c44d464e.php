<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/inclure/voir_saisies.html
 * Date :      Tue, 28 Jun 2011 21:00:14 GMT
 * Compile :   Tue, 16 Apr 2013 12:23:04 GMT
 * Boucles :   _saisies
 */ 

function BOUCLE_saisieshtml_e4390c948a5d0df4e6823aa0c44d464e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'saisies', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_saisies';
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
		array('plugins/auto/saisies/v1.27.0/inclure/voir_saisies.html','html_e4390c948a5d0df4e6823aa0c44d464e','_saisies',3,$GLOBALS['spip_lang'])
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
	interdire_scripts(saisies_generer_vue($Pile[$SP]['valeur'],interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'_env', null),true)) OR (is_string($a) AND strlen($a))) ? $a : unserialize(@serialize($Pile[0])))))) .
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
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/inclure/voir_saisies.html
// Temps de compilation total: 4.751 ms
//

function html_e4390c948a5d0df4e6823aa0c44d464e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][(string)'saisies'] = interdire_scripts(saisies_verifier_afficher_si(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true),unserialize(@serialize($Pile[0]))))) .
'
' .
BOUCLE_saisieshtml_e4390c948a5d0df4e6823aa0c44d464e($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_e4390c948a5d0df4e6823aa0c44d464e', $Cache, $page, 'plugins/auto/saisies/v1.27.0/inclure/voir_saisies.html');
}
?>