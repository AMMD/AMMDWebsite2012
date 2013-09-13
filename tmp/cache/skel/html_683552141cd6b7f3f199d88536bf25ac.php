<?php

/*
 * Squelette : ../prive/squelettes/navigation/auteur_edit.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 13:10:25 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/auteur_edit.html
// Temps de compilation total: 0.078 ms
//

function html_683552141cd6b7f3f199d88536bf25ac($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_683552141cd6b7f3f199d88536bf25ac', $Cache, $page, '../prive/squelettes/navigation/auteur_edit.html');
}
?>