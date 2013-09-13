<?php

/*
 * Squelette : squelettes/contenu/page-sommaire.html
 * Date :      Wed, 11 Sep 2013 21:01:53 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   _articles_sec, _articles_sec2, _artistes, _articles, _events, _detail, _apropos, _articles3, _breves_rub, _breves
 */ 

function BOUCLE_articles_sechtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_sec';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.texte",
		"articles.descriptif",
		"articles.chapo",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '0,4';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', "1"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_articles_sec',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<li class="s3sliderImage" id="featured-' .
$Pile[$SP]['id_article'] .
'">
								<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">															
									' .
vide($Pile['vars'][(string)'largeur'] = largeur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'hauteur'] = hauteur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'l_slider'] = '650') .
vide($Pile['vars'][(string)'h_slider'] = '280') .
vide($Pile['vars'][(string)'ratio_slider'] = div(table_valeur($Pile["vars"], (string)'l_slider', null),table_valeur($Pile["vars"], (string)'h_slider', null))) .
vide($Pile['vars'][(string)'ratio_logo'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'hauteur', null))) .
vide($Pile['vars'][(string)'ratio_logo_inv'] = div(table_valeur($Pile["vars"], (string)'hauteur', null),table_valeur($Pile["vars"], (string)'largeur', null))) .
vide($Pile['vars'][(string)'new_h_logo'] = mult(table_valeur($Pile["vars"], (string)'ratio_logo_inv', null),table_valeur($Pile["vars"], (string)'l_slider', null))) .
vide($Pile['vars'][(string)'new_l_logo'] = mult(table_valeur($Pile["vars"], (string)'ratio_logo', null),table_valeur($Pile["vars"], (string)'h_slider', null))) .
(((((table_valeur($Pile["vars"], (string)'largeur', null) < table_valeur($Pile["vars"], (string)'l_slider', null))) OR ((table_valeur($Pile["vars"], (string)'hauteur', null) < table_valeur($Pile["vars"], (string)'h_slider', null)))) ?' ' :'') ? (	(((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		inserer_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'style',(	'width:650px; height:' .
			table_valeur($Pile["vars"], (string)'new_h_logo', null) .
			'px')))) :
			'') .
	'
										' .
	(!((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		inserer_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'style',(	'height:280px; width:' .
			table_valeur($Pile["vars"], (string)'new_l_logo', null) .
			'px')))) :
			'') .
	'
										'):(	(((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'650','0'),'650','280','center')))) :
			'') .
	'
										' .
	(!((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'0','280'),'650','280','center')))) :
			'') .
	'
									')) .
'
								</a>
								' .
(($t1 = strval(interdire_scripts(couper(filtre_introduction($Pile[$SP]['descriptif'], (strlen($Pile[$SP]['descriptif']))
		? ''
		: $Pile[$SP]['chapo'] . "\n\n" . $Pile[$SP]['texte'], 500, $connect),'370','...'))))!=='' ?
		((	'<span class="right"><strong><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">' .
	interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
	'</a></strong>
								') . $t1 . '</span>') :
		'') .
'
							</li>
						');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articles_sec2html_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_sec2';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.texte",
		"articles.descriptif",
		"articles.chapo",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '0,4';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_articles_sec2',77,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<li class="s3sliderImage" id="featured-' .
$Pile[$SP]['id_article'] .
'">
								<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">															
									' .
vide($Pile['vars'][(string)'largeur'] = largeur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'hauteur'] = hauteur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'l_slider'] = '650') .
vide($Pile['vars'][(string)'h_slider'] = '280') .
vide($Pile['vars'][(string)'ratio_slider'] = div(table_valeur($Pile["vars"], (string)'l_slider', null),table_valeur($Pile["vars"], (string)'h_slider', null))) .
vide($Pile['vars'][(string)'ratio_logo'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'hauteur', null))) .
vide($Pile['vars'][(string)'ratio_logo_inv'] = div(table_valeur($Pile["vars"], (string)'hauteur', null),table_valeur($Pile["vars"], (string)'largeur', null))) .
vide($Pile['vars'][(string)'new_h_logo'] = mult(table_valeur($Pile["vars"], (string)'ratio_logo_inv', null),table_valeur($Pile["vars"], (string)'l_slider', null))) .
vide($Pile['vars'][(string)'new_l_logo'] = mult(table_valeur($Pile["vars"], (string)'ratio_logo', null),table_valeur($Pile["vars"], (string)'h_slider', null))) .
(((((table_valeur($Pile["vars"], (string)'largeur', null) < table_valeur($Pile["vars"], (string)'l_slider', null))) OR ((table_valeur($Pile["vars"], (string)'hauteur', null) < table_valeur($Pile["vars"], (string)'h_slider', null)))) ?' ' :'') ? (	(((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		inserer_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'style',(	'width:650px; height:' .
			table_valeur($Pile["vars"], (string)'new_h_logo', null) .
			'px')))) :
			'') .
	'
										' .
	(!((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		inserer_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'style',(	'height:280px; width:' .
			table_valeur($Pile["vars"], (string)'new_l_logo', null) .
			'px')))) :
			'') .
	'
										'):(	(((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'650','0'),'650','280','center')))) :
			'') .
	'
										' .
	(!((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'0','280'),'650','280','center')))) :
			'') .
	'
									')) .
