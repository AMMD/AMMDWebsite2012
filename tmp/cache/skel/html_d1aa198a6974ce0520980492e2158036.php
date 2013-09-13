<?php

/*
 * Squelette : squelettes/contenu/rubrique-7.html
 * Date :      Tue, 16 Apr 2013 15:01:49 GMT
 * Compile :   Tue, 16 Apr 2013 15:36:27 GMT
 * Boucles :   _ariane, _articles, _sub, _m2, _miniplan, _sous_rubriques, _contenu_rubrique
 */ 

function BOUCLE_arianehtml_d1aa198a6974ce0520980492e2158036(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	$hierarchie = '';
	while ($id_rubrique = sql_getfetsel("id_parent","spip_rubriques","id_rubrique=" . $id_rubrique,"","","", "", $connect)) { 
		$hierarchie = ",$id_rubrique$hierarchie";
	}
	if (!$hierarchie) return "";
	$hierarchie = substr($hierarchie,1);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_ariane';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_ariane',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' &gt; <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) .
'</a>');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articleshtml_d1aa198a6974ce0520980492e2158036(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : null), 10);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.texte",
		"articles.id_secteur",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
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
		array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_articles',17,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_articles']['compteur_boucle'] = 0;
	$Numrows['_articles']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : _request('debut_articles');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_articles'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_articles']['total']-1)/(10))*(10)));
	$fin_boucle = min(($tout ? $Numrows['_articles']['total'] : $debut_boucle + 9), $Numrows['_articles']['total'] - 1);
	$Numrows['_articles']['grand_total'] = $Numrows['_articles']['total'];
	$Numrows['_articles']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_articles']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_articles']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_articles']['compteur_boucle']++;
		if ($Numrows['_articles']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_articles']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		' .
(!(($Pile[$SP-1]['id_parent'] == '7'))  ?
		(' ' . (	'
		' .
	recuperer_fond( 'inclure/article-resume' , array('id_article' => $Pile[$SP]['id_article'] ), array('compil'=>array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_articles',23,$GLOBALS['spip_lang'])), ''))) :
		'') .
'
		' .
((($Pile[$SP-1]['id_parent'] == '7'))  ?
		(' ' . (	'
		' .
	filtrer('image_graver',filtrer('image_reduire',inserer_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'class','logo_artist'),'300','200')) .
	'
		<h6 class="artist">' .
	interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
	'</h6> ' .
	interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
	'
		')) :
		'') .
'
		' .
((($Pile[$SP]['id_secteur'] == '7'))  ?
		(' ' . '
		<br style="clear:both">
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


function BOUCLE_subhtml_d1aa198a6974ce0520980492e2158036(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.id_parent",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_sub',41,$GLOBALS['spip_lang'])
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
((($Pile[$SP]['id_parent'] == '7'))  ?
		(' ' . (	'
' .
	recuperer_fond( 'inclure/rubrique-resume' , array('id_rubrique' => $Pile[$SP]['id_rubrique'] ), array('compil'=>array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_sub',43,$GLOBALS['spip_lang'])), ''))) :
		'') .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_m2html_d1aa198a6974ce0520980492e2158036(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_miniplan']) ? $Numrows['_miniplan'] : array());
	$t0 = (($t1 = BOUCLE_miniplanhtml_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul class="menu-liste">
					' . $t1 . '
				</ul>
				') :
		'');
	$Numrows['_miniplan'] = ($save_numrows);
	return $t0;
}


function BOUCLE_miniplanhtml_d1aa198a6974ce0520980492e2158036(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_miniplan';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_miniplan',56,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li class="menu-entree">
						<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						' .
BOUCLE_m2html_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_d1aa198a6974ce0520980492e2158036(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sous_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_sous_rubriques',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<li class="menu-entree">
				<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>

				
				' .
(($t1 = BOUCLE_miniplanhtml_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul class="menu-liste">
					' . $t1 . '
				</ul>
				') :
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


function BOUCLE_contenu_rubriquehtml_d1aa198a6974ce0520980492e2158036(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_contenu_rubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.id_parent",
		"rubriques.titre",
		"rubriques.texte",
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
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_contenu_rubrique',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'


<p id="hierarchie"><a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a>' .
BOUCLE_arianehtml_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP) .
(($t1 = strval(interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80'))))!=='' ?
		(' &gt; <strong class="on">' . $t1 . '</strong>') :
		'') .
'</p>

<div class="padd-post-group padd-post-group-result">
	<div class="padd-post-group-title cartouche">
		' .
((($a = 
((!is_array($l = quete_logo('id_rubrique', 'ON', $Pile[$SP]['id_rubrique'],quete_parent($Pile[$SP]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : '<div class=\'pas-de-logo\'></div>') .
'
		<h1 class="">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h1>
	</div>

	' .
(($t1 = strval(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))))!=='' ?
		((	'<div class="chapo">') . $t1 . '</div>') :
		'') .
'

</div>


' .
(($t1 = BOUCLE_articleshtml_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="padd-post-list padd-post-list-result">

	' .
		filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		10, false, '', '', array()) .
		'
		') . $t1 . (	'
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		10, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'

</div>
')) :
		('
')) .
'


' .
BOUCLE_subhtml_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP) .
'

	' .
(($t1 = BOUCLE_sous_rubriqueshtml_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="menu rubriques">
		<h2 class="h2">' .
		_T('public|spip|ecrire:sous_rubriques') .
		'</h2>
		<ul class="menu-liste">
			') . $t1 . '
		</ul>
		</div>
	') :
		'') .
'


' .
recuperer_fond( 'inclure/documents' , array('id_rubrique' => $Pile[$SP]['id_rubrique'] ), array('compil'=>array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_contenu_rubrique',74,$GLOBALS['spip_lang'])), '') .
'	



' .
executer_balise_dynamique('FORMULAIRE_SITE',
	array($Pile[$SP]['id_rubrique']),
	array('squelettes/contenu/rubrique-7.html','html_d1aa198a6974ce0520980492e2158036','_contenu_rubrique',78,$GLOBALS['spip_lang'])) .
'

' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		((	'<div class="notes"><h2 class="h2">' .
	_T('public|spip|ecrire:info_notes') .
	'</h2>') . $t1 . '</div>') :
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
// Fonction principale du squelette squelettes/contenu/rubrique-7.html
// Temps de compilation total: 17.288 ms
//

function html_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_contenu_rubriquehtml_d1aa198a6974ce0520980492e2158036($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_d1aa198a6974ce0520980492e2158036', $Cache, $page, 'squelettes/contenu/rubrique-7.html');
}
?>