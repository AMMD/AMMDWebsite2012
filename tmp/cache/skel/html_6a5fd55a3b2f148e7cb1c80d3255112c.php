<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/modeles/formulaire_aide_memoire.html
 * Date :      Sun, 22 Jan 2012 10:00:14 GMT
 * Compile :   Wed, 01 May 2013 13:03:40 GMT
 * Boucles :   _champs, _formulaire
 */ 

function BOUCLE_champshtml_6a5fd55a3b2f148e7cb1c80d3255112c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(saisies_lister_par_nom(unserialize($Pile[$SP]['saisies']),'0')));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_champs';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../plugins/auto/formidable/v1.3.5/modeles/formulaire_aide_memoire.html','html_6a5fd55a3b2f148e7cb1c80d3255112c','_champs',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][(string)'label'] = interdire_scripts(table_valeur(table_valeur($Pile[$SP]['valeur'],'options'),'label'))) .
'
	' .
vide($Pile['vars'][(string)'label_case'] = interdire_scripts(table_valeur(table_valeur($Pile[$SP]['valeur'],'options'),'label_case'))) .
'
	
	<dl>
		<dt>@' .
interdire_scripts($Pile[$SP]['cle']) .
'@</dt>
		' .
(($t1 = strval(((($a = table_valeur($Pile["vars"], (string)'label', null)) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'label_case', null))))!=='' ?
		('<dd>' . $t1 . '</dd>') :
		'') .
'
	</dl>
	');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_formulairehtml_6a5fd55a3b2f148e7cb1c80d3255112c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires.saisies");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'formulaires.id_formulaire', sql_quote(@$Pile[0]['id_formulaire'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/formidable/v1.3.5/modeles/formulaire_aide_memoire.html','html_6a5fd55a3b2f148e7cb1c80d3255112c','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('formidable:traitements_aide_memoire');
	$l2 = _T('public|spip|ecrire:info_nom_site');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<strong>' .
$l1 .
'</strong>
	<dl>
		<dt>@nom_site_spip@</dt>
		<dd>' .
$l2 .
'</dd>
	</dl>
	
	' .
BOUCLE_champshtml_6a5fd55a3b2f148e7cb1c80d3255112c($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/modeles/formulaire_aide_memoire.html
// Temps de compilation total: 5.528 ms
//

function html_6a5fd55a3b2f148e7cb1c80d3255112c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_formulairehtml_6a5fd55a3b2f148e7cb1c80d3255112c($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_6a5fd55a3b2f148e7cb1c80d3255112c', $Cache, $page, '../plugins/auto/formidable/v1.3.5/modeles/formulaire_aide_memoire.html');
}
?>