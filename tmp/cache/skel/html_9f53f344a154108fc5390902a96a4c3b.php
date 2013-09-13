<?php

/*
 * Squelette : plugins/auto/menus/menus/rubriques.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   _cpt_sousrub, _cpt_si_sousrub, _articles_si_sousrub, _test_afficher_si_sousrub, _test_articles_si_sousrub, _cpt_pas_de_sousrub, _articles_pas_de_sousrub, _test_afficher_pas_de_sousrub, _test_articles_pas_de_sousrub, _cpt_sousrub_asuivre, _cpt_articles_asuivre, _test_classe_parent, _sous_sous, _test_niveau2, _sous_rubriques, _test_niveau, _rubriques, _cpt_pas_de_rub, _articles_pas_de_rub, _test_afficher_pas_de_rub, _test_articles_pas_de_rub, _appel
 */ 

function BOUCLE_cpt_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'id_rubriques_exclues', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_cpt_sousrub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP-1]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), sql_in('rubriques.id_rubrique',sql_quote($in),'NOT'));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_cpt_sousrub',77,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_cpt_sousrub']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_cpt_sousrub']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_cpt_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_cpt_si_sousrub';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP-2]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'],'','varchar(10) NOT NULL DEFAULT \'\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_cpt_si_sousrub',128,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_cpt_si_sousrub']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_cpt_si_sousrub']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articles_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	static $champs__articles_si_sousrub = array('id_article','surtitre','titre','soustitre','id_rubrique','descriptif','chapo','texte','ps','date','statut','id_secteur','maj','export','date_redac','visites','referers','popularite','accepter_forum','date_modif','lang','langue_choisie','id_trad','nom_site','url_site','virtuel');
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_si_sousrub';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['having'] = 
			array();
	}
	$command['select'] = array("" . (($x = table_valeur($Pile["vars"], (string)'tri_num_articles', null)) ? ('0+' . $x) : '0') . " AS num",
		"rand() AS hasard",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
	$command['orderby'] = array('num' . ((table_valeur($Pile["vars"], (string)'tri_num_articles_inverse', null))?' DESC':''), (($x = preg_replace("/\W/",'', table_valeur($Pile["vars"], (string)'tri_alpha_articles', null))) ? (in_array($x, $champs__articles_si_sousrub)  ? ('articles.' . $x) :($x)) : '') . ((table_valeur($Pile["vars"], (string)'tri_alpha_articles_inverse', null))?' DESC':''));
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP-3]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'],'','varchar(10) NOT NULL DEFAULT \'\'')));
	$command['limit'] = '0'.','.intval(table_valeur($Pile["vars"], (string)'articles_max_affiches', null));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_articles_si_sousrub',139,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
								<li class="menu-entree item' .
(($t1 = strval(menus_exposer($Pile[$SP]['id_article'],'article',interdire_scripts(table_valeur(@$Pile[0], (string)'env', null)))))!=='' ?
		(' ' . $t1) :
		'') .
'">
									<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'" title="' .
interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
								</li>
							');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_afficher_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (((table_valeur($Pile["vars"], (string)'afficher', null) == 'oui')) ?' ' :'');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_afficher_si_sousrub';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_afficher_si_sousrub',138,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:tous_les_articles');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
							' .
