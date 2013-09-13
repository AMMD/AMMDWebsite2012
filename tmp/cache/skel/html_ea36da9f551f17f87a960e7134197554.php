<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/saisies/textarea.html
 * Date :      Sat, 06 Oct 2012 17:00:08 GMT
 * Compile :   Wed, 01 May 2013 21:35:31 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/saisies/textarea.html
// Temps de compilation total: 5.262 ms
//

function html_ea36da9f551f17f87a960e7134197554($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][(string)'valeur'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true))) .
vide($Pile['vars'][(string)'valeur'] = (is_array(table_valeur($Pile["vars"], (string)'valeur', null)) ? saisies_tableau2chaine(table_valeur($Pile["vars"], (string)'valeur', null)):table_valeur($Pile["vars"], (string)'valeur', null))) .
'<textarea name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		($t1 . ' ') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'inserer_barre', null),true))))!=='' ?
		('inserer_barre_' . $t1 . ' ') :
		'') .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'previsualisation', null),true)) ?' ' :''))))!=='' ?
		($t1 . 'inserer_previsualisation') :
		'') .
'" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'" rows="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'rows', null), '20'),true)) .
'" cols="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'cols', null), '40'),true)) .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(((((((((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) AND ((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) .
	'!={non}'))) ?' ' :'')) AND ('')) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . ' required="required"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
'>' .
table_valeur($Pile["vars"], (string)'valeur', null) .
'</textarea>
');

	return analyse_resultat_skel('html_ea36da9f551f17f87a960e7134197554', $Cache, $page, 'plugins/auto/saisies/v1.27.0/saisies/textarea.html');
}
?>