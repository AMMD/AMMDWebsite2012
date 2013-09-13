<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire.html
 * Date :      Thu, 06 Sep 2012 16:01:00 GMT
 * Compile :   Wed, 01 May 2013 13:01:52 GMT
 * Boucles :   _exports, _formulaire
 */ 

function BOUCLE_exportshtml_bcfe4684c059e56fdbd4d5bb167430a0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur(echanges_formulaire_lister_disponibles(''),'exporter'));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_exports';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle");
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
		"DATA",
		$command,
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire.html','html_bcfe4684c059e56fdbd4d5bb167430a0','_exports',14,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('exporter_formulaire',(	invalideur_session($Cache, $Pile[$SP-1]['id_formulaire']) .
	'-' .
	interdire_scripts(invalideur_session($Cache, $Pile[$SP]['cle'])))),interdire_scripts(invalideur_session($Cache, $Pile[$SP]['cle'])),'formulaire','formulaire-exporter-24')) .
'
	');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_formulairehtml_bcfe4684c059e56fdbd4d5bb167430a0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire.html','html_bcfe4684c059e56fdbd4d5bb167430a0','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('formidable:titre_cadre_raccourcis');
	$l2 = _T('formidable:formulaires_dupliquer');
	$l3 = _T('formidable:formulaires_supprimer');
	$l4 = _T('formidable:voir_exporter');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<!--#extra-->
' .
boite_ouvrir($l1, 'simple', 'section') .
'
	' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('dupliquer_formulaire',invalideur_session($Cache, $Pile[$SP]['id_formulaire'])),$l2,'formulaire','formulaire-dupliquer-24')) .
	'
	')) :
		'') .
'
	' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire', invalideur_session($Cache, $Pile[$SP]['id_formulaire']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	invalideur_session($Cache, filtre_icone_horizontale_dist(inserer_attribut(generer_action_auteur('supprimer_formulaire',invalideur_session($Cache, $Pile[$SP]['id_formulaire'])),'onclick','return confirm("<:formidable:formulaires_supprimer_confirmation:>");'),$l3,'formulaire','formulaire-supprimer-24')) .
	'
	')) :
		'') .
'
' .
boite_fermer() .
'

' .
boite_ouvrir($l4, 'simple', 'section') .
'
	' .
BOUCLE_exportshtml_bcfe4684c059e56fdbd4d5bb167430a0($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
boite_fermer() .
'
<!--/#extra-->
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire.html
// Temps de compilation total: 4.894 ms
//

function html_bcfe4684c059e56fdbd4d5bb167430a0($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_formulairehtml_bcfe4684c059e56fdbd4d5bb167430a0($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_bcfe4684c059e56fdbd4d5bb167430a0', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/extra/formulaire.html');
}
?>