(($t1 = BOUCLE_articles_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
							' .
		(((table_valeur($Pile["vars"], (string)'cpt', null) > table_valeur($Pile["vars"], (string)'articles_max_affiches', null)))  ?
				(' ' . (	'
								<li class="menu-entree item"><a class="suite" href="' .
			parametre_url(vider_url(urlencode_1738(generer_url_entite($Pile[$SP-3]['id_rubrique'], 'rubrique', '', '', true))),'connect','') .
			'">' .
			$l1 .
			'</a></li>')) :
				'') .
		'
							')) :
		'') .
'
						');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_articles_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'afficher_articles', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_articles_si_sousrub';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_articles_si_sousrub',125,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						
						' .
vide($Pile['vars'][(string)'cpt'] = '0') .
(($t1 = BOUCLE_cpt_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . vide($Pile['vars'][(string)'cpt'] = $Numrows['_cpt_si_sousrub']['total'])) :
		'') .
'
			
						
						' .
vide($Pile['vars'][(string)'afficher'] = 'non') .
((((((table_valeur($Pile["vars"], (string)'cpt', null) <= table_valeur($Pile["vars"], (string)'articles_max', null))) ?' ' :'')) AND (((((table_valeur($Pile["vars"], (string)'cpt', null) > '1')) OR ((((table_valeur($Pile["vars"], (string)'masquer_articles_uniques', null) == 'on')) ?'' :' '))) ?' ' :'')))  ?
		(' ' . (	'
							' .
	vide($Pile['vars'][(string)'afficher'] = 'oui'))) :
		'') .
'

						' .
BOUCLE_test_afficher_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_cpt_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_cpt_pas_de_sousrub';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP-2]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'],'','varchar(10) NOT NULL DEFAULT \'\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_cpt_pas_de_sousrub',158,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_cpt_pas_de_sousrub']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_cpt_pas_de_sousrub']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articles_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	static $champs__articles_pas_de_sousrub = array('id_article','surtitre','titre','soustitre','id_rubrique','descriptif','chapo','texte','ps','date','statut','id_secteur','maj','export','date_redac','visites','referers','popularite','accepter_forum','date_modif','lang','langue_choisie','id_trad','nom_site','url_site','virtuel');
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_pas_de_sousrub';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['having'] = 
			array();
	}
	$command['select'] = array("" . (($x = table_valeur($Pile["vars"], (string)'tri_num_articles', null)) ? ('0+' . $x) : '0') . " AS num",
		"rand() AS hasard",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
	$command['orderby'] = array('num' . ((table_valeur($Pile["vars"], (string)'tri_num_articles_inverse', null))?' DESC':''), (($x = preg_replace("/\W/",'', table_valeur($Pile["vars"], (string)'tri_alpha_articles', null))) ? (in_array($x, $champs__articles_pas_de_sousrub)  ? ('articles.' . $x) :($x)) : '') . ((table_valeur($Pile["vars"], (string)'tri_alpha_articles_inverse', null))?' DESC':''));
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP-3]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'],'','varchar(10) NOT NULL DEFAULT \'\'')));
	$command['limit'] = '0'.','.intval(table_valeur($Pile["vars"], (string)'articles_max_affiches', null));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_articles_pas_de_sousrub',169,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
								<li class="menu-entree item' .
(($t1 = strval(menus_exposer($Pile[$SP]['id_article'],'article',interdire_scripts(table_valeur(@$Pile[0], (string)'env', null)))))!=='' ?
		(' ' . $t1) :
		'') .
'">
										<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'" title="' .
interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
								</li>
							');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_afficher_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (((table_valeur($Pile["vars"], (string)'afficher', null) == 'oui')) ?' ' :'');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_afficher_pas_de_sousrub';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_afficher_pas_de_sousrub',168,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:tous_les_articles');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
							' .
