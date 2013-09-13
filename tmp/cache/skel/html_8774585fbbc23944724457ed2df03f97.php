<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/saisies/input.html
 * Date :      Sat, 06 Oct 2012 17:00:08 GMT
 * Compile :   Wed, 01 May 2013 21:35:30 GMT
 * Boucles :   _selection
 */ 

function BOUCLE_selectionhtml_8774585fbbc23944724457ed2df03f97(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'datas', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_selection';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
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
		array('plugins/auto/saisies/v1.27.0/saisies/input.html','html_8774585fbbc23944724457ed2df03f97','_selection',39,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(attribut_html($Pile[$SP]['valeur']))))!=='' ?
		('	<option value="' . $t1 . '"></option>
') :
		'');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/saisies/input.html
// Temps de compilation total: 10.973 ms
//

function html_8774585fbbc23944724457ed2df03f97($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars'][(string)'type'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'type', null), 'text'),true))) .
'
' .
vide($Pile['vars'][(string)'datas'] = interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null))) .
vide($Pile['vars'][(string)'datas'] = (is_string(table_valeur($Pile["vars"], (string)'datas', null)) ? saisies_chaine2tableau(table_valeur($Pile["vars"], (string)'datas', null)):table_valeur($Pile["vars"], (string)'datas', null))) .
'
' .
vide($Pile['vars'][(string)'datas'] = ('' ? table_valeur($Pile["vars"], (string)'datas', null):'')) .
'
' .
vide($Pile['vars'][(string)'val_autocomplete'] = array()) .
vide($Pile['vars'][(string)'val_autocomplete'] = filtre_push(table_valeur($Pile["vars"], (string)'val_autocomplete', null),'on')) .
vide($Pile['vars'][(string)'val_autocomplete'] = filtre_push(table_valeur($Pile["vars"], (string)'val_autocomplete', null),'off')) .
vide($Pile['vars'][(string)'list_id'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'list', null),true))) .
(($t1 = BOUCLE_selectionhtml_8774585fbbc23944724457ed2df03f97($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		vide($Pile['vars'][(string)'list_id'] = sinon(table_valeur($Pile["vars"], (string)'list_id', null), (($t5 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))))!=='' ?
						('champ_' . $t5 . '_datas') :
						''))) .
		'
<datalist id="' .
		table_valeur($Pile["vars"], (string)'list_id', null) .
		'">
') . $t1 . '
</datalist>
') :
		'') .
'
<input type="' .
table_valeur($Pile["vars"], (string)'type', null) .
'" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="' .
table_valeur($Pile["vars"], (string)'type', null) .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'" id="champ_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'"' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'list_id', null)))!=='' ?
		(' list="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true))))!=='' ?
		(' value="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'size', null),true))))!=='' ?
		(' size="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'maxlength', null),true))))!=='' ?
		(' maxlength="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'placeholder', null),true))))!=='' ?
		(' placeholder="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(((((((((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) AND ((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) .
	'!={non}'))) ?' ' :'')) AND ('')) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . ' required="required"') :
		'') .
((filtre_find(table_valeur($Pile["vars"], (string)'val_autocomplete', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'autocomplete', null),true))))  ?
		(' ' . (	' autocomplete="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'autocomplete', null),true)) .
	'"')) :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
' />
');

	return analyse_resultat_skel('html_8774585fbbc23944724457ed2df03f97', $Cache, $page, 'plugins/auto/saisies/v1.27.0/saisies/input.html');
}
?>