'
								</a>
								' .
(($t1 = strval(interdire_scripts(couper(filtre_introduction($Pile[$SP]['descriptif'], (strlen($Pile[$SP]['descriptif']))
		? ''
		: $Pile[$SP]['chapo'] . "\n\n" . $Pile[$SP]['texte'], 500, $connect),'370','...'))))!=='' ?
		((	'<span class="right"><strong><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">' .
	interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
	'</a></strong>') . $t1 . '<br /></span>') :
		'') .
'
								' .
(($t1 = strval(interdire_scripts(propre($Pile[$SP-1]['texte'], $connect, $Pile[0]))))!=='' ?
		('<span class="art_style"><em>' . $t1 . '</em></span>') :
		'') .
'
							</li>
						');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_artisteshtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_artistes';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.texte",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "7"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_artistes',76,$GLOBALS['spip_lang'])
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
BOUCLE_articles_sec2html_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP) .
'
						');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articleshtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.texte",
		"articles.descriptif",
		"articles.chapo",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,4';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'L2.titre', "'slider'"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_articles',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<li class="s3sliderImage" id="featured-' .
$Pile[$SP]['id_article'] .
'">
								<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">							
									' .
vide($Pile['vars'][(string)'largeur'] = largeur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'hauteur'] = hauteur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'l_slider'] = '650') .
vide($Pile['vars'][(string)'h_slider'] = '280') .
vide($Pile['vars'][(string)'ratio_slider'] = div(table_valeur($Pile["vars"], (string)'l_slider', null),table_valeur($Pile["vars"], (string)'h_slider', null))) .
vide($Pile['vars'][(string)'ratio_logo'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'hauteur', null))) .
vide($Pile['vars'][(string)'ratio_logo_inv'] = div(table_valeur($Pile["vars"], (string)'hauteur', null),table_valeur($Pile["vars"], (string)'largeur', null))) .
vide($Pile['vars'][(string)'new_h_logo'] = mult(table_valeur($Pile["vars"], (string)'ratio_logo_inv', null),table_valeur($Pile["vars"], (string)'l_slider', null))) .
vide($Pile['vars'][(string)'new_l_logo'] = mult(table_valeur($Pile["vars"], (string)'ratio_logo', null),table_valeur($Pile["vars"], (string)'h_slider', null))) .
(((((table_valeur($Pile["vars"], (string)'largeur', null) < table_valeur($Pile["vars"], (string)'l_slider', null))) OR ((table_valeur($Pile["vars"], (string)'hauteur', null) < table_valeur($Pile["vars"], (string)'h_slider', null)))) ?' ' :'') ? (	(((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		inserer_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'style',(	'width:650px; height:' .
			table_valeur($Pile["vars"], (string)'new_h_logo', null) .
			'px')))) :
			'') .
	'
										' .
	(!((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		inserer_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'style',(	'height:280px; width:' .
			table_valeur($Pile["vars"], (string)'new_l_logo', null) .
			'px')))) :
			'') .
	'
										'):(	(((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'650','0'),'650','280','center')))) :
			'') .
	'
										' .
	(!((table_valeur($Pile["vars"], (string)'ratio_logo', null) <= table_valeur($Pile["vars"], (string)'ratio_slider', null)))  ?
			(' ' . (	' ' .
		filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'0','280'),'650','280','center')))) :
			'') .
	'
									')) .
