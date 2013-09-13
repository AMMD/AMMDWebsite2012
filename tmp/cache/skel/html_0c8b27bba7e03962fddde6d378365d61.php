<?php

/*
 * Squelette : ../prive/objets/editer/traductions.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:45:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/objets/editer/traductions.html
// Temps de compilation total: 2.964 ms
//

function html_0c8b27bba7e03962fddde6d378365d61($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][(string)'table'] = interdire_scripts(table_objet_sql(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)))) .
(((in_any(table_valeur($Pile["vars"], (string)'table', null),interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('multi_objets',null,false):''),',')))) OR (in_any(table_valeur($Pile["vars"], (string)'table', null),interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('gerer_trad_objets',null,false):''),',')))))  ?
		(' ' . (	'
<div class="ajax">
	' .
	executer_balise_dynamique('FORMULAIRE_TRADUIRE',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'retour', null), ''),true)),in_any(table_valeur($Pile["vars"], (string)'table', null),interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('gerer_trad_objets',null,false):''),',')))),
	array('../prive/objets/editer/traductions.html','html_0c8b27bba7e03962fddde6d378365d61','',5,$GLOBALS['spip_lang'])) .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_0c8b27bba7e03962fddde6d378365d61', $Cache, $page, '../prive/objets/editer/traductions.html');
}
?>