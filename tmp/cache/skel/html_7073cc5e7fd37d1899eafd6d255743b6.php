<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/contenu/page-404.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Tue, 16 Apr 2013 09:09:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/contenu/page-404.html
// Temps de compilation total: 2.277 ms
//

function html_7073cc5e7fd37d1899eafd6d255743b6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<p id="hierarchie"><a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a> &gt; <strong class="on">' .
_T('public|spip|ecrire:pass_erreur') .
' 404</strong></p>

<div class="contenu-principal">
	<div class="cartouche">
		<h1 class="h1">' .
_T('public|spip|ecrire:pass_erreur') .
' 404</h1>
	</div>
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreur', null),true))))!=='' ?
		('<div class="chapo">' . $t1 . '</div>') :
		'') .
'
</div>');

	return analyse_resultat_skel('html_7073cc5e7fd37d1899eafd6d255743b6', $Cache, $page, 'plugins/auto/z/v1.7.21/contenu/page-404.html');
}
?>