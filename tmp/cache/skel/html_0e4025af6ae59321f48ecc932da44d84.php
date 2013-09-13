<?php

/*
 * Squelette : plugins/auto/menus/menus/accueil.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/menus/menus/accueil.html
// Temps de compilation total: 2.324 ms
//

function html_0e4025af6ae59321f48ecc932da44d84($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'titre'] = _T('public|spip|ecrire:accueil_site')) .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'titre', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][(string)'titre'] = interdire_scripts(typo(table_valeur(@$Pile[0], (string)'titre', null)))))) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'appel_formulaire', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="titre">' .
	table_valeur($Pile["vars"], (string)'titre', null) .
	'</div>
	<div class="infos">' .
	_T('public|spip|ecrire:info_racine_site') .
	'</div>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'appel_menu', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<li class="menu-entree item' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'css', null),true))))!=='' ?
			(' ' . $t2) :
			'') .
	(($t2 = strval(interdire_scripts(((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'env', null),true),'type') == 'page')) AND (interdire_scripts((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'env', null),true),'composition') == 'sommaire')))) ?' ' :''))))!=='' ?
			($t2 . ' on') :
			'') .
	'">
		<a href="' .
	htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'/" title="' .
	attribut_html(table_valeur($Pile["vars"], (string)'titre', null)) .
	'">' .
	table_valeur($Pile["vars"], (string)'titre', null) .
	'</a>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_0e4025af6ae59321f48ecc932da44d84', $Cache, $page, 'plugins/auto/menus/menus/accueil.html');
}
?>