<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/extra/article.html
 * Date :      Wed, 23 Mar 2011 09:00:26 GMT
 * Compile :   Thu, 18 Apr 2013 10:46:01 GMT
 * Boucles :   _articles_rubrique, _mots, _extra_article
 */ 

function BOUCLE_articles_rubriquehtml_69495b572dc8320218224eb1828cc2a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_rubrique';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '0,10';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/article.html','html_69495b572dc8320218224eb1828cc2a6','_articles_rubrique',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li><span class="padd-wrap"><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'"' .
(calcul_exposer($Pile[$SP]['id_article'], 'id_article', $Pile[0], $Pile[$SP]['id_rubrique'], 'id_article', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></span></li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_motshtml_69495b572dc8320218224eb1828cc2a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"mots.id_mot");
		$command['orderby'] = array('mots.titre');
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/article.html','html_69495b572dc8320218224eb1828cc2a6','_mots',19,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li><span class="padd-wrap"><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_mot'], 'mot', '', '', true))) .
'" rel="tag">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></span></li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_extra_articlehtml_69495b572dc8320218224eb1828cc2a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_extra_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_rubrique",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/article.html','html_69495b572dc8320218224eb1828cc2a6','_extra_article',1,$GLOBALS['spip_lang'])
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
(($t1 = BOUCLE_articles_rubriquehtml_69495b572dc8320218224eb1828cc2a6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="padd-box padd-box-popular-posts">
		<h2><a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
		'" title="' .
		interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
		'">' .
		_T('maparaan:meme_rubrique') .
		'</a></h2>
		<div class="padd-interior">
			<div class="padd-interior-wrapper">	
				<ul>
					') . $t1 . '
				</ul>
			</div>
		</div>
	</div>
	') :
		'') .
'

	
	' .
(($t1 = BOUCLE_motshtml_69495b572dc8320218224eb1828cc2a6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="padd-box padd-box-popular-posts">
		<h2>' .
		_T('public|spip|ecrire:mots_clefs') .
		'</h2>
		<div class="padd-interior">
			<div class="padd-interior-wrapper">	
				<ul>
					') . $t1 . '
				</ul>
			</div>
		</div>
	</div>
	') :
		'') .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/extra/article.html
// Temps de compilation total: 7.686 ms
//

function html_69495b572dc8320218224eb1828cc2a6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_extra_articlehtml_69495b572dc8320218224eb1828cc2a6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_69495b572dc8320218224eb1828cc2a6', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/extra/article.html');
}
?>