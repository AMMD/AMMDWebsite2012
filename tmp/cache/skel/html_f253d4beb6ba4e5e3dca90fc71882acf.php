<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/modeles/article_traductions.html
 * Date :      Wed, 23 Mar 2011 09:00:30 GMT
 * Compile :   Thu, 18 Apr 2013 10:46:00 GMT
 * Boucles :   _traductions, _article
 */ 

function BOUCLE_traductionshtml_f253d4beb6ba4e5e3dca90fc71882acf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_traductions';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.lang",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.titre");
		$command['orderby'] = array('articles.lang');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('OR', 
			array('AND', 
			array('=', 'articles.id_trad', 0), 
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article']))), 
			array('AND', 
			array('>', 'articles.id_trad', 0), 
			array('=', 'articles.id_trad', sql_quote($Pile[$SP]['id_trad'])))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/modeles/article_traductions.html','html_f253d4beb6ba4e5e3dca90fc71882acf','_traductions',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_traductions']['total'] = @intval($iter->count());
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($Numrows['_traductions']['total'] > '1')  ?
		(' ' . (	'
	<span lang="' .
	htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
	'" xml:lang="' .
	htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
	'" dir="' .
	lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
	'"' .
	(calcul_exposer($Pile[$SP]['id_article'], 'id_article', $Pile[0], $Pile[$SP]['id_rubrique'], 'id_article', '')  ?
			(' class="' . 'on' . '"') :
			'') .
	'>
		' .
	(calcul_exposer($Pile[$SP]['id_article'], 'id_article', $Pile[0], $Pile[$SP]['id_rubrique'], 'id_article', '') ? '' : (	'<a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
		'" rel="alternate" lang="' .
		htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
		'"' .
		(($t3 = strval(interdire_scripts(couper(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),'80'))))!=='' ?
				(' title="' . $t3 . '"') :
				'') .
		'>')) .
	traduire_nom_langue(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) .
	(calcul_exposer($Pile[$SP]['id_article'], 'id_article', $Pile[0], $Pile[$SP]['id_rubrique'], 'id_article', '') ? '' : '</a>') .
	'</span>
	')) :
		'');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articlehtml_f253d4beb6ba4e5e3dca90fc71882acf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_trad",
		"articles.id_article",
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
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/modeles/article_traductions.html','html_f253d4beb6ba4e5e3dca90fc71882acf','_article',9,$GLOBALS['spip_lang'])
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
(($t1 = BOUCLE_traductionshtml_f253d4beb6ba4e5e3dca90fc71882acf($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<p class="traductions">
	' . $t1 . '
</p>
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
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/modeles/article_traductions.html
// Temps de compilation total: 4.930 ms
//

function html_f253d4beb6ba4e5e3dca90fc71882acf($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_articlehtml_f253d4beb6ba4e5e3dca90fc71882acf($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_f253d4beb6ba4e5e3dca90fc71882acf', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/modeles/article_traductions.html');
}
?>