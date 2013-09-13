<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/saisies/radio.html
 * Date :      Tue, 09 Oct 2012 15:00:28 GMT
 * Compile :   Wed, 01 May 2013 13:02:53 GMT
 * Boucles :   _radio
 */ 

function BOUCLE_radiohtml_f28f0c5ae2416386f8cf9fcf851aa26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'datas', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_radio';
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
		array('../plugins/auto/saisies/v1.27.0/saisies/radio.html','html_f28f0c5ae2416386f8cf9fcf851aa26f','_radio',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_radio']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_radio']['compteur_boucle']++;
		$t0 .= (
'
<div class="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
		(' ' . $t1 . (	'_' .
	interdire_scripts($Pile[$SP]['cle']))) :
		'') .
'">
	<input type="radio" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="radio" id=\'champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_' .
$Numrows['_radio']['compteur_boucle'] .
'\'' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked=\'checked\'') :
		'') .
' value=\'' .
interdire_scripts($Pile[$SP]['cle']) .
'\' ' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
'_' .
$Numrows['_radio']['compteur_boucle'] .
'">' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		($t1 . '<strong>') :
		'') .
interdire_scripts($Pile[$SP]['valeur']) .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
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
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/saisies/radio.html
// Temps de compilation total: 6.596 ms
//

function html_f28f0c5ae2416386f8cf9fcf851aa26f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][(string)'datas'] = interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null))) .
vide($Pile['vars'][(string)'datas'] = (is_string(table_valeur($Pile["vars"], (string)'datas', null)) ? saisies_chaine2tableau(table_valeur($Pile["vars"], (string)'datas', null)):table_valeur($Pile["vars"], (string)'datas', null))) .
BOUCLE_radiohtml_f28f0c5ae2416386f8cf9fcf851aa26f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_f28f0c5ae2416386f8cf9fcf851aa26f', $Cache, $page, '../plugins/auto/saisies/v1.27.0/saisies/radio.html');
}
?>