(($t1 = BOUCLE_articles_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
								<ul class="menu-liste menu-items">
							' . $t1 . (	'
								' .
		(((table_valeur($Pile["vars"], (string)'cpt', null) > table_valeur($Pile["vars"], (string)'articles_max_affiches', null)))  ?
				(' ' . (	'
									<li class="menu-entree item"><a class="suite" href="' .
			parametre_url(vider_url(urlencode_1738(generer_url_entite($Pile[$SP-3]['id_rubrique'], 'rubrique', '', '', true))),'connect','') .
			'">' .
			$l1 .
			'</a></li>')) :
				'') .
		'
								</ul>
							')) :
		'') .
'
						');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_articles_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'afficher_articles', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_articles_pas_de_sousrub';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_articles_pas_de_sousrub',155,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						
						' .
vide($Pile['vars'][(string)'cpt'] = '0') .
(($t1 = BOUCLE_cpt_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . vide($Pile['vars'][(string)'cpt'] = $Numrows['_cpt_pas_de_sousrub']['total'])) :
		'') .
'

						
						' .
vide($Pile['vars'][(string)'afficher'] = 'non') .
((((((table_valeur($Pile["vars"], (string)'cpt', null) <= table_valeur($Pile["vars"], (string)'articles_max', null))) ?' ' :'')) AND (((((table_valeur($Pile["vars"], (string)'cpt', null) > '1')) OR ((((table_valeur($Pile["vars"], (string)'masquer_articles_uniques', null) == 'on')) ?'' :' '))) ?' ' :'')))  ?
		(' ' . (	' 		
							' .
	vide($Pile['vars'][(string)'afficher'] = 'oui'))) :
		'') .
'

						' .
BOUCLE_test_afficher_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_cpt_sousrub_asuivrehtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'id_rubriques_exclues', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_cpt_sousrub_asuivre';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP-1]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), sql_in('rubriques.id_rubrique',sql_quote($in),'NOT'));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_cpt_sousrub_asuivre',96,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_cpt_sousrub_asuivre']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_cpt_sousrub_asuivre']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_cpt_articles_asuivrehtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_cpt_articles_asuivre';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP-1]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'],'','varchar(10) NOT NULL DEFAULT \'\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_cpt_articles_asuivre',99,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_cpt_articles_asuivre']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_cpt_articles_asuivre']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_classe_parenthtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'classe_parent', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_classe_parent';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_classe_parent',93,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
                     
                     ' .
vide($Pile['vars'][(string)'cpt_sousrub_asuivre'] = '0') .
(($t1 = BOUCLE_cpt_sousrub_asuivrehtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . vide($Pile['vars'][(string)'cpt_sousrub_asuivre'] = $Numrows['_cpt_sousrub_asuivre']['total'])) :
		'') .
'
                     
                     ' .
vide($Pile['vars'][(string)'cpt_articles_asuivre'] = '0') .
(($t1 = BOUCLE_cpt_articles_asuivrehtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . vide($Pile['vars'][(string)'cpt_articles_asuivre'] = $Numrows['_cpt_articles_asuivre']['total'])) :
		'') .
'
                     ' .
((table_valeur($Pile["vars"], (string)'cond', null))  ?
		(' ' . (	'
                        ' .
	((table_valeur($Pile["vars"], (string)'cpt_sousrub_asuivre', null))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][(string)'class'] = table_valeur($Pile["vars"], (string)'classe_parent', null)))) :
			'') .
	'
                        ' .
	(((table_valeur($Pile["vars"], (string)'afficher_articles', null)) AND (((((((table_valeur($Pile["vars"], (string)'cpt_articles_asuivre', null) <= table_valeur($Pile["vars"], (string)'articles_max', null))) ?' ' :'')) AND (((((table_valeur($Pile["vars"], (string)'cpt_articles_asuivre', null) > '1')) OR ((((table_valeur($Pile["vars"], (string)'masquer_articles_uniques', null) == 'on')) ?'' :' '))) ?' ' :''))) ?' ' :'')))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][(string)'class'] = table_valeur($Pile["vars"], (string)'classe_parent', null)))) :
			'') .
	'
                     ')) :
		'') .
