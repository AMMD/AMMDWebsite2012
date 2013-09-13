<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire.html
 * Date :      Tue, 11 Sep 2012 22:00:14 GMT
 * Compile :   Wed, 01 May 2013 13:01:52 GMT
 * Boucles :   _resultats, _formulaire
 */ 

function BOUCLE_resultatshtml_07026036f39fc6cf18fdc459136bbab1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires_reponses';
		$command['id'] = '_resultats';
		$command['from'] = array('formulaires_reponses' => 'spip_formulaires_reponses');
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
quete_condition_statut('formulaires_reponses.statut','publie,prop','publie',''), 
			array('=', 'formulaires_reponses.id_formulaire', sql_quote($Pile[$SP]['id_formulaire'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire.html','html_07026036f39fc6cf18fdc459136bbab1','_resultats',27,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_resultats']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
', $Numrows['_resultats']['total']);
	$iter->free();
	}
	return $t0;
}


function BOUCLE_formulairehtml_07026036f39fc6cf18fdc459136bbab1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires.id_formulaire");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'formulaires.id_formulaire', sql_quote(@$Pile[0]['id_formulaire'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire.html','html_07026036f39fc6cf18fdc459136bbab1','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('formidable:editer_menu_formulaire');
	$l2 = _T('formidable:editer_menu_champs');
	$l3 = _T('formidable:editer_menu_traitements');
	$l4 = _T('formidable:voir_reponses');
	$l5 = _T('formidable:reponses_analyse');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
boite_ouvrir('', 'info') .
pipeline( 'boite_infos' , array('data' => '', 'args' => array('type' => 'formulaire', 'id' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_formulaire', null),true)))) ) .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire', invalideur_session($Cache, $Pile[$SP]['id_formulaire']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'

' .
	filtre_icone_horizontale_dist(parametre_url(parametre_url(parametre_url(generer_url_ecrire('formulaire_edit'),'id_formulaire',$Pile[$SP]['id_formulaire']),'configurer','formulaire'),'avertissement',''),$l1,'formulaire','formulaire-editer-24','center') .
	'

' .
	filtre_icone_horizontale_dist(parametre_url(parametre_url(parametre_url(generer_url_ecrire('formulaire_edit'),'id_formulaire',$Pile[$SP]['id_formulaire']),'configurer','champs'),'avertissement',''),$l2,'formulaire','formulaire-config-champs-24','center') .
	'

' .
	filtre_icone_horizontale_dist(parametre_url(parametre_url(parametre_url(generer_url_ecrire('formulaire_edit'),'id_formulaire',$Pile[$SP]['id_formulaire']),'configurer','traitements'),'avertissement',''),$l3,'formulaire','formulaire-config-traitements-24','center') .
	'

')) :
		'') .
'

' .
(($t1 = BOUCLE_resultatshtml_07026036f39fc6cf18fdc459136bbab1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'

<div class=\'navigation_resultats\'>
' .
		filtre_icone_horizontale_dist(parametre_url(generer_url_ecrire('formulaires_reponses'),'id_formulaire',$Pile[$SP]['id_formulaire']),(	$l4 .
			' &#40;' .
			$Numrows['_resultats']['total'] .
			'&#41;'),'formulaire','formulaire-reponses-24','center') .
		'
' .
		filtre_icone_horizontale_dist(parametre_url(generer_url_ecrire('formulaires_analyse'),'id_formulaire',$Pile[$SP]['id_formulaire']),$l5,'formulaire','formulaire-analyse-24','center') .
		'
</div>

')) :
		'') .
'

' .
boite_fermer() .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire.html
// Temps de compilation total: 6.750 ms
//

function html_07026036f39fc6cf18fdc459136bbab1($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_formulairehtml_07026036f39fc6cf18fdc459136bbab1($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_07026036f39fc6cf18fdc459136bbab1', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/navigation/formulaire.html');
}
?>