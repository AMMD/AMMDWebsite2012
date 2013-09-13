<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/formulaires/recherche.html
 * Date :      Fri, 25 Feb 2011 17:00:16 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/formulaires/recherche.html
// Temps de compilation total: 1.021 ms
//

function html_2cdbeeaa6fe65d6acf003210e280cf2c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_recherche" id="formulaire_recherche">
<form action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'" method="get"><div>
	' .
interdire_scripts(form_hidden(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang', null),true))))!=='' ?
		('<input type="hidden" name="lang" value="' . $t1 . '" />') :
		'') .
'
	<label for="recherche">' .
_T('public|spip|ecrire:info_rechercher') .
'</label>
	<input type="text" class="text" size="10" name="recherche" id="recherche" value="' .
interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_rechercher'))) .
'" accesskey="4" /><input type="submit" class="submit" value="&gt;&gt;" title="' .
_T('public|spip|ecrire:info_rechercher') .
'" />
</div></form>
</div>
');

	return analyse_resultat_skel('html_2cdbeeaa6fe65d6acf003210e280cf2c', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/formulaires/recherche.html');
}
?>