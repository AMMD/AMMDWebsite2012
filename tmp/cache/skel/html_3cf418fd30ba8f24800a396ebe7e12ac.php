<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/head/page-sommaire.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/head/page-sommaire.html
// Temps de compilation total: 1.564 ms
//

function html_3cf418fd30ba8f24800a396ebe7e12ac($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<title>' .
interdire_scripts(textebrut(typo(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
(($t1 = strval(interdire_scripts(textebrut(typo(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0]))))))!=='' ?
		(' - ' . $t1) :
		'') .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
');

	return analyse_resultat_skel('html_3cf418fd30ba8f24800a396ebe7e12ac', $Cache, $page, 'plugins/auto/z/v1.7.21/head/page-sommaire.html');
}
?>