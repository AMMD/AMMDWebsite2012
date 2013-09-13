<?php

/*
 * Squelette : ../prive/formulaires/configurer_multilinguisme.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 11:04:52 GMT
 * Boucles :   _objets
 */ 

function BOUCLE_objetshtml_d9f6a6ca3de36abf5e61f694257e7e53(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(lister_tables_objets_sql(''));
	$command['sourcemode'] = 'table';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'cle', "'spip_rubriques'")), 
			array('NOT', 
			array('=', 'cle', "'spip_auteurs'")));
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
		array('../prive/formulaires/configurer_multilinguisme.html','html_d9f6a6ca3de36abf5e61f694257e7e53','_objets',53,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts((((table_supporte_lang($Pile[$SP]['cle'])) AND (interdire_scripts(objet_info(table_valeur($Pile[$SP]['valeur'], 'type'),'editable')))) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	vide($Pile['vars'][(string)'val'] = interdire_scripts($Pile[$SP]['cle'])) .
	'<li class="fieldset">
				<fieldset>
					' .
	vide($Pile['vars'][(string)'objets'] = interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'texte_objets')))) .
	'<ul>
						' .
	vide($Pile['vars'][(string)'name'] = 'multi_objets') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							<label>' .
	table_valeur($Pile["vars"], (string)'objets', null) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<div class="choix">
								<input type="checkbox" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'&#91;&#93;" id="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui" value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"
								' .
	((in_any(table_valeur($Pile["vars"], (string)'val', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))  ?
			(' ' . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui">' .
	_T('public|spip|ecrire:info_multi_objets', array('objets' => table_valeur($Pile["vars"], (string)'objets', null))) .
	'</label>
							</div>
						</li>
						' .
	(($t2 = strval(interdire_scripts(((table_supporte_trad($Pile[$SP]['cle'])) ?' ' :''))))!=='' ?
			($t2 . (	'
						' .
		vide($Pile['vars'][(string)'name'] = 'gerer_trad_objets') .
		vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		'<li class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<div class="choix">
								<input type="checkbox" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'&#91;&#93;" id="' .
		table_valeur($Pile["vars"], (string)'val', null) .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui" value="' .
		table_valeur($Pile["vars"], (string)'val', null) .
		'"
								' .
		((in_any(table_valeur($Pile["vars"], (string)'val', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))  ?
				(' ' . 'checked="checked"') :
				'') .
		' /><label for="' .
		table_valeur($Pile["vars"], (string)'val', null) .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui">' .
		_T('public|spip|ecrire:info_gerer_trad_objets', array('objets' => table_valeur($Pile["vars"], (string)'objets', null))) .
		'</label>
							</div>
						</li>
						')) :
			'') .
	'
					</ul>
				</fieldset>
			</li>')) :
		'');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/formulaires/configurer_multilinguisme.html
// Temps de compilation total: 19.721 ms
//

function html_d9f6a6ca3de36abf5e61f694257e7e53($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
<h3 class=\'titrem\'><img src="' .
interdire_scripts(chemin_image('traduction-24.png')) .
'" class="cadre-icone" />' .
_T('public|spip|ecrire:info_multilinguisme') .
'&nbsp;:&nbsp;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_langue_site', null),true)) .
'</h3>
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
	<p>' .
	_T('public|spip|ecrire:texte_multilinguisme') .
	'</p>
	<p>' .
	_T('public|spip|ecrire:texte_multilinguisme_trad') .
	'</p>
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
	'</div><input type="hidden" name="multi_objets&#91;&#93;" value="" />
		<input type="hidden" name="gerer_trad_objets&#91;&#93;" value="" />
	  <ul>
			<li class="fieldset">
				<fieldset><ul>
					' .
	vide($Pile['vars'][(string)'objets'] = _T(objet_info('rubrique','texte_objets'))) .
	vide($Pile['vars'][(string)'val'] = 'spip_rubriques') .
	vide($Pile['vars'][(string)'name'] = 'multi_objets') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							<label>' .
	table_valeur($Pile["vars"], (string)'objets', null) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<div class="choix">
								<input type="checkbox" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'&#91;&#93;" id="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui" value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"
								' .
	((in_any(table_valeur($Pile["vars"], (string)'val', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))  ?
			(' ' . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui">' .
	_T('public|spip|ecrire:info_multi_objets', array('objets' => table_valeur($Pile["vars"], (string)'objets', null))) .
	'</label>
							</div>
						</li>
						' .
	((in_any(table_valeur($Pile["vars"], (string)'val', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'multi_objets', null),true))))  ?
			(' ' . (	'
						' .
		vide($Pile['vars'][(string)'name'] = 'multi_secteurs') .
		vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		'<li class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<div class="choix">
								<input type="hidden" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_check" value="1" />
								<input type="checkbox" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'" id="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui" value="oui"
								' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		' /><label for="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui">' .
		_T('public|spip|ecrire:info_multi_secteurs') .
		'</label>
							</div>
						</li>
						')) :
			'') .
	'
						' .
	((table_supporte_trad('spip_rubriques'))  ?
			(' ' . (	'
						' .
		vide($Pile['vars'][(string)'name'] = 'gerer_trad_objets') .
		vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		'<li class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<div class="choix">
								<input type="checkbox" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'&#91;&#93;" id="' .
		table_valeur($Pile["vars"], (string)'val', null) .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui" value="' .
		table_valeur($Pile["vars"], (string)'val', null) .
		'"
								' .
		((in_any(table_valeur($Pile["vars"], (string)'val', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))  ?
				(' ' . 'checked="checked"') :
				'') .
		' /><label for="' .
		table_valeur($Pile["vars"], (string)'val', null) .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui">' .
		_T('public|spip|ecrire:info_gerer_trad_objets', array('objets' => table_valeur($Pile["vars"], (string)'objets', null))) .
		'</label>
							</div>
						</li>
						')) :
			'') .
	'
					</ul>
				</fieldset>
			</li>
			')) :
		'') .
'
			' .
BOUCLE_objetshtml_d9f6a6ca3de36abf5e61f694257e7e53($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
		</ul>
		<p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
		<ul>
			' .
	(($t2 = strval(sinon(table_valeur(@$Pile[0], (string)'_langues', null), '')))!=='' ?
			((	'<li class="fieldset">
				<fieldset>
					<legend>' .
		_T('public|spip|ecrire:icone_gestion_langues') .
		'</legend>
					<p>' .
		_T('public|spip|ecrire:info_multi_langues_choisies') .
		'</p>
					') . $t2 . (	'
					<p>' .
		_T('public|spip|ecrire:info_multi_langues_soulignees') .
		'</p>
				</fieldset>
			</li>
			')) :
			'') .
	'
		</ul>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_d9f6a6ca3de36abf5e61f694257e7e53', $Cache, $page, '../prive/formulaires/configurer_multilinguisme.html');
}
?>