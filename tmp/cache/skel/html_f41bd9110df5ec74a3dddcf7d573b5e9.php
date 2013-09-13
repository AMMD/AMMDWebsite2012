<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/head/dist.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Tue, 16 Apr 2013 12:32:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/head/dist.html
// Temps de compilation total: 1.602 ms
//

function html_f41bd9110df5ec74a3dddcf7d573b5e9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<title>' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		''));

	return analyse_resultat_skel('html_f41bd9110df5ec74a3dddcf7d573b5e9', $Cache, $page, 'plugins/auto/z/v1.7.21/head/dist.html');
}
?>