<?php

/*
 * Squelette : squelettes/inclure/rubrique-resume.html
 * Date :      Tue, 26 Mar 2013 15:08:53 GMT
 * Compile :   Tue, 16 Apr 2013 09:43:50 GMT
 * Boucles :   _rubriques
 */ 

function BOUCLE_rubriqueshtml_ca5396bb998484a5182eb56e76963479(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.date",
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
		array('squelettes/inclure/rubrique-resume.html','html_ca5396bb998484a5182eb56e76963479','_rubriques',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'

	<div class="padd-post-item padd-post-item-result">
		' .
vide($Pile['vars'][(string)'largeur'] = largeur(
((!is_array($l = quete_logo('id_rubrique', 'ON', $Pile[$SP]['id_rubrique'],quete_parent($Pile[$SP]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'hauteur'] = hauteur(
((!is_array($l = quete_logo('id_rubrique', 'ON', $Pile[$SP]['id_rubrique'],quete_parent($Pile[$SP]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'taille'] = '115') .
vide($Pile['vars'][(string)'ratio_x'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'taille', null))) .
vide($Pile['vars'][(string)'ratio_y'] = div(table_valeur($Pile["vars"], (string)'hauteur', null),table_valeur($Pile["vars"], (string)'taille', null))) .
vide($Pile['vars'][(string)'ratio'] = ((table_valeur($Pile["vars"], (string)'ratio_x', null) <= table_valeur($Pile["vars"], (string)'ratio_y', null)) ? table_valeur($Pile["vars"], (string)'ratio_x', null):table_valeur($Pile["vars"], (string)'ratio_y', null))) .
(($t1 = strval(((($a = filtrer('image_graver', filtrer('image_recadre',filtrer('image_reduire_par',
((!is_array($l = quete_logo('id_rubrique', 'ON', $Pile[$SP]['id_rubrique'],quete_parent($Pile[$SP]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),table_valeur($Pile["vars"], (string)'ratio', null)),'115','115','center'))) OR (is_string($a) AND strlen($a))) ? $a : '<div class="pas-de-logo-article-resume"></div>')))!=='' ?
		((	'<a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
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
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'" rel="bookmark">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
		</div>
		<div class="padd-post-item-entry">
			' .
(($t1 = strval(interdire_scripts(couper(propre($Pile[$SP]['texte'], $connect, $Pile[0]),'320','...'))))!=='' ?
		((	'<div class="introduction
			entry-content">
				') . $t1 . (	'
				<p class="lirelasuite"><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
	'">' .
	_T('zpip:lire_la_suite') .
	'</a></p>
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
// Fonction principale du squelette squelettes/inclure/rubrique-resume.html
// Temps de compilation total: 5.326 ms
//

function html_ca5396bb998484a5182eb56e76963479($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_rubriqueshtml_ca5396bb998484a5182eb56e76963479($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_ca5396bb998484a5182eb56e76963479', $Cache, $page, 'squelettes/inclure/rubrique-resume.html');
}
?>