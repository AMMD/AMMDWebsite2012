<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/hierarchie/formulaires.html
 * Date :      Thu, 06 Sep 2012 16:01:06 GMT
 * Compile :   Wed, 01 May 2013 13:01:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/hierarchie/formulaires.html
// Temps de compilation total: 0.234 ms
//

function html_fd3194fb444992621ba3243f22d8d099($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- hierarchie -->
<strong class="on">' .
_T('formulaire:titre_formulaires') .
'</strong>
');

	return analyse_resultat_skel('html_fd3194fb444992621ba3243f22d8d099', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/hierarchie/formulaires.html');
}
?>