<?php

/*
 * Squelette : ../prive/formulaires/instituer_objet.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:48:38 GMT
 * Boucles :   _choix
 */ 

function BOUCLE_choixhtml_ceb589c928c24acc30ed9f4b0a97f74f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_statuts', null),true)));
	$command['sourcemode'] = 'table';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_choix';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
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
		array('../prive/formulaires/instituer_objet.html','html_ceb589c928c24acc30ed9f4b0a97f74f','_choix',26,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
							<option value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'
								style="background-image:url(' .
interdire_scripts(extraire_attribut(filtre_puce_statut_dist($Pile[$SP]['cle'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true))),'src')) .
');">&nbsp;&nbsp;&nbsp;' .
interdire_scripts(_T($Pile[$SP]['valeur'])) .
'</option>
						');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/formulaires/instituer_objet.html
// Temps de compilation total: 11.018 ms
//

function html_ceb589c928c24acc30ed9f4b0a97f74f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="instituer_objet">
	' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'_publiable', null),true)) ?'' :' ')) AND (interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'statut', null),true) == 'prepa')) ?' ' :'')))) ?' ' :''))))!=='' ?
		($t1 . (	'
	<p class="small">' .
	_T('public|spip|ecrire:texte_proposer_publication') .
	'</p>
	')) :
		'') .
'
	<div class="formulaire_spip formulaire_editer formulaire_instituer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true)) .
'formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true)) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_id_objet', null),true)) .
'">
		' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
		<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
			
			' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div>')) :
		'') .
'
			' .
vide($Pile['vars'][(string)'name'] = 'statut') .
vide($Pile['vars'][(string)'obli'] = 'obligatoire') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<ul>
				<li class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
' statut_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
					<label for="formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true)) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_id_objet', null),true)) .
'-' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
interdire_scripts(_T(entites_html(table_valeur(@$Pile[0], (string)'_label', null),true))) .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_aide', null),true)) ?' ' :''))))!=='' ?
		($t1 . interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_aide', null),true)),'../prive/formulaires/instituer_objet.html', $Pile[0]):''))) :
		'') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
					<span class=\'erreur_message\'>' . $t1 . '</span>
					') :
		'') .
'<span class="show">
					' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
						<select class="select statut" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="formulaire_' .
	interdire_scripts(@$Pile[0]['form']) .
	'-' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true)) .
	'-' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_id_objet', null),true)) .
	'-' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">
						' .
	(($t2 = strval(interdire_scripts(((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'_statuts', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)))) ?'' :' '))))!=='' ?
			($t2 . (	'
							<option value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
		'">&nbsp;&nbsp;&nbsp;' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
		'</option>
						')) :
			'') .
	'
					')) :
		'') .
'
						' .
BOUCLE_choixhtml_ceb589c928c24acc30ed9f4b0a97f74f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . '
					</select>
					') :
		'') .
'
					' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'editable', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
						<span class="statut">' .
	interdire_scripts(filtre_puce_statut_dist(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true)))) .
	' ' .
	interdire_scripts(_T(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'_statuts', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))) .
	'</span>
					')) :
		'') .
'
				</span>
				</li>
			</ul>
			<!--extra-->
			' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
			<p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span>
				<input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\' /></p>
		</div></form>
		')) :
		'') .
'
	</div>
</div>
<script type="text/javascript">
	function update_select(statut_default){
		jQuery(this).attr(\'style\',jQuery(this.options[this.selectedIndex]).attr(\'style\')).closest(\'form\').find(\'.boutons\').css(\'visibility\',this.options[this.selectedIndex].value==statut_default?\'hidden\':\'visible\');
	}
	jQuery(function(){
		jQuery(".formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' .show select")
						.each(function(){update_select.apply(this,[\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
'\']);})
						.bind(\'change\',function(){update_select.apply(this,[\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
'\']);})
						.bind(\'keyup\',function(){update_select.apply(this,[\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
'\']);});
	});
</script>');

	return analyse_resultat_skel('html_ceb589c928c24acc30ed9f4b0a97f74f', $Cache, $page, '../prive/formulaires/instituer_objet.html');
}
?>