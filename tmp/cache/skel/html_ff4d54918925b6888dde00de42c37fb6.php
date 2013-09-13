<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/head/article.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Thu, 18 Apr 2013 10:45:59 GMT
 * Boucles :   _article_head
 */ 

function BOUCLE_article_headhtml_ff4d54918925b6888dde00de42c37fb6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article_head';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.descriptif",
		"articles.chapo",
		"articles.id_article",
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
		array('plugins/auto/z/v1.7.21/head/article.html','html_ff4d54918925b6888dde00de42c37fb6','_article_head',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<title>' .
(($t1 = strval(interdire_scripts(textebrut(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))))!=='' ?
		($t1 . ' - ') :
		'') .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
' .
(($t1 = strval(interdire_scripts(attribut_html(filtre_introduction($Pile[$SP]['descriptif'], (strlen($Pile[$SP]['descriptif']))
		? ''
		: $Pile[$SP]['chapo'] . "\n\n" . $Pile[$SP]['texte'], intval('150'), $connect)))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))))))!=='' ?
		('<link rel="canonical" href="' . $t1 . '" />') :
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
// Fonction principale du squelette plugins/auto/z/v1.7.21/head/article.html
// Temps de compilation total: 4.100 ms
//

function html_ff4d54918925b6888dde00de42c37fb6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_article_headhtml_ff4d54918925b6888dde00de42c37fb6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_ff4d54918925b6888dde00de42c37fb6', $Cache, $page, 'plugins/auto/z/v1.7.21/head/article.html');
}
?>