'
                  ');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sous_soushtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_sous_rubriques']) ? $Numrows['_sous_rubriques'] : array());
	$t0 = (($t1 = BOUCLE_sous_rubriqueshtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
					<ul class="menu-liste menu-items">
				' . $t1 . (	'
					
					' .
		(((table_valeur($Pile["vars"], (string)'cpt_sousrub', null) > table_valeur($Pile["vars"], (string)'rubriques_max_affichees', null)))  ?
				(' ' . (	'
						<li class="menu-entree item"><a class="suite" href="' .
			vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
			'">' .
			_T('menus:toutes_les_rubriques') .
			'</a></li>')) :
				'') .
		'

					

					' .
		BOUCLE_test_articles_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
					
					</ul>
				')) :
		((	'

					
					' .
	BOUCLE_test_articles_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
					

				')));
	$Numrows['_sous_rubriques'] = ($save_numrows);
	return $t0;
}


function BOUCLE_test_niveau2html_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'cond', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_niveau2';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_niveau2',108,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						' .
BOUCLE_sous_soushtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
						');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'id_rubriques_exclues', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	static $champs__sous_rubriques = array('id_rubrique','id_parent','titre','descriptif','texte','id_secteur','maj','statut','date','lang','langue_choisie','statut_tmp','date_tmp','profondeur');
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sous_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['having'] = 
			array();
	}
	$command['select'] = array("rubriques.id_rubrique",
		"" . (($x = table_valeur($Pile["vars"], (string)'tri_num', null)) ? ('0+' . $x) : '0') . " AS num",
		"rand() AS hasard",
		"rubriques.titre",
		"rubriques.lang");
	$command['orderby'] = array('num' . ((table_valeur($Pile["vars"], (string)'tri_num_inverse', null))?' DESC':''), (($x = preg_replace("/\W/",'', table_valeur($Pile["vars"], (string)'tri_alpha', null))) ? (in_array($x, $champs__sous_rubriques)  ? ('rubriques.' . $x) :($x)) : '') . ((table_valeur($Pile["vars"], (string)'tri_alpha_inverse', null))?' DESC':''));
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP-1]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), sql_in('rubriques.id_rubrique',sql_quote($in),'NOT'));
	$command['limit'] = '0'.','.intval(table_valeur($Pile["vars"], (string)'rubriques_max_affichees', null));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_sous_rubriques',79,$GLOBALS['spip_lang'])
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
vide($Pile['vars'][(string)'niveau_actuel'] = plus(table_valeur($Pile["vars"], (string)'niveau_actuel', null),'1')) .
'
					' .
vide($Pile['vars'][(string)'cond'] = ((((table_valeur($Pile["vars"], (string)'niveau_max', null) > table_valeur($Pile["vars"], (string)'niveau_actuel', null))) AND ((table_valeur($Pile["vars"], (string)'sousrub_cond', null) ? menus_exposer($Pile[$SP]['id_rubrique'],'rubrique',interdire_scripts(table_valeur(@$Pile[0], (string)'env', null))):'on'))) ?' ' :'')) .
'
					<li class="menu-entree item' .
(($t1 = strval(menus_exposer($Pile[$SP]['id_rubrique'],'rubrique',interdire_scripts(table_valeur(@$Pile[0], (string)'env', null)))))!=='' ?
		(' ' . $t1) :
		'') .
' rub' .
$Pile[$SP]['id_rubrique'] .
'">

						
                  ' .
vide($Pile['vars'][(string)'class'] = '') .
BOUCLE_test_classe_parenthtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
						

						<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'" title="' .
interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'"' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'class', null)))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
'>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						' .
BOUCLE_test_niveau2html_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					</li>
				');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_niveauhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'cond', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_niveau';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_niveau',74,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:toutes_les_rubriques');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				
				' .
vide($Pile['vars'][(string)'cpt_sousrub'] = '0') .
(($t1 = BOUCLE_cpt_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . vide($Pile['vars'][(string)'cpt_sousrub'] = $Numrows['_cpt_sousrub']['total'])) :
		'') .
'

				' .
