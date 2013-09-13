<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html
 * Date :      Fri, 12 Oct 2012 08:00:06 GMT
 * Compile :   Wed, 01 May 2013 13:02:03 GMT
 * Boucles :   _formulaire, _autoriser
 */ 

function BOUCLE_formulairehtml_0dac04e39565fec6471aeee8c719cbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires.id_formulaire",
		"formulaires.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'formulaires.id_formulaire', sql_quote(_request('id_formulaire'),'','bigint(21) NOT NULL AUTO_INCREMENT')));
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
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html','html_0dac04e39565fec6471aeee8c719cbf4','_formulaire',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:retour');
	$l2 = _T('formidable:editer_modifier_formulaire');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
filtre_icone_verticale_dist(parametre_url(generer_url_ecrire('formulaire'),'id_formulaire',$Pile[$SP]['id_formulaire']),$l1,'formulaire','formulaire-24','left') .
'

			<h4>' .
$l2 .
'</h4>
			<h1>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h1>
			
			' .
vide($Pile['vars'][(string)'configurer'] = interdire_scripts((in_array(entites_html(table_valeur(@$Pile[0], (string)'configurer', null),true),array('0' => 'formulaire', '1' => 'champs', '2' => 'traitements')) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'configurer', null),true)):'champs'))));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_autoriserhtml_0dac04e39565fec6471aeee8c719cbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire')?" ":""));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_autoriser';
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
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html','html_0dac04e39565fec6471aeee8c719cbf4','_autoriser',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:retour');
	$l2 = _T('formidable:editer_modifier_formulaire');
	$l3 = _T('formidable:editer_nouveau');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
boite_ouvrir('', 'info') .
'
<script type="text/javascript">/*<![CDATA[*/
if (window.jQuery){
function debloquer_prive(){ jQuery(\'input[required], textarea[required], select[required]\').removeAttr(\'required\'); }
jQuery(\'document\').ready(debloquer_prive);
onAjaxLoad(debloquer_prive);
}
/*]]>*/</script>
		' .
(($t1 = BOUCLE_formulairehtml_0dac04e39565fec6471aeee8c719cbf4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		' .
	filtre_icone_verticale_dist(generer_url_ecrire('formulaires'),$l1,'formulaire','formulaire-24','left') .
	'
			
			' .
	$l2 .
	'
			<h1>
				' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nouveau', null),true) == 'oui') ? $l3:_request('id_menu'))) .
	'
			</h1>
			
			' .
	vide($Pile['vars'][(string)'configurer'] = 'formulaire')))) .
'
	
	' .
(((table_valeur($Pile["vars"], (string)'configurer', null) == 'formulaire'))  ?
		(' ' . (	'
		' .
	executer_balise_dynamique('FORMULAIRE_EDITER_FORMULAIRE',
	array(((($a = _request('id_formulaire')) OR (is_string($a) AND strlen($a))) ? $a : '0'),((($a = _request('nouveau')) OR (is_string($a) AND strlen($a))) ? $a : '')),
	array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html','html_0dac04e39565fec6471aeee8c719cbf4','_autoriser',29,$GLOBALS['spip_lang'])))) :
		'') .
'
	' .
(((table_valeur($Pile["vars"], (string)'configurer', null) == 'champs'))  ?
		(' ' . (	'
		' .
	executer_balise_dynamique('FORMULAIRE_EDITER_FORMULAIRE_CHAMPS',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_formulaire', null),true))),
	array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html','html_0dac04e39565fec6471aeee8c719cbf4','_autoriser',30,$GLOBALS['spip_lang'])))) :
		'') .
'
	' .
(((table_valeur($Pile["vars"], (string)'configurer', null) == 'traitements'))  ?
		(' ' . (	'
		' .
	executer_balise_dynamique('FORMULAIRE_EDITER_FORMULAIRE_TRAITEMENTS',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_formulaire', null),true))),
	array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html','html_0dac04e39565fec6471aeee8c719cbf4','_autoriser',31,$GLOBALS['spip_lang'])))) :
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
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html
// Temps de compilation total: 8.629 ms
//

function html_0dac04e39565fec6471aeee8c719cbf4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_autoriserhtml_0dac04e39565fec6471aeee8c719cbf4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_0dac04e39565fec6471aeee8c719cbf4', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire_edit.html');
}
?>