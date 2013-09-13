<?php

/*
 * Squelette : ../prive/formulaires/inc-instituer_auteur.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 11:51:45 GMT
 * Boucles :   _statuts, _restreint
 */ 

function BOUCLE_statutshtml_f5b1c852820c9e25ca6e19addb05b72b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(auteurs_lister_statuts('tous','0'));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_statuts';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'valeur', "'nouveau'")));
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
		array('../prive/formulaires/inc-instituer_auteur.html','html_f5b1c852820c9e25ca6e19addb05b72b','_statuts',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<option value="' .
interdire_scripts($Pile[$SP]['valeur']) .
'"' .
(($t1 = strval(interdire_scripts((((@$Pile[0]['statut'] == interdire_scripts($Pile[$SP]['valeur']))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == '5poubelle')) ?' ' :''))))!=='' ?
		('&gt;' . $t1) :
		'') .
interdire_scripts(traduire_statut_auteur($Pile[$SP]['valeur'])) .
'</option>
');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_restreinthtml_f5b1c852820c9e25ca6e19addb05b72b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(in_array(entites_html(table_valeur(@$Pile[0], (string)'statut', null),true),table_valeur($Pile["vars"], (string)'statuts_auteurs', null)));

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
			array('=', 'L1.id_auteur', sql_quote(@$Pile[0]['id_auteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('REGEXP', 'rubriques.statut', "'.*'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/formulaires/inc-instituer_auteur.html','html_f5b1c852820c9e25ca6e19addb05b72b','_restreint',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li class="rubrique"><input type=\'checkbox\' class="checkbox" name=\'restreintes[]\' checked="checked" value=\'' .
$Pile[$SP]['id_rubrique'] .
'\' />
						<label><a href="' .
generer_url_entite($Pile[$SP]['id_rubrique'],'rubrique') .
'" target="_blank">' .
interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
'</a></label>
						' .
(($t1 = strval(interdire_scripts(filtre_balise_img_dist(chemin_image('supprimer-12.png')))))!=='' ?
		('<a href="#" onclick="jQuery(this).parent().remove();return false;" class="removelink">' . $t1 . '</a>') :
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
// Fonction principale du squelette ../prive/formulaires/inc-instituer_auteur.html
// Temps de compilation total: 15.703 ms
//

function html_f5b1c852820c9e25ca6e19addb05b72b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'statuts_auteurs'] = filtre_explode_dist(constant('_STATUT_AUTEUR_RUBRIQUE'),',')) .
'<label for="statut">' .
_T('public|spip|ecrire:info_statut_auteur') .
'</label>
<select name="statut"
				id="statut"
				onchange="update_saisie_statut_auteur(this,this.options[this.selectedIndex].value);"
				>
' .
BOUCLE_statutshtml_f5b1c852820c9e25ca6e19addb05b72b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	' .
(($t1 = strval(interdire_scripts((@$Pile[0]['statut'] == 'nouveau'))))!=='' ?
		($t1 . (	'
	<option value="' .
	interdire_scripts(@$Pile[0]['statut']) .
	'" selected="selected">' .
	interdire_scripts(traduire_statut_auteur(@$Pile[0]['statut'])) .
	'</option>
	')) :
		'') .
'
</select>
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'auteur', invalideur_session($Cache, @$Pile[0]['id_auteur']), '', invalideur_session($Cache, array('webmestre' => '?')))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="choix choix-webmestre' .
	(($t2 = strval(interdire_scripts((((@$Pile[0]['statut'] == '0minirezo')) ?'' :' '))))!=='' ?
			($t2 . 'none-js') :
			'') .
	'">
		<input type="checkbox" name="webmestre" id="webmestre" value="oui"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'webmestre', null),true) == 'oui')) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	'/>
		<label for="webmestre">' .
	_T('public|spip|ecrire:info_admin_statuer_webmestre') .
	'</label>
		<input type=\'hidden\' name=\'saisie_webmestre\' value=\'1\' />
	</div>
')) :
		'') .
'
<div class="rubriques_restreintes' .
(($t1 = strval(interdire_scripts(((in_array(@$Pile[0]['statut'],table_valeur($Pile["vars"], (string)'statuts_auteurs', null))) ?'' :' '))))!=='' ?
		($t1 . 'none-js') :
		'') .
'">
	' .
vide($Pile['vars'][(string)'label'] = _T('public|spip|ecrire:info_restreindre_rubrique')) .
'
	' .
(($t1 = BOUCLE_restreinthtml_f5b1c852820c9e25ca6e19addb05b72b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<p>' .
		_T('public|spip|ecrire:info_admin_gere_rubriques') .
		'</p>
			<ul id=\'liste_rubriques_restreintes\' class="item_picked">
				') . $t1 . (	'
			</ul>
			<input type=\'hidden\' name=\'restreintes[]\' value=\'0\' />
		' .
		vide($Pile['vars'][(string)'label'] = _T('public|spip|ecrire:info_ajouter_rubrique')) .
		'
	')) :
		((	'
		' .
	(($t2 = strval(interdire_scripts((((@$Pile[0]['statut'] == '0minirezo')) ?' ' :''))))!=='' ?
			($t2 . (	'
			<p>' .
		_T('public|spip|ecrire:info_admin_gere_toutes_rubriques') .
		'</p>
		')) :
			'') .
	'
			<ul id=\'liste_rubriques_restreintes\' class="item_picked"></ul>
	'))) .
'
	<div class="nettoyeur"></div>
	<div class="instituer_auteur choix">
		' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'auteur', invalideur_session($Cache, @$Pile[0]['id_auteur']), '', invalideur_session($Cache, array('restreintes' => '1')))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	choisir_rubriques_admin_restreint(@$Pile[0]['id_auteur'],table_valeur($Pile["vars"], (string)'label', null),'#liste_rubriques_restreintes',interdire_scripts(filtre_balise_img_dist(chemin_image('supprimer-12.png')))) .
	'
		')) :
		'') .
'
	</div>
</div>



<script type="text/javascript">/*<![CDATA[*/
function update_saisie_statut_auteur(node,value){
	var statut_auteur_rubrique="' .
filtre_implode_dist(table_valeur($Pile["vars"], (string)'statuts_auteurs', null),'|') .
'";
	var reg = new RegExp("^("+statut_auteur_rubrique+")$");
	if (value.match(reg))
		jQuery(node).siblings(\'.rubriques_restreintes:hidden\').slideDown();
	else
		jQuery(node).siblings(\'.rubriques_restreintes:visible\').slideUp();

	if (value==\'0minirezo\')
		jQuery(node).next(\'.choix-webmestre:hidden\').slideDown();
	else
		jQuery(node).next(\'.choix-webmestre:visible\').slideUp();
}
/*]]>*/</script>');

	return analyse_resultat_skel('html_f5b1c852820c9e25ca6e19addb05b72b', $Cache, $page, '../prive/formulaires/inc-instituer_auteur.html');
}
?>