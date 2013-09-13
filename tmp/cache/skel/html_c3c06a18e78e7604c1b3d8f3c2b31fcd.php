<?php

/*
 * Squelette : plugins/auto/theme_maparaan/v1.0.1/inc-insert-head.html
 * Date :      Wed, 08 Jun 2011 16:01:50 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/theme_maparaan/v1.0.1/inc-insert-head.html
// Temps de compilation total: 0.364 ms
//

function html_c3c06a18e78e7604c1b3d8f3c2b31fcd($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(interdire_scripts(generer_url_public('main-loading.js', ''))))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'');

	return analyse_resultat_skel('html_c3c06a18e78e7604c1b3d8f3c2b31fcd', $Cache, $page, 'plugins/auto/theme_maparaan/v1.0.1/inc-insert-head.html');
}
?>