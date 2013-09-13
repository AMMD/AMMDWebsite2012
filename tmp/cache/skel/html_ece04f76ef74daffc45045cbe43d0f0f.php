<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/saisies/oui_non.html
 * Date :      Mon, 16 Jul 2012 19:00:16 GMT
 * Compile :   Wed, 01 May 2013 13:02:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/saisies/oui_non.html
// Temps de compilation total: 6.410 ms
//

function html_ece04f76ef74daffc45045cbe43d0f0f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][(string)'valeur'] = interdire_scripts((is_null(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true))),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true)):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true))),true))))) .
'<div class="choix">
	<input type="radio" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="radio" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_oui"' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_oui', null), 'on'),true))))  ?
		(' ' . ' ' . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_oui', null), 'on'),true)) .
'" ' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_oui">' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_oui', null), 'on'),true))))  ?
		(' ' . '<strong>') :
		'') .
_T('public|spip|ecrire:item_oui') .
(((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_oui', null), 'on'),true))))  ?
		(' ' . '</strong>') :
		'') .
'</label>
</div>
<div class="choix">
	<input type="radio" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="radio" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_non"' .
((((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_non', null), ''),true)))) OR (((table_valeur($Pile["vars"], (string)'valeur', null)) ?'' :' ')))  ?
		(' ' . ' ' . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_non', null), ''),true)) .
'" ' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_non">' .
((((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_non', null), ''),true)))) OR (((table_valeur($Pile["vars"], (string)'valeur', null)) ?'' :' ')))  ?
		(' ' . '<strong>') :
		'') .
_T('public|spip|ecrire:item_non') .
((((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_non', null), ''),true)))) OR (((table_valeur($Pile["vars"], (string)'valeur', null)) ?'' :' ')))  ?
		(' ' . '</strong>') :
		'') .
'</label>
</div>
');

	return analyse_resultat_skel('html_ece04f76ef74daffc45045cbe43d0f0f', $Cache, $page, '../plugins/auto/saisies/v1.27.0/saisies/oui_non.html');
}
?>