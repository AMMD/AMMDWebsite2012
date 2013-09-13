<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/contenu/page-login.html
 * Date :      Wed, 23 Mar 2011 09:00:22 GMT
 * Compile :   Tue, 16 Apr 2013 12:32:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/contenu/page-login.html
// Temps de compilation total: 5.835 ms
//

function html_b6c19838ed3f2d57b3046ef88de82060($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'url', null),true) == '') ? vide($Pile['vars'][(string)'prive'] = ' '):'')) .
'
' .
interdire_scripts((match(entites_html(table_valeur(@$Pile[0], (string)'url', null),true),(	'^' .
	interdire_scripts(eval('return '.'_DIR_RESTREINT_ABS'.';')))) ? vide($Pile['vars'][(string)'prive'] = ' '):'')) .
'


<p id="hierarchie"><a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a>' .
(($t1 = strval((table_valeur($Pile["vars"], (string)'prive', null) ? _T('public|spip|ecrire:login_acces_prive'):_T('public|spip|ecrire:lien_connecter'))))!=='' ?
		(' &gt; <strong class="on">' . $t1 . '</strong>') :
		'') .
'</p>

<div class="padd-post-item padd-post-item-single">
	<div class="padd-post-item-title cartouche page-recherche">			
		<h2><div class="info-publi">' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</div>' .
(table_valeur($Pile["vars"], (string)'prive', null) ? _T('public|spip|ecrire:login_acces_prive'):_T('public|spip|ecrire:lien_connecter')) .
'</h2>
	</div>
	' .
executer_balise_dynamique('MENU_LANG_ECRIRE',
	array(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])),
	array('plugins/auto/squelette_maparaan/v1.0.0/contenu/page-login.html','html_b6c19838ed3f2d57b3046ef88de82060','',12,$GLOBALS['spip_lang'])) .
'
	
	' .
executer_balise_dynamique('FORMULAIRE_LOGIN',
	array(interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'url', null),true)) OR (is_string($a) AND strlen($a))) ? $a : generer_url_ecrire('accueil')))),
	array('plugins/auto/squelette_maparaan/v1.0.0/contenu/page-login.html','html_b6c19838ed3f2d57b3046ef88de82060','',8,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_b6c19838ed3f2d57b3046ef88de82060', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/contenu/page-login.html');
}
?>