<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/extra/page-sommaire.html
 * Date :      Fri, 25 Feb 2011 17:00:16 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/extra/page-sommaire.html
// Temps de compilation total: 0.098 ms
//

function html_caec86377db9b436f634e9ada2f698ff($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_caec86377db9b436f634e9ada2f698ff', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/extra/page-sommaire.html');
}
?>