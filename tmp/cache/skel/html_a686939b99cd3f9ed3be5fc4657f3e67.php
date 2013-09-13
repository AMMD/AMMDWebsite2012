<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/inclure/rubriques.html
 * Date :      Fri, 25 Feb 2011 17:00:16 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   _re, _sous_rubriques, _rubriques
 */ 

function BOUCLE_rehtml_a686939b99cd3f9ed3be5fc4657f3e67(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_sous_rubriques']) ? $Numrows['_sous_rubriques'] : array());
	$t0 = (($t1 = BOUCLE_sous_rubriqueshtml_a686939b99cd3f9ed3be5fc4657f3e67($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
						<ul>
							' . $t1 . '
						</ul>
						') :
		'');
	$Numrows['_sous_rubriques'] = ($save_numrows);
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_a686939b99cd3f9ed3be5fc4657f3e67(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/rubriques.html','html_a686939b99cd3f9ed3be5fc4657f3e67','_sous_rubriques',16,$GLOBALS['spip_lang'])
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
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'>' .
interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) .
'</a></span>
									' .
BOUCLE_rehtml_a686939b99cd3f9ed3be5fc4657f3e67($Cache, $Pile, $doublons, $Numrows, $SP) .
'
								</li>
							');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_rubriqueshtml_a686939b99cd3f9ed3be5fc4657f3e67(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', 0));
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
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/rubriques.html','html_a686939b99cd3f9ed3be5fc4657f3e67','_rubriques',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<li>
					<span class="surliste"><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'>' .
interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) .
'</a></span>
						' .
(($t1 = BOUCLE_sous_rubriqueshtml_a686939b99cd3f9ed3be5fc4657f3e67($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
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
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/inclure/rubriques.html
// Temps de compilation total: 4.300 ms
//

function html_a686939b99cd3f9ed3be5fc4657f3e67($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_rubriqueshtml_a686939b99cd3f9ed3be5fc4657f3e67($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'

<div class="padd-box padd-box-popular-posts">
	<h2>' .
		_T('public|spip|ecrire:rubriques') .
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

	return analyse_resultat_skel('html_a686939b99cd3f9ed3be5fc4657f3e67', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/inclure/rubriques.html');
}
?>