<?php

/*
 * Squelette : ../prive/objets/infos/article.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:48:38 GMT
 * Boucles :   _publie, _art
 */ 

function BOUCLE_publiehtml_5ca33f8fc833a169a970ee8ad9e83516(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_publie';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/article.html','html_5ca33f8fc833a169a970ee8ad9e83516','_publie',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=article&id=' .
	$Pile[$SP]['id_article'])),'var_mode','calcul'),_T('public|spip|ecrire:icone_voir_en_ligne'),'racine') .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_arthtml_5ca33f8fc833a169a970ee8ad9e83516(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.statut");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)),'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('articles.statut',sql_quote($in)) : 
			array('=', 'articles.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/article.html','html_5ca33f8fc833a169a970ee8ad9e83516','_art',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_numero_article');
	$l2 = _T('public|spip|ecrire:previsualiser');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class=\'infos\'>
<div class=\'numero\'>' .
$l1 .
'<p>' .
$Pile[$SP]['id_article'] .
'</p></div>

' .
executer_balise_dynamique('FORMULAIRE_INSTITUER_OBJET',
	array('article',$Pile[$SP]['id_article']),
	array('../prive/objets/infos/article.html','html_5ca33f8fc833a169a970ee8ad9e83516','_art',5,$GLOBALS['spip_lang'])) .
'


' .
(($t1 = BOUCLE_publiehtml_5ca33f8fc833a169a970ee8ad9e83516($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('previsualiser', 'article', invalideur_session($Cache, $Pile[$SP]['id_article']), '', invalideur_session($Cache, array('statut' => interdire_scripts(invalideur_session($Cache, $Pile[$SP]['statut'])))))?" ":""))))!=='' ?
			($t2 . (	'
		' .
		filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=article&id=' .
			$Pile[$SP]['id_article'])),'var_mode','preview'),$l2,'preview') .
		'
	')) :
			'') .
	'
'))) .
'


</div>
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/infos/article.html
// Temps de compilation total: 5.196 ms
//

function html_5ca33f8fc833a169a970ee8ad9e83516($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_arthtml_5ca33f8fc833a169a970ee8ad9e83516($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_5ca33f8fc833a169a970ee8ad9e83516', $Cache, $page, '../prive/objets/infos/article.html');
}
?>