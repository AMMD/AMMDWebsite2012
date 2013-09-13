<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html
 * Date :      Fri, 25 Mar 2011 12:00:14 GMT
 * Compile :   Wed, 01 May 2013 21:35:31 GMT
 * Boucles :   _mots, _breves, _syndic, _sites, _extra_rubrique
 */ 

function BOUCLE_motshtml_1f06cfe5ce73d94a9e8d7b44e12f029b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"mots.id_mot");
		$command['orderby'] = array('mots.titre');
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html','html_1f06cfe5ce73d94a9e8d7b44e12f029b','_mots',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li><span class="padd-wrap"><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_mot'], 'mot', '', '', true))) .
'" rel="tag">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></span></li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_breveshtml_1f06cfe5ce73d94a9e8d7b44e12f029b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("breves.date_heure",
		"breves.date_heure AS date",
		"breves.id_breve",
		"breves.titre",
		"breves.lang");
		$command['orderby'] = array('breves.date_heure DESC');
		$command['join'] = array();
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('breves.statut','publie,prop','publie',''), 
			array('=', 'breves.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html','html_1f06cfe5ce73d94a9e8d7b44e12f029b','_breves',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li><span class="padd-wrap">' .
(($t1 = strval(interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		($t1 . ' &ndash; ') :
		'') .
'<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_breve'], 'breve', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></span></li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_syndichtml_1f06cfe5ce73d94a9e8d7b44e12f029b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_syndic';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic_articles.date",
		"syndic_articles.url",
		"syndic_articles.titre");
		$command['orderby'] = array('syndic_articles.date DESC');
		$command['join'] = array('L1' => array('syndic_articles','id_syndic'));
		$command['limit'] = '0,3';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('L1.statut','publie,prop','publie',''), 
quete_condition_statut('syndic_articles.statut','publie,prop','publie',''), 
			array('=', 'syndic_articles.id_syndic', sql_quote($Pile[$SP]['id_syndic'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('<', 'LEAST((UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(syndic_articles.date))/86400,
	TO_DAYS(NOW())-TO_DAYS(syndic_articles.date),
	DAYOFMONTH(NOW())-DAYOFMONTH(syndic_articles.date)+30.4368*(MONTH(NOW())-MONTH(syndic_articles.date))+365.2422*(YEAR(NOW())-YEAR(syndic_articles.date)))', "180"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html','html_1f06cfe5ce73d94a9e8d7b44e12f029b','_syndic',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
									<li><span class="padd-wrap"><a href="' .
vider_url($Pile[$SP]['url']) .
'" class="spip_out">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></span></li>
									');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_siteshtml_1f06cfe5ce73d94a9e8d7b44e12f029b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_sites';
		$command['from'] = array('syndic' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic.id_syndic",
		"syndic.date",
		"syndic.nom_site",
		"syndic.url_site");
		$command['orderby'] = array('syndic.nom_site');
		$command['join'] = array();
		$command['limit'] = '0,3';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('syndic.statut','publie,prop','publie',''), 
			array('=', 'syndic.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html','html_1f06cfe5ce73d94a9e8d7b44e12f029b','_sites',38,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li>
						<span class="surliste"><a href="' .
generer_url_entite($Pile[$SP]['id_syndic'],'site','','',($connect ? $connect : NULL)) .
'">' .
interdire_scripts(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) .
'</a></span>
							' .
(($t1 = BOUCLE_syndichtml_1f06cfe5ce73d94a9e8d7b44e12f029b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
							<ul>
									' . $t1 . '
							</ul>
							') :
		'') .
'
					</li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_extra_rubriquehtml_1f06cfe5ce73d94a9e8d7b44e12f029b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_extra_rubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
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
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html','html_1f06cfe5ce73d94a9e8d7b44e12f029b','_extra_rubrique',1,$GLOBALS['spip_lang'])
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
(($t1 = BOUCLE_motshtml_1f06cfe5ce73d94a9e8d7b44e12f029b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="padd-box padd-box-popular-posts">
		<h2>' .
		_T('public|spip|ecrire:mots_clefs') .
		'</h2>
		<div class="padd-interior">
			<div class="padd-interior-wrapper">	
				<ul>
					') . $t1 . '
				</ul>
			</div>
		</div>
	</div>
	') :
		'') .
'


	
	' .
(($t1 = BOUCLE_breveshtml_1f06cfe5ce73d94a9e8d7b44e12f029b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="padd-box padd-box-popular-posts">
		<h2>' .
		_T('public|spip|ecrire:breves') .
		'</h2>
		<div class="padd-interior">
			<div class="padd-interior-wrapper">	
				<ul>
					') . $t1 . '
				</ul>
			</div>
		</div>
	</div>
	') :
		'') .
'
	

	
	' .
(($t1 = BOUCLE_siteshtml_1f06cfe5ce73d94a9e8d7b44e12f029b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="padd-box padd-box-popular-posts">
		<h2>' .
		_T('public|spip|ecrire:sur_web') .
		'</h2>
		<div class="padd-interior">
			<div class="padd-interior-wrapper">	
				<ul>
					') . $t1 . '
				</ul>
			</div>
		</div>
	</div>
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
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html
// Temps de compilation total: 14.736 ms
//

function html_1f06cfe5ce73d94a9e8d7b44e12f029b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_extra_rubriquehtml_1f06cfe5ce73d94a9e8d7b44e12f029b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_1f06cfe5ce73d94a9e8d7b44e12f029b', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/extra/rubrique.html');
}
?>