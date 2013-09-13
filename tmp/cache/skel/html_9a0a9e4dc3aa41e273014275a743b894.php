<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaires.html
 * Date :      Thu, 06 Sep 2012 16:01:10 GMT
 * Compile :   Wed, 01 May 2013 13:01:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaires.html
// Temps de compilation total: 1.619 ms
//

function html_9a0a9e4dc3aa41e273014275a743b894($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir(_T('formidable:importer_formulaire'), 'info') .
'
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	executer_balise_dynamique('FORMULAIRE_IMPORTER_FORMULAIRE',
	array(),
	array('../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaires.html','html_9a0a9e4dc3aa41e273014275a743b894','',3,$GLOBALS['spip_lang'])) .
	'
')) :
		'') .
'
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_9a0a9e4dc3aa41e273014275a743b894', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaires.html');
}
?>