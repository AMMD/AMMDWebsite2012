<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/formulaires/importer_formulaire.html
 * Date :      Sun, 22 Jan 2012 10:00:14 GMT
 * Compile :   Wed, 01 May 2013 13:01:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/formulaires/importer_formulaire.html
// Temps de compilation total: 3.493 ms
//

function html_212788fb13c60788ecb699dfeea37c54($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true))))!=='' ?
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
	'</div><ul>
			' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'selection' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'type_import', null)) ,
	'nom' => 'type_import' ,
	'label' => _T('formidable:importer_formulaire_format_label') ,
	'datas' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_types_import', null),true)) ,
	'defaut' => 'yaml' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/formidable/v1.3.5/formulaires/importer_formulaire.html','html_212788fb13c60788ecb699dfeea37c54','',11,$GLOBALS['spip_lang'])), '') .
	'
			
			' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fichier', null)) ,
	'nom' => 'fichier' ,
	'label' => _T('formidable:importer_formulaire_fichier_label') ,
	'type' => 'file' ,
	'size' => '6' ), array('compil'=>array('../plugins/auto/formidable/v1.3.5/formulaires/importer_formulaire.html','html_212788fb13c60788ecb699dfeea37c54','',9,$GLOBALS['spip_lang'])), '') .
	'
		</ul>
		
		
		<!--extra-->
		
		<p class="boutons"><span class="image_loading"></span><input type="submit" class="submit" value="' .
	_T('public|spip|ecrire:bouton_telecharger') .
	'" /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_212788fb13c60788ecb699dfeea37c54', $Cache, $page, '../plugins/auto/formidable/v1.3.5/formulaires/importer_formulaire.html');
}
?>