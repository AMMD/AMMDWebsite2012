<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/inclure/entete.html
 * Date :      Wed, 23 Mar 2011 09:00:28 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/inclure/entete.html
// Temps de compilation total: 2.865 ms
//

function html_fac15c279c6656a0bf5edce0b1c5e87d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="accueil">
	' .
(($t1 = strval(filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'0','100'),'0','100','center','48423D'))))!=='' ?
		((	'<a rel="start home" href="' .
	htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'/" title="' .
	_T('public|spip|ecrire:accueil_site') .
	'">') . $t1 . '</a>') :
		'') .
'
	<strong id="nom_site_spip"><a rel="start home" href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/" title="' .
_T('public|spip|ecrire:accueil_site') .
'">' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</a></strong>
	' .
(($t1 = strval(interdire_scripts(PtoBR(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		('<div id=\'slogan_site_spip\'>' . $t1 . '</div>') :
		'') .
'
</div>
' .
executer_balise_dynamique('MENU_LANG',
	array(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])),
	array('plugins/auto/squelette_maparaan/v1.0.0/inclure/entete.html','html_fac15c279c6656a0bf5edce0b1c5e87d','',6,$GLOBALS['spip_lang'])) .
'

');

	return analyse_resultat_skel('html_fac15c279c6656a0bf5edce0b1c5e87d', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/inclure/entete.html');
}
?>