<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/extra/dist.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Tue, 16 Apr 2013 09:09:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/extra/dist.html
// Temps de compilation total: 0.912 ms
//

function html_d976930d9be5bd441f92207e8467c5a2($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
executer_balise_dynamique('FORMULAIRE_INSCRIPTION',
	array(),
	array('plugins/auto/z/v1.7.21/extra/dist.html','html_d976930d9be5bd441f92207e8467c5a2','',2,$GLOBALS['spip_lang'])) .
'
');

	return analyse_resultat_skel('html_d976930d9be5bd441f92207e8467c5a2', $Cache, $page, 'plugins/auto/z/v1.7.21/extra/dist.html');
}
?>