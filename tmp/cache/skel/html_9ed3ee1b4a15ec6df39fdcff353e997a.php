<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/formulaires/inc-construire_formulaire-actions.html
 * Date :      Sun, 22 Jan 2012 15:00:16 GMT
 * Compile :   Wed, 01 May 2013 13:02:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/formulaires/inc-construire_formulaire-actions.html
// Temps de compilation total: 2.675 ms
//

function html_9ed3ee1b4a15ec6df39fdcff353e997a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="actions">
	' .
vide($Pile['vars'][(string)'nom'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'identifiant', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
(($t1 = strval(interdire_scripts(((is_array(entites_html(table_valeur(@$Pile[0], (string)'formulaire_config', null),true))) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'deplacable', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
	<span class="move deplacer_saisie" title="' .
		_T('saisies:construire_action_deplacer') .
		'">
		<img src="' .
		interdire_scripts(find_in_path('images/formulaire-deplacer-16.png')) .
		'" alt="' .
		_T('saisies:construire_action_deplacer') .
		'"/>
	</span>
	')) :
			'') .
	'
	<button type="submit" class="submit configurer_saisie" name="configurer_saisie" value="' .
	table_valeur($Pile["vars"], (string)'nom', null) .
	'" title="' .
	_T('saisies:construire_action_configurer') .
	'">
		<img src="' .
	interdire_scripts(find_in_path('images/formulaire-configurer-16.png')) .
	'" alt="' .
	_T('saisies:construire_action_configurer') .
	'"/>
	</button>
	<button type="submit" class="submit dupliquer_saisie" name="dupliquer_saisie" value="' .
	table_valeur($Pile["vars"], (string)'nom', null) .
	'" title="' .
	_T('saisies:construire_action_dupliquer') .
	'">
		<img src="' .
	interdire_scripts(find_in_path('images/formulaire-dupliquer-16.png')) .
	'" alt="' .
	_T('saisies:construire_action_dupliquer') .
	'"/>
	</button>
	<button type="submit" class="submit supprimer_saisie" name="supprimer_saisie" value="' .
	table_valeur($Pile["vars"], (string)'nom', null) .
	'" title="' .
	_T('saisies:construire_action_supprimer') .
	'" onclick="javascript:return confirm(\'' .
	_T('saisies:construire_confirmer_supprimer_champ') .
	'\');">
		<img src="' .
	interdire_scripts(find_in_path('images/formulaire-supprimer-16.png')) .
	'" alt="' .
	_T('saisies:construire_action_supprimer') .
	'"/>
	</button>
	')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(((is_array(entites_html(table_valeur(@$Pile[0], (string)'formulaire_config', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
	<button type="submit" class="submit enregistrer_saisie" name="enregistrer_saisie" value="' .
	table_valeur($Pile["vars"], (string)'nom', null) .
	'" title="' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'">
		<img src="' .
	interdire_scripts(find_in_path('images/formulaire-enregistrer-16.png')) .
	'" alt="' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'"/>
	</button>
	<button type="submit" class="submit annuler" name="enregistrer_saisie" value="" title="' .
	_T('saisies:construire_action_annuler') .
	'">
		<img src="' .
	interdire_scripts(find_in_path('images/formulaire-annuler-16.png')) .
	'" alt="' .
	_T('saisies:construire_action_annuler') .
	'"/>
	</button>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_9ed3ee1b4a15ec6df39fdcff353e997a', $Cache, $page, '../plugins/auto/saisies/v1.27.0/formulaires/inc-construire_formulaire-actions.html');
}
?>