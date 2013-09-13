<?php

/*
 * Squelette : ../prive/objets/infos/auteur.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 11:51:44 GMT
 * Boucles :   _restreint, _arts, _publie, _auteur
 */ 

function BOUCLE_restreinthtml_5605d9ef170aa3d4e2c71b4f2e897755(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(($Pile[$SP]['statut'] == '0minirezo'));

	$command['pagination'] = array((isset($Pile[0]['debut_restreint']) ? $Pile[0]['debut_restreint'] : null), 10);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_restreint';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_auteur', sql_quote($Pile[$SP]['id_auteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('REGEXP', 'rubriques.statut', "'.*'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/auteur.html','html_5605d9ef170aa3d4e2c71b4f2e897755','_restreint',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_restreint']['compteur_boucle'] = 0;
	$Numrows['_restreint']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_restreint']) ? $Pile[0]['debut_restreint'] : _request('debut_restreint');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_restreint'] = quete_debut_pagination('id_rubrique',$Pile[0]['@id_rubrique'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_restreint']['total']-1)/(10))*(10)));
	$fin_boucle = min(($tout ? $Numrows['_restreint']['total'] : $debut_boucle + 9), $Numrows['_restreint']['total'] - 1);
	$Numrows['_restreint']['grand_total'] = $Numrows['_restreint']['total'];
	$Numrows['_restreint']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_restreint']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_restreint']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_restreint']['compteur_boucle']++;
		if ($Numrows['_restreint']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_restreint']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<li class="item rubrique"><a href="' .
generer_url_entite($Pile[$SP]['id_rubrique'],'rubrique') .
'">' .
(($t1 = strval(interdire_scripts(filtre_balise_img_dist(chemin_image('rubrique-16.png')))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
'</a></li>
			');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_artshtml_5605d9ef170aa3d4e2c71b4f2e897755(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_arts';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_auteur', sql_quote($Pile[$SP]['id_auteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('NOT', 
			array('=', 'articles.statut', "'poubelle'")));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/auteur.html','html_5605d9ef170aa3d4e2c71b4f2e897755','_arts',38,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_arts']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_arts']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_publiehtml_5605d9ef170aa3d4e2c71b4f2e897755(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_publie';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.id_auteur");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'), 'L2' => array('L1','id_article','id_objet','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('L2.statut','!','publie',''), 
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'auteurs.id_auteur', sql_quote($Pile[$SP]['id_auteur'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/auteur.html','html_5605d9ef170aa3d4e2c71b4f2e897755','_publie',51,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:icone_voir_en_ligne');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=auteur&id=' .
	$Pile[$SP]['id_auteur'])),'var_mode','calcul'),$l1,'racine') .
'
');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_auteurhtml_5605d9ef170aa3d4e2c71b4f2e897755(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteur';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.statut",
		"auteurs.bio");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'auteurs.id_auteur', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)),'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('auteurs.statut',sql_quote($in)) : 
			array('=', 'auteurs.statut', sql_quote(@$Pile[0]['statut'],'','varchar(255) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/auteur.html','html_5605d9ef170aa3d4e2c71b4f2e897755','_auteur',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:titre_cadre_numero_auteur');
	$l2 = _T('public|spip|ecrire:info_statut_auteur_2');
	$l3 = _T('public|spip|ecrire:info_statut_auteur');
	$l4 = _T('public|spip|ecrire:info_admin_je_suis_webmestre');
	$l5 = _T('public|spip|ecrire:info_admin_webmestre');
	$l6 = _T('public|spip|ecrire:info_admin_etre_webmestre');
	$l7 = _T('public|spip|ecrire:info_admin_gere_rubriques');
	$l8 = _T('public|spip|ecrire:info_admin_gere_toutes_rubriques_2');
	$l9 = _T('public|spip|ecrire:info_admin_gere_toutes_rubriques');
	$l10 = _T('public|spip|ecrire:info_article');
	$l11 = _T('public|spip|ecrire:previsualiser');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class=\'infos\'>
<div class=\'numero\'>' .
$l1 .
'<p>' .
$Pile[$SP]['id_auteur'] .
'</p></div>

<div class="statut">
' .
(($t1 = strval(interdire_scripts(traduire_statut_auteur($Pile[$SP]['statut'],interdire_scripts($Pile[$SP]['bio'])))))!=='' ?
		((	'<p>' .
	(($Pile[$SP]['id_auteur'] == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? $l2:$l3) .
	' <strong>') . $t1 . '</strong></p>') :
		'') .
'

' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre', '', '0', invalideur_session($Cache, $Pile[$SP]['id_auteur']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null) == invalideur_session($Cache, $Pile[$SP]['id_auteur'])) ? $l4:$l5)))))!=='' ?
			('<p>' . $t2 . '</p>') :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, (((((((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null) == invalideur_session($Cache, $Pile[$SP]['id_auteur']))) AND (invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":"")) ?'' :' ')))) ?' ' :'')) AND (invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('etrewebmestre')?" ":"")) ?' ' :'')))) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	((defined('_ID_WEBMESTRES'))  ?
			(' ' . (	'
		' .
		vide($Pile['vars'][(string)'options'] = basename(constant('_FILE_OPTIONS'))) .
		_T('public|spip|ecrire:info_webmestre_forces', array('file_options' => table_valeur($Pile["vars"], (string)'options', null))) .
		'
	')) :
			'') .
	'
	' .
	(!(defined('_ID_WEBMESTRES'))  ?
			(' ' . (	'
		' .
		bouton_action($l6,invalideur_session($Cache, generer_action_auteur('etre_webmestre',invalideur_session($Cache, time('')),invalideur_session($Cache, self())))) .
		'
	')) :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = BOUCLE_restreinthtml_5605d9ef170aa3d4e2c71b4f2e897755($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class=\'liste_rubriques_restreintes\'>
		' .
		$l7 .
		'
		<ul class="liste-items rubriques">
			') . $t1 . (	'
		</ul>
		' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_restreint"]["grand_total"],
 		'_restreint',
		isset($Pile[0]['debut_restreint'])?$Pile[0]['debut_restreint']:intval(_request('debut_restreint')),
		10, true, 'prive', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
	</div>
')) :
		((	'
' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['statut'] == '0minirezo')) ?' ' :''))))!=='' ?
			($t2 . (	'
	' .
		(($t3 = strval((($Pile[$SP]['id_auteur'] == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? $l8:$l9)))!=='' ?
				('<p>' . $t3 . '</p>') :
				'') .
		'
')) :
			'') .
	'
'))) .
'
</div>

<div class=\'nb_elements\'>
' .
(($t1 = BOUCLE_artshtml_5605d9ef170aa3d4e2c71b4f2e897755($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
' .
		(($t3 = strval(interdire_scripts((($Pile[$SP]['statut'] <> '6forum') ? ' ':''))))!=='' ?
				($t3 . (($t4 = strval(singulier_ou_pluriel($Numrows['_arts']['total'],'info_articles_un','info_articles_nb')))!=='' ?
					('<div>' . $t4 . '</div>') :
					'')) :
				'') .
		'
')) :
		((	'
' .
	(($t2 = strval(interdire_scripts((($Pile[$SP]['statut'] <> '6forum') ? ' ':''))))!=='' ?
			($t2 . (	'<div class="noinfo">' .
		$Numrows['_arts']['total'] .
		' ' .
		$l10 .
		'</div>')) :
			'') .
	'
'))) .
'
<!--nb_elements-->
</div>
</div>

' .
(($t1 = BOUCLE_publiehtml_5605d9ef170aa3d4e2c71b4f2e897755($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('previsualiser', 'auteur', invalideur_session($Cache, $Pile[$SP]['id_auteur']), '', invalideur_session($Cache, array('statut' => '')))?" ":""))))!=='' ?
			($t2 . (	'
		' .
		filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=auteur&id=' .
			$Pile[$SP]['id_auteur'])),'var_mode','preview'),$l11,'preview') .
		'
	')) :
			'') .
	'
'))) .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/infos/auteur.html
// Temps de compilation total: 19.697 ms
//

function html_5605d9ef170aa3d4e2c71b4f2e897755($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_auteurhtml_5605d9ef170aa3d4e2c71b4f2e897755($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_5605d9ef170aa3d4e2c71b4f2e897755', $Cache, $page, '../prive/objets/infos/auteur.html');
}
?>