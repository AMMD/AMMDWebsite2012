<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/saisies-vues/_base.html
 * Date :      Sat, 29 Sep 2012 12:00:12 GMT
 * Compile :   Tue, 16 Apr 2013 12:23:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/saisies-vues/_base.html
// Temps de compilation total: 7.101 ms
//

function html_297498d2be0ad561a1d03c46b9de9783($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(interdire_scripts(((is_null(entites_html(table_valeur(@$Pile[0], (string)'sans_reponse', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	' ' .
	vide($Pile['vars'][(string)'sans_reponse'] = _T('saisies:vue_sans_reponse')) .
	' ')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((is_null(entites_html(table_valeur(@$Pile[0], (string)'sans_reponse', null),true))) ?'' :' '))))!=='' ?
		($t1 . (	' ' .
	vide($Pile['vars'][(string)'sans_reponse'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'sans_reponse', null),true))) .
	' ')) :
		'') .
'

' .
vide($Pile['vars'][(string)'valeur_uniquement'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'valeur_uniquement', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'valeur_uniquement', null),true) != 'non')))) ?' ' :'') ? ' ':''))) .
vide($Pile['vars'][(string)'enfants'] = interdire_scripts((((table_valeur(@$Pile[0], (string)'saisies', null)) AND (interdire_scripts(is_array(table_valeur(@$Pile[0], (string)'saisies', null))))) ?' ' :''))) .
'
	' .
vide($Pile['vars'][(string)'reponse'] = '') .
(($t1 = strval(interdire_scripts(((find_in_path((	'saisies-vues/' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true)) .
	'.html'))) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][(string)'reponse'] = trim(recuperer_fond( (	'saisies-vues/' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))) , array_merge($Pile[0],array('sans_reponse' => table_valeur($Pile["vars"], (string)'sans_reponse', null) )), array('compil'=>array('plugins/auto/saisies/v1.27.0/saisies-vues/_base.html','html_297498d2be0ad561a1d03c46b9de9783','',0,$GLOBALS['spip_lang'])), ''))))) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(((find_in_path((	'saisies-vues/' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true)) .
	'.html'))) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][(string)'reponse'] = interdire_scripts(trim(table_valeur(@$Pile[0], (string)'valeur', null)))))) :
		'') .
'




' .
(!(table_valeur($Pile["vars"], (string)'valeur_uniquement', null))  ?
		(' ' . (	'
<div class="afficher' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))))!=='' ?
			(' afficher_' . $t2) :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))))!=='' ?
			(' saisie_' . $t2) :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'li_class', null),true))))!=='' ?
			(' ' . $t2) :
			'') .
	(!(table_valeur($Pile["vars"], (string)'reponse', null))  ?
			(' ' . ' ' . 'sans_reponse') :
			'') .
	'">
	
	' .
	((table_valeur($Pile["vars"], (string)'enfants', null))  ?
			(' ' . (	'
		' .
		table_valeur($Pile["vars"], (string)'reponse', null))) :
			'') .
	'
	' .
	(((((table_valeur($Pile["vars"], (string)'enfants', null)) ?'' :' ')) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true) != 'explication'))))  ?
			(' ' . (	'
		' .
		(($t3 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'label_case', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'label', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))),true))))!=='' ?
				('<strong class="label">' . $t3 . '</strong>') :
				'') .
		'
		<div class="valeur">
		' .
		propre(((($a = table_valeur($Pile["vars"], (string)'reponse', null)) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'sans_reponse', null))) .
		'
		</div>
	')) :
			'') .
	'
</div>
')) :
		'') .
'


' .
((table_valeur($Pile["vars"], (string)'valeur_uniquement', null))  ?
		(' ' . (	'
	
	' .
	((table_valeur($Pile["vars"], (string)'enfants', null))  ?
			(' ' . (	'
		' .
		table_valeur($Pile["vars"], (string)'reponse', null))) :
			'') .
	'
	' .
	(!(table_valeur($Pile["vars"], (string)'enfants', null))  ?
			(' ' . (	'
		' .
		propre(((($a = table_valeur($Pile["vars"], (string)'reponse', null)) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'sans_reponse', null))) .
		'
	')) :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_297498d2be0ad561a1d03c46b9de9783', $Cache, $page, 'plugins/auto/saisies/v1.27.0/saisies-vues/_base.html');
}
?>