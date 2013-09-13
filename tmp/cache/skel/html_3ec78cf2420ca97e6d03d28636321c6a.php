<?php

/*
 * Squelette : plugins/auto/menus/menus/objet.html
 * Date :      Wed, 07 Mar 2012 12:00:04 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   _art_lang, _art_orig, _si_art
 */ 

function BOUCLE_art_langhtml_3ec78cf2420ca97e6d03d28636321c6a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art_lang';
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
			array('OR', 
			array('AND', 
			array('=', 'articles.id_trad', 0), 
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article']))), 
			array('AND', 
			array('>', 'articles.id_trad', 0), 
			array('=', 'articles.id_trad', sql_quote($Pile[$SP]['id_trad'])))), 
			array('=', 'articles.lang', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang', null),true)),'','varchar(10) NOT NULL DEFAULT \'\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/objet.html','html_3ec78cf2420ca97e6d03d28636321c6a','_art_lang',4,$GLOBALS['spip_lang'])
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
vide($Pile['vars'][(string)'id_objet'] = $Pile[$SP]['id_article']));
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_art_orightml_3ec78cf2420ca97e6d03d28636321c6a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art_orig';
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
			array('=', 'articles.id_article', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)),'','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('OR', 
			array('=', 'articles.id_trad', 'articles.id_article'), 
			array('=', 'articles.id_trad', '0')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/objet.html','html_3ec78cf2420ca97e6d03d28636321c6a','_art_orig',3,$GLOBALS['spip_lang'])
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
(($t1 = BOUCLE_art_langhtml_3ec78cf2420ca97e6d03d28636321c6a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	vide($Pile['vars'][(string)'id_objet'] = $Pile[$SP]['id_article'])))) .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_si_arthtml_3ec78cf2420ca97e6d03d28636321c6a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'type_objet', null),true) == 'article')) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'trad', null),true) == 'trad')))) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_si_art';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('plugins/auto/menus/menus/objet.html','html_3ec78cf2420ca97e6d03d28636321c6a','_si_art',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
BOUCLE_art_orightml_3ec78cf2420ca97e6d03d28636321c6a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/menus/menus/objet.html
// Temps de compilation total: 11.032 ms
//

function html_3ec78cf2420ca97e6d03d28636321c6a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'id_objet'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true))) .
BOUCLE_si_arthtml_3ec78cf2420ca97e6d03d28636321c6a($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
vide($Pile['vars'][(string)'titre'] = interdire_scripts(((($a = ((($a = typo(table_valeur(@$Pile[0], (string)'titre', null))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(generer_info_entite(table_valeur($Pile["vars"], (string)'id_objet', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_objet', null),true)), 'titre')))) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))) .
'

' .
(($t1 = strval(interdire_scripts(((((((entites_html(table_valeur(@$Pile[0], (string)'trad', null),true) == 'trad')) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'type_objet', null),true) == 'article')))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . vide($Pile['vars'][(string)'info_trad'] = _T('menus:info_traduction_recuperee'))) :
		'') .
'

' .
vide($Pile['vars'][(string)'visible'] = 'oui') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'connexion', null),true) == 'session')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null)) ?'' :' ')))))!=='' ?
			($t2 . (	'
		' .
		vide($Pile['vars'][(string)'visible'] = 'non'))) :
			'') .
	'
	' .
	vide($Pile['vars'][(string)'info_session'] = _T('menus:info_connexion_obligatoire')))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'connexion', null),true) == 'nosession')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null)) ?' ' :'')))))!=='' ?
			($t2 . (	'
		' .
		vide($Pile['vars'][(string)'visible'] = 'non'))) :
			'') .
	'
	' .
	vide($Pile['vars'][(string)'info_session'] = _T('menus:info_deconnexion_obligatoire')))) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'appel_formulaire', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="titre">' .
	table_valeur($Pile["vars"], (string)'titre', null) .
	'</div>
	<div class="infos">' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_objet', null),true)) .
	'-' .
	table_valeur($Pile["vars"], (string)'id_objet', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'info_session', null)))!=='' ?
			('-' . $t2) :
			'') .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'info_trad', null)))!=='' ?
			('-' . $t2) :
			'') .
	'</div>
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'appel_menu', null),true)) AND ((table_valeur($Pile["vars"], (string)'visible', null) == 'oui'))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
	<li class="menu-entree item' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'css', null),true))))!=='' ?
			(' ' . $t2) :
			'') .
	(($t2 = strval(menus_exposer(table_valeur($Pile["vars"], (string)'id_objet', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_objet', null),true)),interdire_scripts(table_valeur(@$Pile[0], (string)'env', null)))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
		<a href="' .
	interdire_scripts(generer_info_entite(table_valeur($Pile["vars"], (string)'id_objet', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_objet', null),true)), 'url')) .
	'" title="' .
	attribut_html(table_valeur($Pile["vars"], (string)'titre', null)) .
	'">' .
	table_valeur($Pile["vars"], (string)'titre', null) .
	'</a>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_3ec78cf2420ca97e6d03d28636321c6a', $Cache, $page, 'plugins/auto/menus/menus/objet.html');
}
?>