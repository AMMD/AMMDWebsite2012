<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_multilang.html
 * Date :      Tue, 20 Nov 2012 08:52:41 GMT
 * Compile :   Tue, 16 Apr 2013 11:04:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_multilang.html
// Temps de compilation total: 1.934 ms
//

function html_209b23373712312994f8ff142edc83fc($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_multilang')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:info_langues') .
'</h1>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_MULTILINGUISME',
	array(),
	array('../prive/squelettes/contenu/configurer_multilang.html','html_209b23373712312994f8ff142edc83fc','',4,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_209b23373712312994f8ff142edc83fc', $Cache, $page, '../prive/squelettes/contenu/configurer_multilang.html');
}
?>