'
								</a>
								' .
(($t1 = strval(interdire_scripts(couper(filtre_introduction($Pile[$SP]['descriptif'], (strlen($Pile[$SP]['descriptif']))
		? ''
		: $Pile[$SP]['chapo'] . "\n\n" . $Pile[$SP]['texte'], 500, $connect),'370','...'))))!=='' ?
		((	'<span class="right"><strong><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">' .
	interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
	'</a></strong>') . $t1 . '</span>') :
		'') .
'
							</li>
						');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_eventshtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_events';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', "9"), 
			array('<', 'LEAST((UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(articles.date))/86400,
	TO_DAYS(NOW())-TO_DAYS(articles.date),
	DAYOFMONTH(NOW())-DAYOFMONTH(articles.date)+30.4368*(MONTH(NOW())-MONTH(articles.date))+365.2422*(YEAR(NOW())-YEAR(articles.date)))', "0"));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_events',132,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					    <em class="small">' .
interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
' - ' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</em>
					  ');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_detailhtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_detail';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'rubriques.id_parent', "2"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_detail',169,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				      <li>' .
lien_ou_expose(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))),interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</li>
				    ');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_aproposhtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_apropos';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.texte",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'rubriques.id_rubrique', "2"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_apropos',159,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			    <div class="padd-post-group padd-post-group-result">
				<div class="padd-post-group-title cartouche">
				  <h1>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h1>
				</div>
			    </div>
			    <div class="padd-post-post-list
					padd-post-list-result">
			      <div class="padd-post-post-item padd-post-item-result">
				' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
				' .
(($t1 = BOUCLE_detailhtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				  <ul>
				    ' . $t1 . '
				  </ul>
				') :
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


function BOUCLE_articles3html_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles3';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', "1"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_articles3',197,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t1 = (
'
					  <li>' .
lien_ou_expose(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))),interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'25','(...)')),'','',(	interdire_scripts(normaliser_date($Pile[$SP]['date'])) .
	' - ' .
	interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))) .
'</li>
					');
		$t0 .= ((strlen($t1) && strlen($t0)) ? '<div class=\'marge\'></div>' : '') . $t1;
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_breves_rubhtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_breves_rub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_breves_rub',189,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'<small class="breves-rub-texte">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</small>');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_breveshtml_def17861467cad8093f840d03dafb33c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("breves.id_rubrique",
		"breves.date_heure",
		"breves.id_breve",
		"breves.titre",
		"breves.date_heure AS date",
		"breves.lang");
		$command['orderby'] = array('breves.date_heure DESC');
		$command['where'] = 
			array(
quete_condition_statut('breves.statut','publie,prop','publie',''));
		$command['join'] = array();
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','_breves',180,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
									<li><span class="padd-wrap breves-rub">' .
BOUCLE_breves_rubhtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP) .
'<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_breve'], 'breve', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>' .
(($t1 = strval(interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		('  &ndash;  ' . $t1) :
		'') .
'</span></li>
									');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes/contenu/page-sommaire.html
// Temps de compilation total: 49.402 ms
//

function html_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="padd-search-maparaan">' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','',1,$GLOBALS['spip_lang'])) .
'</div>

<div class="contenu-principal">
	<div class="cartouche invisible">
		<h1 class="h1 invisible">' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</h1>
	</div>
</div>

	
<div id="padd-featsubs">
	<div id="padd-featsubs-wrapper">
		<div id="padd-featured" class="padd-box">
			<h2>' .