(($t1 = BOUCLE_sous_rubriqueshtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
					<ul class="menu-liste menu-items">
				' . $t1 . (	'
					
					' .
		(((table_valeur($Pile["vars"], (string)'cpt_sousrub', null) > table_valeur($Pile["vars"], (string)'rubriques_max_affichees', null)))  ?
				(' ' . (	'
						<li class="menu-entree item"><a class="suite" href="' .
			vider_url(urlencode_1738(generer_url_entite($Pile[$SP-1]['id_rubrique'], 'rubrique', '', '', true))) .
			'">' .
			$l1 .
			'</a></li>')) :
				'') .
		'

					

					' .
		BOUCLE_test_articles_si_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
					
					</ul>
				')) :
		((	'

					
					' .
	BOUCLE_test_articles_pas_de_sousrubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
					

				'))) .
'
			');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_rubriqueshtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'id_secteur_exclus', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'id_rubriques_exclues', null)))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	static $champs__rubriques = array('id_rubrique','id_parent','titre','descriptif','texte','id_secteur','maj','statut','date','lang','langue_choisie','statut_tmp','date_tmp','profondeur');
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['having'] = 
			array();
	}
	$command['select'] = array("rubriques.id_rubrique",
		"" . (($x = table_valeur($Pile["vars"], (string)'tri_num', null)) ? ('0+' . $x) : '0') . " AS num",
		"rand() AS hasard",
		"rubriques.titre",
		"rubriques.lang");
	$command['orderby'] = array('num' . ((table_valeur($Pile["vars"], (string)'tri_num_inverse', null))?' DESC':''), (($x = preg_replace("/\W/",'', table_valeur($Pile["vars"], (string)'tri_alpha', null))) ? (in_array($x, $champs__rubriques)  ? ('rubriques.' . $x) :($x)) : '') . ((table_valeur($Pile["vars"], (string)'tri_alpha_inverse', null))?' DESC':''));
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote(table_valeur($Pile["vars"], (string)'id_rubrique', null),'','bigint(21) NOT NULL DEFAULT \'0\'')), sql_in('rubriques.id_secteur',sql_quote($in),'NOT'), sql_in('rubriques.id_rubrique',sql_quote($in1),'NOT'));
	$command['limit'] = '0'.','.intval(table_valeur($Pile["vars"], (string)'rubriques_max_affichees', null));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_rubriques',66,$GLOBALS['spip_lang'])
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
vide($Pile['vars'][(string)'niveau_actuel'] = interdire_scripts(intval(eval('return '.'1'.';')))) .
'<li class="menu-entree item' .
(($t1 = strval(menus_exposer($Pile[$SP]['id_rubrique'],'rubrique',interdire_scripts(table_valeur(@$Pile[0], (string)'env', null)))))!=='' ?
		(' ' . $t1) :
		'') .
' rub' .
$Pile[$SP]['id_rubrique'] .
'">
			<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'" title="' .
interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>

			
			' .
vide($Pile['vars'][(string)'cond'] = ((((table_valeur($Pile["vars"], (string)'niveau_max', null) > table_valeur($Pile["vars"], (string)'niveau_actuel', null))) AND ((table_valeur($Pile["vars"], (string)'sousrub_cond', null) ? menus_exposer($Pile[$SP]['id_rubrique'],'rubrique',interdire_scripts(table_valeur(@$Pile[0], (string)'env', null))):'on'))) ?' ' :'')) .
'

			' .
BOUCLE_test_niveauhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		</li>
	');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_cpt_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_cpt_pas_de_rub';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote(table_valeur($Pile["vars"], (string)'id_rubrique', null),'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'],'','varchar(10) NOT NULL DEFAULT \'\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_cpt_pas_de_rub',194,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_cpt_pas_de_rub']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_cpt_pas_de_rub']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articles_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	static $champs__articles_pas_de_rub = array('id_article','surtitre','titre','soustitre','id_rubrique','descriptif','chapo','texte','ps','date','statut','id_secteur','maj','export','date_redac','visites','referers','popularite','accepter_forum','date_modif','lang','langue_choisie','id_trad','nom_site','url_site','virtuel');
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_pas_de_rub';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['having'] = 
			array();
	}
	$command['select'] = array("" . (($x = table_valeur($Pile["vars"], (string)'tri_num_articles', null)) ? ('0+' . $x) : '0') . " AS num",
		"rand() AS hasard",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
	$command['orderby'] = array('num' . ((table_valeur($Pile["vars"], (string)'tri_num_articles_inverse', null))?' DESC':''), (($x = preg_replace("/\W/",'', table_valeur($Pile["vars"], (string)'tri_alpha_articles', null))) ? (in_array($x, $champs__articles_pas_de_rub)  ? ('articles.' . $x) :($x)) : '') . ((table_valeur($Pile["vars"], (string)'tri_alpha_articles_inverse', null))?' DESC':''));
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote(table_valeur($Pile["vars"], (string)'id_rubrique', null),'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'],'','varchar(10) NOT NULL DEFAULT \'\'')));
	$command['limit'] = '0'.','.intval(table_valeur($Pile["vars"], (string)'articles_max_affiches', null));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_articles_pas_de_rub',204,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
            <li class="menu-entree item' .
