<?php

/*
 * Squelette : ../plugins/auto/menus/prive/squelettes/contenu/menus_editer.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:06 GMT
 * Boucles :   _menu
 */ 

function BOUCLE_menuhtml_8197bc07a0da9cde7c4c480f5e905dfe(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_menu';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'menus.id_menu', sql_quote(_request('id_menu'),'','bigint(21) NOT NULL AUTO_INCREMENT')));
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
		array('../plugins/auto/menus/prive/squelettes/contenu/menus_editer.html','html_8197bc07a0da9cde7c4c480f5e905dfe','_menu',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'
			');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/menus/prive/squelettes/contenu/menus_editer.html
// Temps de compilation total: 6.275 ms
//

function html_8197bc07a0da9cde7c4c480f5e905dfe($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="cadre-formulaire-editer">
	<div class="entete-formulaire">
		' .
filtre_icone_verticale_dist(generer_url_ecrire('menus_tous'),_T('public|spip|ecrire:retour'),'menus-24','','left') .
'
		' .
_T('menus:formulaire_modifier_menu') .
'
		<h1>
			' .
(($t1 = BOUCLE_menuhtml_8197bc07a0da9cde7c4c480f5e905dfe($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
			' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nouveau', null),true) == 'oui') ? _T('menus:formulaire_nouveau'):_request('id_menu'))) .
	'
			'))) .
'
		</h1>
	</div>
	' .
executer_balise_dynamique('FORMULAIRE_EDITER_MENU',
	array(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_menu', null), '0'),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nouveau', null), ''),true))),
	array('../plugins/auto/menus/prive/squelettes/contenu/menus_editer.html','html_8197bc07a0da9cde7c4c480f5e905dfe','',14,$GLOBALS['spip_lang'])) .
(($t1 = strval(interdire_scripts(((intval(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_menu', null), '0'),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
		<div class="ajax">' .
	executer_balise_dynamique('FORMULAIRE_EDITER_MENUS_ENTREE',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true))),
	array('../plugins/auto/menus/prive/squelettes/contenu/menus_editer.html','html_8197bc07a0da9cde7c4c480f5e905dfe','',16,$GLOBALS['spip_lang'])) .
	'</div>
	')) :
		'') .
'

</div>

' .
(($t1 = strval(interdire_scripts(((intval(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_menu', null), '0'),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(invalideur_session($Cache, filtre_icone_verticale_dist(generer_action_auteur('supprimer_menu',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true))),invalideur_session($Cache, generer_url_ecrire('menus_tous'))),_T('menus:formulaire_supprimer_menu'),'menus-24.png','del'))))!=='' ?
			('<div class="actions">
' . $t2 . '
</div>') :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_8197bc07a0da9cde7c4c480f5e905dfe', $Cache, $page, '../plugins/auto/menus/prive/squelettes/contenu/menus_editer.html');
}
?>