_T('public|spip|ecrire:derniers_articles') .
'</h2>
			<div class="padd-interior">				
				<div id="s3slider">
					<ul id="s3sliderContent">
							
						' .
(($t1 = BOUCLE_articleshtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . '
						') :
		((	'
						
						' .
	BOUCLE_articles_sechtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
                                                ' .
	BOUCLE_artisteshtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP) .
	'

						'))) .
'
						<div class="clear s3sliderImage"></div>
					</ul>
				</div>
			</div>
		</div>
		<div id="padd-subscribed">
			<h2>' .
_T('maparaan:suivre_site') .
'</h2>
			<div class="padd-interior">
			' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("menus", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	((recuperer_fond( 'inclure/barre-nav' , array_merge($Pile[0],array('identifiant' => 'slidernav' )), array('compil'=>array('squelettes/contenu/page-sommaire.html','html_def17861467cad8093f840d03dafb33c','',119,$GLOBALS['spip_lang'])), ''))  ?
			(' ' . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/menu') . ', array_merge('.var_export($Pile[0],1).',array(\'identifiant\' => ' . argumenter_squelette('slidernav') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/contenu/page-sommaire.html\',\'html_def17861467cad8093f840d03dafb33c\',\'\',119,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
			')) :
		'') .
'
				
				<ul>
					<li class="rss">
						<a href="' .
interdire_scripts(generer_url_public('backend', '')) .
'" title="Flux RSS">Flux RSS</a>
					</li>
					<li class="contact">
						<a href="' .
vider_url(urlencode_1738(generer_url_entite('1', 'auteur', '', '', true))) .
'" title="Contactez-nous">Contactez-nous</a>
					</li>
					<li class="twitter">
						<a href="http://twitter.com/AMMDCoorp" title="' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
' sur Twitter">Suivre mes Tweets</a>
					</li>
					' .
(($t1 = BOUCLE_eventshtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
					<li class="agenda"><a href="' .
		interdire_scripts(generer_url_public('rubrique', 'id_rubrique=9')) .
		'">Voir l\'agenda
					  ') . $t1 . '
                                        </a>
					</li>
					') :
		'') .
'
				</ul>
				
			</div>
		</div>
		<div class="padd-clear"></div>
	</div>
</div>


<div id="padd-content">
	<div id="padd-content-wrapper">
		<div class="padd-post-group padd-post-group-index">
			<div class="padd-post-group-title">
				<h2>' .
_T('public|spip|ecrire:accueil_site') .
'</h2>
			</div>
			

			  ' .
BOUCLE_aproposhtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				
				' .
(($t1 = BOUCLE_breveshtml_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
					<div class="padd-post-item padd-post-item-index padd-post-item-index-2">
						<div class="padd-post-item-title">
							<h2>' .
		_T('public|spip|ecrire:dernieres_breves') .
		'</h2>
						</div>
						<div class="padd-interior">
							<div class="padd-interior-wrapper">	
								<ul>
									') . $t1 . '
								</ul>
							</div>
						</div>
					</div>
				') :
		((	'
				
				' .
	(($t2 = BOUCLE_articles3html_def17861467cad8093f840d03dafb33c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			((	'
					<div class="padd-post-item padd-post-item-index padd-post-item-index-2 actus_listes">
						<div class="padd-post-item-title">
							<h2><em class="small">' .
			_T('public|spip|ecrire:actu') .
			'</em></h2> <p class="lirelasuite"><a href="?rubrique1">' .
			_T('zpip:lire_la_suite') .
			'</a></h2>
						</div>
						<ul class="actus_liste">
					') . $t2 . '
					</ul>
					</div>
					') :
			'') .
	'
				
				'))) .
'				
				
				<div class="nettoyeur"></div>
				
			</div>
		</div>
	</div>
</div>
');

	return analyse_resultat_skel('html_def17861467cad8093f840d03dafb33c', $Cache, $page, 'squelettes/contenu/page-sommaire.html');
}
?>