(($t1 = strval(menus_exposer($Pile[$SP]['id_article'],'article',interdire_scripts(table_valeur(@$Pile[0], (string)'env', null)))))!=='' ?
		(' ' . $t1) :
		'') .
'">
               <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'" title="' .
interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
            </li>
         ');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_afficher_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (((table_valeur($Pile["vars"], (string)'afficher', null) == 'oui')) ?' ' :'');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_afficher_pas_de_rub';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_afficher_pas_de_rub',203,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:tous_les_articles');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
         ' .
(($t1 = BOUCLE_articles_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
         ' . $t1 . (	'
            ' .
		(((table_valeur($Pile["vars"], (string)'cpt', null) > table_valeur($Pile["vars"], (string)'articles_max_affiches', null)))  ?
				(' ' . (	'
               <li class="menu-entree item"><a class="suite" href="' .
			parametre_url(vider_url(urlencode_1738(generer_url_entite(@$Pile[0]['id_rubrique'], 'rubrique', '', '', true))),'connect','') .
			'">' .
			$l1 .
			'</a></li>')) :
				'') .
		'
         ')) :
		'') .
'
      ');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_articles_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'afficher_articles', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_articles_pas_de_rub';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_test_articles_pas_de_rub',191,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
      
      ' .
vide($Pile['vars'][(string)'cpt'] = '0') .
(($t1 = BOUCLE_cpt_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . vide($Pile['vars'][(string)'cpt'] = $Numrows['_cpt_pas_de_rub']['total'])) :
		'') .
'

      
      ' .
vide($Pile['vars'][(string)'afficher'] = 'non') .
((((((table_valeur($Pile["vars"], (string)'cpt', null) <= table_valeur($Pile["vars"], (string)'articles_max', null))) ?' ' :'')) AND (((((table_valeur($Pile["vars"], (string)'cpt', null) > '1')) OR ((((table_valeur($Pile["vars"], (string)'masquer_articles_uniques', null) == 'on')) ?'' :' '))) ?' ' :'')))  ?
		(' ' . (	' 		
         ' .
	vide($Pile['vars'][(string)'afficher'] = 'oui'))) :
		'') .
'
      ' .
BOUCLE_test_afficher_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
   ');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_appelhtml_9f53f344a154108fc5390902a96a4c3b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'appel_menu', null),true)) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_appel';
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
		array('plugins/auto/menus/menus/rubriques.html','html_9f53f344a154108fc5390902a96a4c3b','_appel',65,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
BOUCLE_rubriqueshtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

   
   ' .
BOUCLE_test_articles_pas_de_rubhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
   

');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/menus/menus/rubriques.html
// Temps de compilation total: 88.592 ms
//

function html_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][(string)'id_rubrique'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true) == 'courante') ? table_valeur(table_valeur(unserialize(@serialize($Pile[0])),'env'),'id_rubrique'):interdire_scripts(intval(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)))))) .
'

' .
vide($Pile['vars'][(string)'id_secteur_exclus'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'id_secteur_exclus', null),true) ? interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'id_secteur_exclus', null),true),',')):array()))) .
'
' .
vide($Pile['vars'][(string)'niveau_max_txt'] = interdire_scripts((intval(entites_html(table_valeur(@$Pile[0], (string)'niveau', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'niveau', null),true)):'infini'))) .
'
' .
vide($Pile['vars'][(string)'niveau_max'] = interdire_scripts((intval(entites_html(table_valeur(@$Pile[0], (string)'niveau', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'niveau', null),true)):'1000'))) .
'
' .
vide($Pile['vars'][(string)'sousrub_cond'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'sousrub_cond', null),true) == 'oui') ? 'on':''))) .
'
' .
vide($Pile['vars'][(string)'rubriques_max_affichees'] = interdire_scripts((intval(entites_html(table_valeur(@$Pile[0], (string)'rubriques_max_affichees', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'rubriques_max_affichees', null),true)):'10000'))) .
'
' .
vide($Pile['vars'][(string)'id_rubriques_exclues'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'id_rubriques_exclues', null),true) ? interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'id_rubriques_exclues', null),true),',')):array()))) .
'
' .
vide($Pile['vars'][(string)'classe_parent'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'classe_parent', null),true))) .
'

