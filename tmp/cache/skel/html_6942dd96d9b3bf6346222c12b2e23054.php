<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html
 * Date :      Fri, 25 Mar 2011 12:00:10 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   _auteurhitparade, _hitparade, _comsrecents, _menus, _sites
 */ 

function BOUCLE_auteurhitparadehtml_6942dd96d9b3bf6346222c12b2e23054(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteurhitparade';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.nom");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html','html_6942dd96d9b3bf6346222c12b2e23054','_auteurhitparade',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]));
		$t0 .= ((strlen($t1) && strlen($t0)) ? ', ' : '') . $t1;
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_hitparadehtml_6942dd96d9b3bf6346222c12b2e23054(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_hitparade';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.popularite",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.popularite DESC');
		$command['join'] = array();
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('articles.id_rubrique',sql_quote($in)) : 
			array('=', 'articles.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html','html_6942dd96d9b3bf6346222c12b2e23054','_hitparade',2,$GLOBALS['spip_lang'])
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
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
					' .
(($t1 = BOUCLE_auteurhitparadehtml_6942dd96d9b3bf6346222c12b2e23054($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
					' .
		_T('maparaan:par') .
		' 
					') . $t1 . '
					') :
		'') .
'
					' .
(($t1 = strval(((((ceil(min(100, 100 * $Pile[$SP]['popularite']
	/ max(1 , 0 + $GLOBALS['meta']['popularite_max'])))) > '0')) ?' ' :'')))!=='' ?
		($t1 . (	' &#40;' .
	(ceil(min(100, 100 * $Pile[$SP]['popularite']
	/ max(1 , 0 + $GLOBALS['meta']['popularite_max'])))) .
	' %&#41;')) :
		'') .
'
				</span></li>
			');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_comsrecentshtml_6942dd96d9b3bf6346222c12b2e23054(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_comsrecents';
		$command['from'] = array('forum' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("forum.date_heure",
		"forum.date_heure AS date",
		"forum.id_auteur",
		"forum.auteur AS nom",
		"forum.id_forum",
		"forum.titre");
		$command['orderby'] = array('forum.date_heure DESC');
		$command['where'] = 
			array(
quete_condition_statut('forum.statut','publie,prop','publie',''), 
			array('=', 'forum.id_parent', 0));
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
		array('plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html','html_6942dd96d9b3bf6346222c12b2e23054','_comsrecents',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('maparaan:sur');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<li class="padd-comments-recent"><span class="padd-wrap">' .
interdire_scripts(affdate_court($Pile[$SP]['date'])) .
' - 
				' .
(($Pile[$SP]['id_auteur'])  ?
		(' ' . (	'
				<a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_auteur'], 'auteur', '', '', true))) .
	'">' .
	interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
	'</a>
				')) :
		'') .
'
				' .
(!($Pile[$SP]['id_auteur'])  ?
		(' ' . (	'
					' .
	interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
	'
				')) :
		'') .
'
				' .
$l1 .
' <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_forum'], 'forum', '', '', true))) .
'">' .
interdire_scripts(safehtml(typo(interdit_html($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a></span></li>
			');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_menushtml_6942dd96d9b3bf6346222c12b2e23054(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_menus';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'menus.identifiant', "'piednav'"));
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
		array('plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html','html_6942dd96d9b3bf6346222c12b2e23054','_menus',44,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= vide($Pile['vars'][(string)'titre_menu'] = interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_siteshtml_6942dd96d9b3bf6346222c12b2e23054(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_sites';
		$command['from'] = array('syndic' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic.nom_site",
		"syndic.id_syndic",
		"syndic.url_site");
		$command['orderby'] = array('syndic.nom_site');
		$command['where'] = 
			array(
quete_condition_statut('syndic.statut','publie,prop','publie',''));
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
		array('plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html','html_6942dd96d9b3bf6346222c12b2e23054','_sites',56,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<li class="padd-comments-recent"><span class="padd-wrap"><a href="' .
generer_url_entite($Pile[$SP]['id_syndic'],'site') .
'">' .
interdire_scripts(couper(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0]),'30')) .
'</a></span></li>
			');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html
// Temps de compilation total: 12.908 ms
//

function html_6942dd96d9b3bf6346222c12b2e23054($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_hitparadehtml_6942dd96d9b3bf6346222c12b2e23054($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="padd-box padd-footer-popular-posts">
	<h2>' .
		_T('maparaan:articles_populaires') .
		'</h2>
	<div class="padd-interior">
		<ul>
			') . $t1 . '
		</ul>
	</div>
</div>
') :
		'') .
'
	

' .
(($t1 = BOUCLE_comsrecentshtml_6942dd96d9b3bf6346222c12b2e23054($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="padd-box padd-footer-recent-comments">
	<h2>' .
		_T('maparaan:commentaires_recents') .
		'</h2>
	<div class="padd-interior">
		<ul class="padd-comments-recent">
			') . $t1 . '
		</ul>
	</div>
</div>
') :
		'') .
'



' .
BOUCLE_menushtml_6942dd96d9b3bf6346222c12b2e23054($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("menus", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	((recuperer_fond( 'inclure/menu' , array_merge($Pile[0],array('identifiant' => 'piednav' )), array('compil'=>array('plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html','html_6942dd96d9b3bf6346222c12b2e23054','',46,$GLOBALS['spip_lang'])), ''))  ?
			(' ' . (	'
	<div class="padd-box padd-box-small padd-footer-pages">
		<h2>' .
		table_valeur($Pile["vars"], (string)'titre_menu', null) .
		'</h2>
		<div class="padd-interior">
			<div id="nav">' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/menu') . ', array_merge('.var_export($Pile[0],1).',array(\'identifiant\' => ' . argumenter_squelette('piednav') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html\',\'html_6942dd96d9b3bf6346222c12b2e23054\',\'\',50,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'></div>
		</div>
	</div>
	')) :
			'') .
	'
')) :
		'') .
'

' .
(($t1 = BOUCLE_siteshtml_6942dd96d9b3bf6346222c12b2e23054($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="padd-box padd-box-small padd-footer-blogroll">
	<h2>' .
		_T('maparaan:sites') .
		'</h2>
	<div class="padd-interior">
		<ul>
			') . $t1 . '
		</ul>
	</div>
</div>
') :
		'') .
'
<div class="nettoyeur"></div>
');

	return analyse_resultat_skel('html_6942dd96d9b3bf6346222c12b2e23054', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/inc-footer-content.html');
}
?>