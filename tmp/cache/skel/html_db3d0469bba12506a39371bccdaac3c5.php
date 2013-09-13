<?php

/*
 * Squelette : ../prive/squelettes/navigation/rubriques.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:45:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/rubriques.html
// Temps de compilation total: 1.020 ms
//

function html_db3d0469bba12506a39371bccdaac3c5($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax">
' .
executer_balise_dynamique('FORMULAIRE_EDITER_LOGO',
	array('rubrique','0','',@serialize($Pile[0])),
	array('../prive/squelettes/navigation/rubriques.html','html_db3d0469bba12506a39371bccdaac3c5','',2,$GLOBALS['spip_lang'])) .
'</div>
');

	return analyse_resultat_skel('html_db3d0469bba12506a39371bccdaac3c5', $Cache, $page, '../prive/squelettes/navigation/rubriques.html');
}
?>