' .
vide($Pile['vars'][(string)'afficher_articles'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'afficher_articles', null),true) == 'oui') ? 'on':''))) .
'
' .
vide($Pile['vars'][(string)'masquer_articles_uniques'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'masquer_articles_uniques', null),true) == 'oui') ? 'on':''))) .
'
' .
vide($Pile['vars'][(string)'articles_max'] = interdire_scripts((intval(entites_html(table_valeur(@$Pile[0], (string)'articles_max', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'articles_max', null),true)):'10000'))) .
'
' .
vide($Pile['vars'][(string)'articles_max_plus_un'] = plus(table_valeur($Pile["vars"], (string)'articles_max', null),'1')) .
'
' .
vide($Pile['vars'][(string)'articles_max_affiches'] = interdire_scripts((intval(entites_html(table_valeur(@$Pile[0], (string)'articles_max_affiches', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'articles_max_affiches', null),true)):'10000'))) .
'


' .
vide($Pile['vars'][(string)'tri_num'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'tri_num', null),true)) OR (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_alpha', null),true)))) ?' ' :'') ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_num', null),true)):'titre'))) .
'
' .
vide($Pile['vars'][(string)'tri_alpha'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'tri_num', null),true)) OR (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_alpha', null),true)))) ?' ' :'') ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_alpha', null),true)):'titre'))) .
'
' .
vide($Pile['vars'][(string)'tri_num_inverse'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tri_num_inverse', null),true) == 'oui') ? '1':'0'))) .
'
' .
vide($Pile['vars'][(string)'tri_alpha_inverse'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tri_alpha_inverse', null),true) == 'oui') ? '1':'0'))) .
'


' .
vide($Pile['vars'][(string)'tri_num_articles'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'tri_num_articles', null),true)) OR (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_alpha_articles', null),true)))) ?' ' :'') ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_num_articles', null),true)):'titre'))) .
'
' .
vide($Pile['vars'][(string)'tri_alpha_articles'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'tri_num_articles', null),true)) OR (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_alpha_articles', null),true)))) ?' ' :'') ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_alpha_articles', null),true)):'titre'))) .
'
' .
vide($Pile['vars'][(string)'tri_num_articles_inverse'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tri_num_articles_inverse', null),true) == 'oui') ? '1':'0'))) .
'
' .
vide($Pile['vars'][(string)'tri_alpha_articles_inverse'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tri_alpha_articles_inverse', null),true) == 'oui') ? '1':'0'))) .
'

' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'appel_formulaire', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][(string)'titre'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true) ? interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true) == 'courante') ? _T('menus:info_rubrique_courante'):interdire_scripts(generer_info_entite(table_valeur($Pile["vars"], (string)'id_rubrique', null), 'rubrique', 'titre')))):_T('public|spip|ecrire:info_racine_site')))) .
	'
	' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'secteurlangue', null),true)) ?'' :' '))))!=='' ?
			($t2 . (	'<div class="titre">' .
		table_valeur($Pile["vars"], (string)'titre', null) .
		'</div>')) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'secteurlangue', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'<div class="titre">' .
		_T('menus:nom_menu_secteurlangue') .
		'</div>')) :
			'') .
	'
	<div class="infos">
		' .
	(!((table_valeur($Pile["vars"], (string)'niveau_max_txt', null) == 'infini'))  ?
			(' ' . (	'
			' .
		_T('menus:entree_sur_n_niveaux', array('n' => table_valeur($Pile["vars"], (string)'niveau_max_txt', null))) .
		'
		')) :
			'') .
	'
		' .
	(((table_valeur($Pile["vars"], (string)'niveau_max_txt', null) == 'infini'))  ?
			(' ' . (	'
			' .
		_T('menus:entree_infini') .
		'
		')) :
			'') .
	'
		' .
	((table_valeur($Pile["vars"], (string)'id_secteur_exclus', null))  ?
			(' ' . (	'
			' .
		_T('menus:info_secteur_exclus', array('id_secteur' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_secteur_exclus', null),true)))) .
		'
		')) :
			'') .
	'
		' .
	((table_valeur($Pile["vars"], (string)'id_rubriques_exclues', null))  ?
			(' ' . (	'
			' .
		_T('menus:info_rubriques_exclues', array('id_rubriques' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubriques_exclues', null),true)))) .
		'
		')) :
			'') .
	'
		' .
	((table_valeur($Pile["vars"], (string)'sousrub_cond', null))  ?
			(' ' . (	'
			<br />' .
		_T('menus:info_sousrub_cond') .
		'
		')) :
			'') .
	'
		' .
	(((table_valeur($Pile["vars"], (string)'rubriques_max_affichees', null) < '10000'))  ?
			(' ' . (	' / ' .
		_T('menus:info_rubriques_max_affichees', array('max' => table_valeur($Pile["vars"], (string)'rubriques_max_affichees', null))))) :
			'') .
	'
		<br />' .
	_T('menus:info_tri') .
	' ' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'tri_num', null)))!=='' ?
			($t2 . (	' ' .
		(((table_valeur($Pile["vars"], (string)'tri_num_inverse', null) == '1'))  ?
				(' ' . ' inverse') :
				'') .
		' ' .
		_T('menus:info_tri_num'))) :
			'') .
	(((table_valeur($Pile["vars"], (string)'tri_num', null)) AND ('GET{tri_alpha}'))  ?
			(' ' . ', ') :
			'') .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'tri_alpha', null)))!=='' ?
			($t2 . (	' ' .
		(((table_valeur($Pile["vars"], (string)'tri_alpha_inverse', null) == '1'))  ?
				(' ' . ' inverse') :
				'') .
		' ' .
		_T('menus:info_tri_alpha'))) :
			'') .
	'
		' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'classe_parent', null)))!=='' ?
			((	'<br />' .
		_T('menus:info_classe_parent')) . $t2) :
			'') .
	'

		' .
	((table_valeur($Pile["vars"], (string)'afficher_articles', null))  ?
			(' ' . (	'
			<br />' .
		_T('menus:info_afficher_articles') .
		'
			' .
		(((table_valeur($Pile["vars"], (string)'articles_max', null) < '10000'))  ?
				(' ' . (	' / ' .
			_T('menus:info_articles_max', array('max' => table_valeur($Pile["vars"], (string)'articles_max', null))))) :
				'') .
		'
			' .
		(((table_valeur($Pile["vars"], (string)'articles_max_affiches', null) < '10000'))  ?
				(' ' . (	' / ' .
			_T('menus:info_articles_max_affiches', array('max' => table_valeur($Pile["vars"], (string)'articles_max_affiches', null))))) :
				'') .
		'
			' .
		((table_valeur($Pile["vars"], (string)'masquer_articles_uniques', null))  ?
				(' ' . (	' / ' .
			_T('menus:info_masquer_articles_uniques'))) :
				'') .
		'
		')) :
			'') .
	'
		<br />' .
	_T('menus:info_tri_articles') .
	' ' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'tri_num_articles', null)))!=='' ?
			($t2 . (	' ' .
		(((table_valeur($Pile["vars"], (string)'tri_num__articles_inverse', null) == '1'))  ?
				(' ' . ' inverse') :
				'') .
		' ' .
		_T('menus:info_tri_num'))) :
			'') .
	(((table_valeur($Pile["vars"], (string)'tri_num_articles', null)) AND ('GET{tri_alpha_articles}'))  ?
			(' ' . ', ') :
			'') .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'tri_alpha_articles', null)))!=='' ?
			($t2 . (	' ' .
		(((table_valeur($Pile["vars"], (string)'tri_alpha_articles_inverse', null) == '1'))  ?
				(' ' . ' inverse') :
				'') .
		' ' .
		_T('menus:info_tri_alpha'))) :
			'') .
	'
	</div>
')) :
		'') .
'
' .
BOUCLE_appelhtml_9f53f344a154108fc5390902a96a4c3b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_9f53f344a154108fc5390902a96a4c3b', $Cache, $page, 'plugins/auto/menus/menus/rubriques.html');
}
?>