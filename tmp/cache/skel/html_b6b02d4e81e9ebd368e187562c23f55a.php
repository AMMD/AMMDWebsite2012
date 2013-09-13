<?php

/*
 * Squelette : plugins/auto/menus/inclure/menu.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   _sous_menu, _entrees, _menu
 */ 

function BOUCLE_sous_menuhtml_b6b02d4e81e9ebd368e187562c23f55a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_sous_menu';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus.id_menu",
		"menus.identifiant");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'menus.id_menus_entree', sql_quote($Pile[$SP]['id_menus_entree'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/inclure/menu.html','html_b6b02d4e81e9ebd368e187562c23f55a','_sous_menu',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
recuperer_fond( 'inclure/menu' , array_merge($Pile[0],array('id_menu' => $Pile[$SP]['id_menu'] ,
	'identifiant' => $Pile[$SP]['identifiant'] )), array('compil'=>array('plugins/auto/menus/inclure/menu.html','html_b6b02d4e81e9ebd368e187562c23f55a','_sous_menu',9,$GLOBALS['spip_lang'])), ''));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_entreeshtml_b6b02d4e81e9ebd368e187562c23f55a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus_entrees';
		$command['id'] = '_entrees';
		$command['from'] = array('menus_entrees' => 'spip_menus_entrees');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus_entrees.id_menus_entree",
		"menus_entrees.rang",
		"menus_entrees.type_entree",
		"menus_entrees.parametres");
		$command['orderby'] = array('menus_entrees.rang');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'menus_entrees.id_menu', sql_quote($Pile[$SP]['id_menu'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/inclure/menu.html','html_b6b02d4e81e9ebd368e187562c23f55a','_entrees',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
interdire_scripts((!$Pile[$SP]['id_menus_entree']) ? _T('zbug_champ_hors_motif', array('champ'=>'AFFICHER_ENTREE', 'motif'=>'MENUS_ENTREES')) : recuperer_fond(
		'menus/'.$Pile[$SP]['type_entree'],
		array_merge(unserialize($Pile[$SP]['parametres']), array('appel_menu'=>true, env=>$Pile[0]))
	)) .
'
			' .
BOUCLE_sous_menuhtml_b6b02d4e81e9ebd368e187562c23f55a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		' .
(($t1 = strval(interdire_scripts(((menus_type_refuser_sous_menu($Pile[$SP]['type_entree'])) ?'' :' '))))!=='' ?
		($t1 . (	'
			' .
	(($t2 = strval(interdire_scripts(((trim((!$Pile[$SP]['id_menus_entree']) ? _T('zbug_champ_hors_motif', array('champ'=>'AFFICHER_ENTREE', 'motif'=>'MENUS_ENTREES')) : recuperer_fond(
		'menus/'.$Pile[$SP]['type_entree'],
		array_merge(unserialize($Pile[$SP]['parametres']), array('appel_menu'=>true, env=>$Pile[0]))
	))) ?' ' :''))))!=='' ?
			($t2 . '</li>') :
			'') .
	'
		')) :
		'') .
'
		');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_menuhtml_b6b02d4e81e9ebd368e187562c23f55a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_menu']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['identifiant']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_menu';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus.id_menu",
		"menus.css");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array((!(is_array(@$Pile[0]['id_menu'])?count(@$Pile[0]['id_menu']):strlen(@$Pile[0]['id_menu'])) ? '' : ((is_array(@$Pile[0]['id_menu'])) ? sql_in('menus.id_menu',sql_quote($in)) : 
			array('=', 'menus.id_menu', sql_quote(@$Pile[0]['id_menu'],'','bigint(21) NOT NULL AUTO_INCREMENT')))), (!(is_array(@$Pile[0]['identifiant'])?count(@$Pile[0]['identifiant']):strlen(@$Pile[0]['identifiant'])) ? '' : ((is_array(@$Pile[0]['identifiant'])) ? sql_in('menus.identifiant',sql_quote($in1)) : 
			array('=', 'menus.identifiant', sql_quote(@$Pile[0]['identifiant'],'','varchar(255) NOT NULL DEFAULT \'\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/inclure/menu.html','html_b6b02d4e81e9ebd368e187562c23f55a','_menu',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	
	' .
(($t1 = BOUCLE_entreeshtml_b6b02d4e81e9ebd368e187562c23f55a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<ul class="menu-liste menu-items' .
		(($t3 = strval(interdire_scripts($Pile[$SP]['css'])))!=='' ?
				(' ' . $t3) :
				'') .
		'">
		') . $t1 . '
	</ul>
	') :
		'') .
'
	
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/menus/inclure/menu.html
// Temps de compilation total: 7.700 ms
//

function html_b6b02d4e81e9ebd368e187562c23f55a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_menuhtml_b6b02d4e81e9ebd368e187562c23f55a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_b6b02d4e81e9ebd368e187562c23f55a', $Cache, $page, 'plugins/auto/menus/inclure/menu.html');
}
?>