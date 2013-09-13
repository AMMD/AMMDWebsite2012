<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/head/page-404.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Tue, 16 Apr 2013 09:09:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/head/page-404.html
// Temps de compilation total: 0.352 ms
//

function html_b348556085cd47a2982e897d1da9c531($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<title>' .
_T('public|spip|ecrire:pass_erreur') .
' 404 - ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
<meta name="robots" content="none" />
');

	return analyse_resultat_skel('html_b348556085cd47a2982e897d1da9c531', $Cache, $page, 'plugins/auto/z/v1.7.21/head/page-404.html');
}
?>