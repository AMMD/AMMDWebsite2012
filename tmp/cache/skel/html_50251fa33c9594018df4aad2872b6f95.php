<?php

/*
 * Squelette : ../plugins/auto/menus/formulaires/editer_menu.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/menus/formulaires/editer_menu.html
// Temps de compilation total: 8.983 ms
//

function html_50251fa33c9594018df4aad2872b6f95($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer ' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true))))!=='' ?
		('formulaire_' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true))))!=='' ?
		(' formulaire_' . $t1 . (	'-' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_menu', null), 'nouveau'),true)))) :
		'') .
'">
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
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
	'\' enctype=\'multipart/form-data\'><div>
			
			' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><ul>
				<li class="fieldset">
					<fieldset>
						<h3 class="legend">' .
	_T('menus:formulaire_partie_identification') .
	'</h3>
						<ul>
							' .
	vide($Pile['vars'][(string)'obli'] = 'obligatoire') .
	vide($Pile['vars'][(string)'name'] = 'titre') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
								<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('menus:formulaire_titre') .
	'</label>
								' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
								<input type="text" class="text multilang" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" size="40" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
	'" />
							</li>

							' .
	vide($Pile['vars'][(string)'name'] = 'identifiant') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
								<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('menus:formulaire_identifiant') .
	'</label>
								<div class="explication">' .
	_T('menus:formulaire_identifiant_explication') .
	'</div>
								' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
								<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" size="40" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
	'" />
							</li>

							' .
	vide($Pile['vars'][(string)'name'] = 'css') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
								<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('menus:formulaire_css') .
	'</label>
								<div class="explication">' .
	_T('menus:formulaire_css_explication') .
	'</div>
								' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
								<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" size="40" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
	'" />
							</li>

							
							' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nouveau', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
							' .
		(($t3 = strval(interdire_scripts(((filtre_info_plugin_dist("yaml", "est_actif")) ?' ' :''))))!=='' ?
				($t3 . (	'
							' .
			vide($Pile['vars'][(string)'name'] = 'import') .
			vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
			'<li class="editer_' .
			table_valeur($Pile["vars"], (string)'name', null) .
			((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
					(' ' . ' ' . 'erreur') :
					'') .
			'">
								<label for="' .
			table_valeur($Pile["vars"], (string)'name', null) .
			'">' .
			_T('menus:formulaire_importer') .
			'</label>
								<div class="explication">' .
			_T('menus:formulaire_importer_explication') .
			'</div>
								' .
			(($t4 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
					('<span class=\'erreur_message\'>' . $t4 . '</span>') :
					'') .
			'
								<input type="file" class="file" name="' .
			table_valeur($Pile["vars"], (string)'name', null) .
			'" id="' .
			table_valeur($Pile["vars"], (string)'name', null) .
			'" size="20" value="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
			'" />
							</li>
							')) :
				'') .
		'
							')) :
			'') .
	'
						</ul>

						<p class=\'boutons\'>
							<input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' />
						</p>
					</fieldset>
				</li>
			</ul>
		</div></form>
		')) :
		'') .
'
</div>
<script type="text/javascript">
	$(function(){
		$(\'.formulaire_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
'\'+\' .boutons\').hide();
		$(\'.formulaire_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
'\'+\' input\')
			.change(function(){$(\'.formulaire_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
'\'+\' .boutons\').slideDown();})
			.keydown(function(){$(\'.formulaire_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
'\'+\' .boutons\').slideDown();});
	});
</script>');

	return analyse_resultat_skel('html_50251fa33c9594018df4aad2872b6f95', $Cache, $page, '../plugins/auto/menus/formulaires/editer_menu.html');
}
?>