<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire_edit.html
 * Date :      Thu, 06 Sep 2012 16:01:02 GMT
 * Compile :   Wed, 01 May 2013 13:02:03 GMT
 * Boucles :   _formulaire
 */ 

function BOUCLE_formulairehtml_8d7b464c3084f06b3773f743e2882626(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires.id_formulaire");
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
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire_edit.html','html_8d7b464c3084f06b3773f743e2882626','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<!--#extra-->
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'configurer', null),true) == 'traitements')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	boite_ouvrir('', 'info') .
	'
	' .
	recuperer_fond( 'modeles/formulaire_aide_memoire' , array('id_formulaire' => $Pile[$SP]['id_formulaire'] ), array('compil'=>array('../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire_edit.html','html_8d7b464c3084f06b3773f743e2882626','_formulaire',5,$GLOBALS['spip_lang'])), '') .
	boite_fermer() .
	'
')) :
		'') .
'
<!--/#extra-->
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire_edit.html
// Temps de compilation total: 1.898 ms
//

function html_8d7b464c3084f06b3773f743e2882626($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_formulairehtml_8d7b464c3084f06b3773f743e2882626($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_8d7b464c3084f06b3773f743e2882626', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire_edit.html');
}
?>