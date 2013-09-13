<?php

/*
 * Squelette : ../prive/squelettes/extra/dist.html
 * Date :      Tue, 20 Nov 2012 08:52:41 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/extra/dist.html
// Temps de compilation total: 0.224 ms
//

function html_5aedcbe9f99c80213b0fe7f6b8692462($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '
<!-- extra -->';

	return analyse_resultat_skel('html_5aedcbe9f99c80213b0fe7f6b8692462', $Cache, $page, '../prive/squelettes/extra/dist.html');
}
?>