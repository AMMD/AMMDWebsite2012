<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/hierarchie/formulaire_edit.html
 * Date :      Thu, 06 Sep 2012 16:01:06 GMT
 * Compile :   Wed, 01 May 2013 13:02:03 GMT
 * Boucles :   _formulaire
 */ 

function BOUCLE_formulairehtml_8e7bd2aa27bd9a6197dd4bed4885cd1b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires.id_formulaire",
		"formulaires.titre");
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
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/hierarchie/formulaire_edit.html','html_8e7bd2aa27bd9a6197dd4bed4885cd1b','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('formulaire:titre_formulaires');
	$l2 = _T('formulaire:modifier_formulaire');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<a href="' .
generer_url_ecrire('formulaires') .
'">' .
$l1 .
'</a> &gt;
<a href="' .
parametre_url(generer_url_ecrire('formulaire'),'id_formulaire',$Pile[$SP]['id_formulaire']) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a> &gt;
<strong class="on">' .
$l2 .
'</strong>
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/hierarchie/formulaire_edit.html
// Temps de compilation total: 3.765 ms
//

function html_8e7bd2aa27bd9a6197dd4bed4885cd1b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_formulairehtml_8e7bd2aa27bd9a6197dd4bed4885cd1b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_8e7bd2aa27bd9a6197dd4bed4885cd1b', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/hierarchie/formulaire_edit.html');
}
?>