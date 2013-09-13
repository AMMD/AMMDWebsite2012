<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_champs.html
 * Date :      Sun, 22 Jan 2012 10:00:14 GMT
 * Compile :   Wed, 01 May 2013 13:02:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_champs.html
// Temps de compilation total: 3.279 ms
//

function html_58a2bd4085fcc079dcb7ef281aaaed76($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="formulaire_spip formulaire_editer formulaire_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true))))!=='' ?
		((	' formulaire_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
	'-') . $t1) :
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
(($t1 = strval(interdire_scripts(((table_valeur(@$Pile[0], (string)'message_erreur', null)) ?'' :' '))))!=='' ?
		($t1 . (	'
	<div class="ajax">
		' .
	executer_balise_dynamique('FORMULAIRE_CONSTRUIRE_FORMULAIRE',
	array((	'formidable_' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true))),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_saisies', null),true))),
	array('../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_champs.html','html_58a2bd4085fcc079dcb7ef281aaaed76','',7,$GLOBALS['spip_lang'])) .
	'</div>
	')) :
		'') .
'

	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'editable', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<form method="post" action="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'" enctype="multipart/form-data"><div>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><p class="boutons">
			<span class="image_loading"></span>
			' .
	(($t2 = strval(interdire_scripts(((table_valeur(@$Pile[0], (string)'message_erreur', null)) ?'' :' '))))!=='' ?
			($t2 . (	'
			<em class="attention">' .
		_T('saisies:construire_attention_enregistrer') .
		'</em>
			<button type="submit" class="submit">
				<img src="' .
		interdire_scripts(find_in_path('images/formulaire-enregistrer-16.png')) .
		'" alt="" />
				' .
		_T('public|spip|ecrire:bouton_enregistrer') .
		'
			</button>
			')) :
			'') .
	'
			' .
	(($t2 = strval(interdire_scripts(((table_valeur(@$Pile[0], (string)'message_erreur', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
			<button type="submit" class="link" name="annulation" value="oui">
				' .
		_T('public|spip|ecrire:bouton_annuler') .
		'
			</button>
			<button type="submit" class="submit" name="confirmation" value="oui">
				<img src="' .
		interdire_scripts(find_in_path('images/formulaire-enregistrer-16.png')) .
		'" alt="" />
				' .
		_T('public|spip|ecrire:bouton_enregistrer') .
		'
			</button>
			')) :
			'') .
	'
		</p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_58a2bd4085fcc079dcb7ef281aaaed76', $Cache, $page, '../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_champs.html');
}
?>