<?php

/*
 * Squelette : ../prive/formulaires/traduire.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:48:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/traduire.html
// Temps de compilation total: 11.262 ms
//

function html_0d982e5373c449aabce87f9d932ac820($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'" id="formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true)) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_id_objet', null),true)) .
'">
	<span class="image_loading"></span>
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
		<ul>
			<li class="editer editer_changer_lang long_label obligatoire' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'changer_lang'))  ?
		(' ' . 'erreur') :
		'') .
'">
				<label for="changer_lang">' .
interdire_scripts(_T(objet_info(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true),'texte_langue_objet'))) .
'</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'changer_lang')))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<span class="affiche"' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?' ' :''))))!=='' ?
		($t1 . 'style="display:none;"') :
		'') .
'>
				' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'langue', null),true) ? interdire_scripts(traduire_nom_langue(entites_html(table_valeur(@$Pile[0], (string)'langue', null),true))):(($t2 = strval(interdire_scripts(traduire_nom_langue(entites_html(table_valeur(@$Pile[0], (string)'langue_parent', null),true)))))!=='' ?
			('(' . $t2 . ')') :
			''))) .
'
				' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'langue_choisie', null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . (	'(' .
	_T('public|spip|ecrire:info_multi_herit') .
	')')) :
		'') .
'
				</span>
				' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_langue', null),true)) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(recuperer_fond( 'formulaires/inc-options-langues' , array('name' => 'changer_lang' ,
	'default' => table_valeur(@$Pile[0], (string)'_langue', null) ,
	'herit' => table_valeur(@$Pile[0], (string)'langue_parent', null) ), array('compil'=>array('../prive/formulaires/traduire.html','html_0d982e5373c449aabce87f9d932ac820','',0,$GLOBALS['spip_lang'])), '')))!=='' ?
			((	'<span class="toggle_box_link"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?' ' :''))))!=='' ?
				($t3 . 'style="display:none;"') :
				'') .
		'>&#91;<a href="#"
						onclick="var f=jQuery(this).parents(\'form\').eq(0);f.find(\'li .input\').show(\'fast\').siblings(\'span\').hide(\'fast\');f.find(\'.boutons,.new_trad,.editer_id_trad\').show(\'fast\');f.find(\'#changer_lang\').eq(0).focus();return false;"
						>' .
		_T('public|spip|ecrire:bouton_changer') .
		'</a>&#93;</span>
				<span class="input' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
				($t3 . 'none-js') :
				'') .
		'">
				<select name="changer_lang" id="changer_lang">') . $t2 . '</select>
				</span>') :
			'')) :
		'') .
'
			</li>
			' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_traduire', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_lister_id_trad', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
				<li class="fieldset voir_traductions">
					' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette(table_valeur(@$Pile[0], (string)'_vue_traductions', null)) . ', array_merge('.var_export($Pile[0],1).',array(\'id_trad\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_lister_id_trad', null),true))) . ',
	\'titre\' => ' . argumenter_squelette(_T('public|spip|ecrire:info_traductions')) . ',
	\'objet\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/formulaires/traduire.html\',\'html_0d982e5373c449aabce87f9d932ac820\',\'\',17,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
					' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
				($t3 . (	'
					<span class="input' .
			(($t4 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
					($t4 . 'none-js') :
					'') .
			'">
						<input type="submit" class="submit supprimer_trad" name="supprimer_trad" value="' .
			attribut_html(_T('public|spip|ecrire:trad_delier')) .
			'" />
					</span>
					')) :
				'') .
		'
				</li>
				')) :
			'') .
	'
				' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_lister_id_trad', null),true)) ?'' :' '))))!=='' ?
			($t2 . (	'
				<li class="editer editer_id_trad long_label' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_trad'))  ?
				(' ' . 'erreur') :
				'') .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
				($t3 . 'none-js') :
				'') .
		'">
					<label for="id_trad">' .
		_T('public|spip|ecrire:trad_lier') .
		'</label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_trad')))!=='' ?
				('
					<span class=\'erreur_message\'>' . $t3 . '</span>
					') :
				'') .
		'<input type="text" class="text" name="id_trad" id="id_trad" value="' .
		interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'id_trad', null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_trad', null),true)):'')) .
		'"
						onkeypress="$(this).parents(\'form\').find(\'.boutons\').slideDown();"/>
				</li>
				')) :
			'') .
	'
			')) :
		'') .
'
		</ul>
		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_traduire', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	(($t2 = strval(filtre_icone_horizontale_dist(parametre_url(generer_url_ecrire(interdire_scripts(objet_info(entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true),'url_edit')),(	'new=oui&lier_trad=' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_id_objet', null),true)))),interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_objet', null),true) == 'rubrique') ? 'id_parent':'id_rubrique')),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_id_parent', null),true))),_T('public|spip|ecrire:trad_new'),'traduction','new')))!=='' ?
			((	'<div class="new_trad' .
		interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' ')) .
		'">
			') . $t2 . '
			</div>') :
			'') .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
		<p class="boutons' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
			($t2 . 'none-js') :
			'') .
	'">
			<input type=\'submit\' class=\'over\' name=\'changer\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\' />
			<input type=\'submit\' class=\'submit\' name=\'annuler\' value=\'' .
	_T('public|spip|ecrire:bouton_fermer') .
	'\' />
			<input type="submit" class="submit" value="' .
	_T('public|spip|ecrire:bouton_changer') .
	'" />
		</p>
	</div></form>')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_0d982e5373c449aabce87f9d932ac820', $Cache, $page, '../prive/formulaires/traduire.html');
}
?>