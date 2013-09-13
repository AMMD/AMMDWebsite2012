<?php

/*
 * Squelette : squelettes/inclure/contribs.html
 * Date :      Wed, 01 May 2013 21:34:53 GMT
 * Compile :   Wed, 01 May 2013 21:35:30 GMT
 * Boucles :   _jauge, _contributions, _contributions_orig, _contributions_orig2, _contributors, _contribs, _contribsrub
 */ 

function BOUCLE_jaugehtml_0e1482b2133ff0e5fd51b40860278a44(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires_reponses_champs';
		$command['id'] = '_jauge';
		$command['from'] = array('formulaires_reponses_champs' => 'spip_formulaires_reponses_champs','L1' => 'spip_formulaires_transactions');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires_reponses_champs.valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'L1.statut_transaction', "1"), 
			array('=', 'formulaires_reponses_champs.nom', "'montant_1'"));
		$command['join'] = array('L1' => array('formulaires_reponses_champs','id_formulaires_reponse'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_jauge',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_jauge']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= vide($Pile['vars'][(string)'gauge_value'] = plus(table_valeur($Pile["vars"], (string)'gauge_value', null),interdire_scripts($Pile[$SP]['valeur'])));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_contributionshtml_0e1482b2133ff0e5fd51b40860278a44(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires_reponses_champs';
		$command['id'] = '_contributions';
		$command['from'] = array('formulaires_reponses_champs' => 'spip_formulaires_reponses_champs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires_reponses_champs.valeur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'formulaires_reponses_champs.id_formulaires_reponse', sql_quote($Pile[$SP]['id_formulaires_reponse'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'formulaires_reponses_champs.nom', "'montant_1'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_contributions',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<dd class="montant_contribution">' .
interdire_scripts($Pile[$SP]['valeur']) .
' &euro;</dd>
      ');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_contributions_orightml_0e1482b2133ff0e5fd51b40860278a44(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires_reponses_champs';
		$command['id'] = '_contributions_orig';
		$command['from'] = array('formulaires_reponses_champs' => 'spip_formulaires_reponses_champs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires_reponses_champs.valeur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'formulaires_reponses_champs.id_formulaires_reponse', sql_quote($Pile[$SP]['id_formulaires_reponse'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'formulaires_reponses_champs.nom', "'input_4'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_contributions_orig',32,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<dd class="origine_contribution">(' .
interdire_scripts($Pile[$SP]['valeur']) .
'
      ');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_contributions_orig2html_0e1482b2133ff0e5fd51b40860278a44(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires_reponses_champs';
		$command['id'] = '_contributions_orig2';
		$command['from'] = array('formulaires_reponses_champs' => 'spip_formulaires_reponses_champs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires_reponses_champs.valeur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'formulaires_reponses_champs.id_formulaires_reponse', sql_quote($Pile[$SP]['id_formulaires_reponse'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'formulaires_reponses_champs.nom', "'input_5'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_contributions_orig2',36,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	 - ' .
interdire_scripts($Pile[$SP]['valeur']) .
')</dd>
      ');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_contributorshtml_0e1482b2133ff0e5fd51b40860278a44(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires_reponses_champs';
		$command['id'] = '_contributors';
		$command['from'] = array('formulaires_reponses_champs' => 'spip_formulaires_reponses_champs','L1' => 'spip_formulaires_transactions');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires_reponses_champs.id_formulaires_reponse",
		"formulaires_reponses_champs.valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'L1.statut_transaction', "1"), 
			array('=', 'formulaires_reponses_champs.nom', "'input_7'"));
		$command['join'] = array('L1' => array('formulaires_reponses_champs','id_formulaires_reponse'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_contributors',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
      <dt>' .
interdire_scripts($Pile[$SP]['valeur']) .
'</dt>
      ' .
BOUCLE_contributionshtml_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons, $Numrows, $SP) .
'
      ' .
BOUCLE_contributions_orightml_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons, $Numrows, $SP) .
'
      ' .
BOUCLE_contributions_orig2html_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons, $Numrows, $SP) .
'
    ');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_contribshtml_0e1482b2133ff0e5fd51b40860278a44(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_contribs';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+articles.titre AS num",
		"articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array('num', 'articles.titre');
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
		array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_contribs',65,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				  <div class="donations">
				<dt class="donation">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</dt>
				<dd>' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'</dd>
				</div>
				');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_contribsrubhtml_0e1482b2133ff0e5fd51b40860278a44(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_contribsrub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
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
			array('=', 'rubriques.id_parent', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('REGEXP', 'rubriques.titre', "'.*Counterparts.*'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_contribsrub',46,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	<h2>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h2>
	<div class="padd-interior">
		<div class="padd-interior-wrapper">	
			<dl class="dons">

				' .
BOUCLE_contribshtml_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons, $Numrows, $SP) .
'

			</dl>
		</div>
	</div>
	<a id="formulaire"></a>
	' .
executer_balise_dynamique('FORMULAIRE_FORMIDABLE',
	array('crowd'),
	array('squelettes/inclure/contribs.html','html_0e1482b2133ff0e5fd51b40860278a44','_contribsrub',76,$GLOBALS['spip_lang'])));
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/contribs.html
// Temps de compilation total: 21.143 ms
//

function html_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars'][(string)'gauge_value'] = '0') .
'
' .
(($t1 = BOUCLE_jaugehtml_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	vide($Pile['vars'][(string)'contributors_number'] = $Numrows['_jauge']['total']) .
	'
'))) .
'
' .
vide($Pile['vars'][(string)'gauge_ratio'] = mult(div(table_valeur($Pile["vars"], (string)'gauge_value', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'gauge_max', null),true))),'100')) .
'
  <div style="width: 100%; border: 1px solid #CCC; height: 30px;
  border-radius: 4px; box-shadow: 2px 2px 2px #333; background-color:
  #ECECEC">
    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'gauge_ratio', null)))!=='' ?
		('<div style="width: ' . $t1 . '%; height: 20px;
    margin-top: 5px; margin-left: 2px;
    background-color: red"></div>') :
		'') .
'
    <h2 style="font-size: 1.4em;text-align:
    center; margin-top: -35px">' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'gauge_value', null)))!=='' ?
		($t1 . ' &euro;') :
		'') .
' / ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'gauge_max', null),true)) .
'&euro; :
    ' .
(($t1 = strval(couper(table_valeur($Pile["vars"], (string)'gauge_ratio', null),'5')))!=='' ?
		($t1 . ' %') :
		'') .
'</h2>
  </div>
' .
(($t1 = BOUCLE_contributorshtml_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'

<div id="contributors">
<h5>&rarr; <em>' .
		table_valeur($Pile["vars"], (string)'contributors_number', null) .
		'</em>&nbsp; ' .
		_T('public|spip|ecrire:contributors') .
		'</h5>
  <dl class="contributions">
    ') . $t1 . '
  </dl>
</div>
') :
		'') .
'
' .
(($t1 = BOUCLE_contribsrubhtml_0e1482b2133ff0e5fd51b40860278a44($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<script src="squelettes/javascripts/jquery.scrollTo-min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready( function(){
$(\'.donations\').click( function(){
$(\'.dons\').children().removeClass(\'clicked\');
$(this).addClass(\'clicked\');
$(\'input#champ_montant_1\').val($(this).children("dt.donation").html().split(" ")[0]);
$(\'body\').scrollTo($(\'a#formulaire\'), 500, {offset: 0});
});
})
</script>
<div class="padd-box padd-box-popular-posts">
  ' . $t1 . '
</div>

') :
		'') .
'
');

	return analyse_resultat_skel('html_0e1482b2133ff0e5fd51b40860278a44', $Cache, $page, 'squelettes/inclure/contribs.html');
}
?>