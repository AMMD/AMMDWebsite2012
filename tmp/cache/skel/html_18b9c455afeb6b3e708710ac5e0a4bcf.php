<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/saisies/checkbox.html
 * Date :      Thu, 25 Oct 2012 16:00:28 GMT
 * Compile :   Wed, 01 May 2013 13:03:40 GMT
 * Boucles :   _checkbox
 */ 

function BOUCLE_checkboxhtml_18b9c455afeb6b3e708710ac5e0a4bcf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'datas', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_checkbox';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/saisies/v1.27.0/saisies/checkbox.html','html_18b9c455afeb6b3e708710ac5e0a4bcf','_checkbox',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_checkbox']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_checkbox']['compteur_boucle']++;
		$t0 .= (
'
<div class="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
		(' ' . $t1 . (	'_' .
	interdire_scripts($Pile[$SP]['cle']))) :
		'') .
'">
	<input type="checkbox" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'[]" class="checkbox" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_' .
$Numrows['_checkbox']['compteur_boucle'] .
'"' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'disabled', null))) ?' ' :''))))!=='' ?
		($t1 . ' disabled="disabled"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_' .
$Numrows['_checkbox']['compteur_boucle'] .
'">' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
		($t1 . '<strong>') :
		'') .
interdire_scripts($Pile[$SP]['valeur']) .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
		($t1 . '</strong>') :
		'') .
'</label>
</div>
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/saisies/checkbox.html
// Temps de compilation total: 9.184 ms
//

function html_18b9c455afeb6b3e708710ac5e0a4bcf($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][(string)'datas'] = interdire_scripts(saisies_chaine2tableau(table_valeur(@$Pile[0], (string)'datas', null)))) .
'
' .
vide($Pile['vars'][(string)'defaut'] = interdire_scripts(saisies_chaine2tableau(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true)))) .
'
' .
vide($Pile['vars'][(string)'valeur'] = interdire_scripts(saisies_valeur2tableau(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true)))) .
'
' .
vide($Pile['vars'][(string)'disabled'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))) .
((is_string(table_valeur($Pile["vars"], (string)'disabled', null)))  ?
		(' ' . (	'
	' .
	(!(strlen(table_valeur($Pile["vars"], (string)'disabled', null)))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][(string)'disabled'] = array()))) :
			'') .
	'
	' .
	((table_valeur($Pile["vars"], (string)'disabled', null))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][(string)'disabled'] = filtre_push(array(),table_valeur($Pile["vars"], (string)'disabled', null))))) :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_selectionner', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
	' none-nojs">
		<input type="checkbox" name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'_tout" class="checkbox" id="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
	'_tout" value="on" onChange="if (jQuery(this).attr(\'checked\')==\'checked\') jQuery(this).parent(\'div\').parent().find(\'input\').attr(\'checked\',\'checked\'); else jQuery(this).parent(\'div\').parent().find(\'input\').removeAttr(\'checked\');"/>
		<label for="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
	'_tout">' .
	_T('saisies:tout_selectionner') .
	'</label>
	</div>
')) :
		'') .
'

' .
BOUCLE_checkboxhtml_18b9c455afeb6b3e708710ac5e0a4bcf($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_18b9c455afeb6b3e708710ac5e0a4bcf', $Cache, $page, '../plugins/auto/saisies/v1.27.0/saisies/checkbox.html');
}
?>