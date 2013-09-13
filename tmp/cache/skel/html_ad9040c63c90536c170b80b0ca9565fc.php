<?php

/*
 * Squelette : squelettes/inclure/article-resume.html
 * Date :      Wed, 11 Sep 2013 20:58:25 GMT
 * Compile :   Wed, 11 Sep 2013 21:00:53 GMT
 * Boucles :   _parent, _articles
 */ 

function BOUCLE_parenthtml_ad9040c63c90536c170b80b0ca9565fc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_parent';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('=', 'rubriques.titre', "'Media'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/article-resume.html','html_ad9040c63c90536c170b80b0ca9565fc','_parent',9,$GLOBALS['spip_lang'])
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
vide($Pile['vars'][(string)'media'] = '1') .
'
  ');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articleshtml_ad9040c63c90536c170b80b0ca9565fc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_rubrique",
		"articles.id_article",
		"articles.date",
		"articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('articles.statut',sql_quote($in)) : 
			array('=', 'articles.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/article-resume.html','html_ad9040c63c90536c170b80b0ca9565fc','_articles',8,$GLOBALS['spip_lang'])
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
BOUCLE_parenthtml_ad9040c63c90536c170b80b0ca9565fc($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	<div class="padd-post-item padd-post-item-result">
		' .
vide($Pile['vars'][(string)'largeur'] = largeur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'hauteur'] = hauteur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'taille'] = '115') .
vide($Pile['vars'][(string)'ratio_x'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'taille', null))) .
vide($Pile['vars'][(string)'ratio_y'] = div(table_valeur($Pile["vars"], (string)'hauteur', null),table_valeur($Pile["vars"], (string)'taille', null))) .
vide($Pile['vars'][(string)'ratio'] = ((table_valeur($Pile["vars"], (string)'ratio_x', null) <= table_valeur($Pile["vars"], (string)'ratio_y', null)) ? table_valeur($Pile["vars"], (string)'ratio_x', null):table_valeur($Pile["vars"], (string)'ratio_y', null))) .
(($t1 = strval(((($a = filtrer('image_graver', filtrer('image_recadre',filtrer('image_reduire_par',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),table_valeur($Pile["vars"], (string)'ratio', null)),'115','115','center'))) OR (is_string($a) AND strlen($a))) ? $a : '<div class="pas-de-logo-article-resume"></div>')))!=='' ?
		((	'<a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">') . $t1 . '</a>') :
		'') .
'
		
		<div class="padd-post-item-title">
			' .
(($t1 = strval(interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		((	'<div class="info-publi" title="' .
	interdire_scripts(affdate_heure(normaliser_date($Pile[$SP]['date']))) .
	'">') . $t1 . '</div>') :
		'') .
'
			<h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'" rel="bookmark">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
		</div>
		<div class="padd-post-item-entry">


			' .
(($t1 = strval(((table_valeur($Pile["vars"], (string)'media', null) == '1') ? interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])):interdire_scripts(couper(propre($Pile[$SP]['texte'], $connect, $Pile[0]),'320','...')))))!=='' ?
		((	'<div class="introduction
			entry-content">
		    ') . $t1 . (	'
				' .
	(($t2 = strval(parametre_url(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))),'lang',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang', null),true)))))!=='' ?
			('<p class="lirelasuite"><a href="' . $t2 . (	'">' .
		_T('zpip:lire_la_suite') .
		'</a></p>')) :
			'') .
	'
				<div class="nettoyeur"></div>
			</div>')) :
		'') .
'
		</div>
	</div>
	
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/article-resume.html
// Temps de compilation total: 10.974 ms
//

function html_ad9040c63c90536c170b80b0ca9565fc($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_articleshtml_ad9040c63c90536c170b80b0ca9565fc($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_ad9040c63c90536c170b80b0ca9565fc', $Cache, $page, 'squelettes/inclure/article-resume.html');
}
?>