<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/head/rubrique.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Wed, 01 May 2013 21:35:30 GMT
 * Boucles :   _rubrique_head
 */ 

function BOUCLE_rubrique_headhtml_d4bb4bd01368f8713d2bb20d949fe2c7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubrique_head';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.texte",
		"rubriques.descriptif",
		"rubriques.id_rubrique",
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
		array('plugins/auto/z/v1.7.21/head/rubrique.html','html_d4bb4bd01368f8713d2bb20d949fe2c7','_rubrique_head',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<title>' .
(($t1 = strval(interdire_scripts(textebrut(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))))!=='' ?
		($t1 . ' - ') :
		'') .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(filtre_introduction($Pile[$SP]['descriptif'], $Pile[$SP]['texte'], intval('150'), $connect)))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))))))!=='' ?
		('<link rel="canonical" href="' . $t1 . '" />') :
		'') .
'

<link rel="alternate" type="application/rss+xml" title="' .
_T('public|spip|ecrire:syndiquer_rubrique') .
'" href="' .
interdire_scripts(parametre_url(generer_url_public('backend', ''),'id_rubrique',$Pile[$SP]['id_rubrique'])) .
'" />
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/z/v1.7.21/head/rubrique.html
// Temps de compilation total: 4.097 ms
//

function html_d4bb4bd01368f8713d2bb20d949fe2c7($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_rubrique_headhtml_d4bb4bd01368f8713d2bb20d949fe2c7($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_d4bb4bd01368f8713d2bb20d949fe2c7', $Cache, $page, 'plugins/auto/z/v1.7.21/head/rubrique.html');
}
?>