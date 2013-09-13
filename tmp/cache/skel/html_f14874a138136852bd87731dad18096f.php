<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/objets/infos/formulaire.html
 * Date :      Sun, 05 Feb 2012 00:45:08 GMT
 * Compile :   Wed, 01 May 2013 13:01:52 GMT
 * Boucles :   _formulaire
 */ 

function BOUCLE_formulairehtml_f14874a138136852bd87731dad18096f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
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
			array('=', 'formulaires.id_formulaire', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)),'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('formulaires.statut',sql_quote($in)) : 
			array('=', 'formulaires.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/formidable/v1.3.5/prive/objets/infos/formulaire.html','html_f14874a138136852bd87731dad18096f','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('formidable:voir_numero');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class=\'infos\'>
<div class=\'numero\'>' .
$l1 .
'<p>' .
$Pile[$SP]['id_formulaire'] .
'</p></div>

</div>
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/objets/infos/formulaire.html
// Temps de compilation total: 1.667 ms
//

function html_f14874a138136852bd87731dad18096f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_formulairehtml_f14874a138136852bd87731dad18096f($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_f14874a138136852bd87731dad18096f', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/objets/infos/formulaire.html');
}
?>