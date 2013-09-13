<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire_edit.html
 * Date :      Thu, 06 Sep 2012 16:01:10 GMT
 * Compile :   Wed, 01 May 2013 13:02:03 GMT
 * Boucles :   _formulaire
 */ 

function BOUCLE_formulairehtml_774231badedcc35df5ec57ab5ba01903(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire_edit.html','html_774231badedcc35df5ec57ab5ba01903','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('formidable:editer_menu_formulaire');
	$l2 = _T('formidable:editer_menu_champs');
	$l3 = _T('formidable:editer_menu_traitements');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
boite_ouvrir('', 'info') .
pipeline( 'boite_infos' , array('data' => '', 'args' => array('type' => 'formulaire', 'id' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_formulaire', null),true)))) ) .
filtre_icone_horizontale_dist(parametre_url(parametre_url(self(),'configurer','formulaire'),'avertissement',''),$l1,'formulaire','formulaire-editer-24','center') .
'

' .
filtre_icone_horizontale_dist(parametre_url(parametre_url(self(),'configurer','champs'),'avertissement',''),$l2,'formulaire','formulaire-config-champs-24','center') .
'

' .
filtre_icone_horizontale_dist(parametre_url(parametre_url(self(),'configurer','traitements'),'avertissement',''),$l3,'formulaire','formulaire-config-traitements-24','center') .
'

' .
boite_fermer() .
'

');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire_edit.html
// Temps de compilation total: 3.139 ms
//

function html_774231badedcc35df5ec57ab5ba01903($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_formulairehtml_774231badedcc35df5ec57ab5ba01903($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_774231badedcc35df5ec57ab5ba01903', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire_edit.html');
}
?>