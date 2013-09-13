<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_traitements.html
 * Date :      Sun, 22 Jan 2012 10:00:14 GMT
 * Compile :   Wed, 01 May 2013 13:03:40 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_traitements.html
// Temps de compilation total: 2.681 ms
//

function html_60fbb33d9f559644341bcaeb2b87d465($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_' .
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
	recuperer_fond( 'inclure/generer_saisies' , array_merge($Pile[0],array('saisies' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_configurer_traitements', null),true)) )), array('compil'=>array('../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_traitements.html','html_60fbb33d9f559644341bcaeb2b87d465','',9,$GLOBALS['spip_lang'])), '') .
	'</ul>
		
		
		<!--extra-->
		
		<p class="boutons"><span class="image_loading"></span><input type="submit" class="submit" value="' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'" /></p>
	</div></form>
	<script type="text/javascript">
		$(function(){
			// On commence par cacher toutes les options
			$(\'.options_traiter\').hide().find(\'h3\').hide();
			
			// Ensuite on parcourt les traitements choisis
			$(\'.editer_traitements_choisis input\')
				.each(function(){
					// Si c\'est coché on affiche le fieldset d\'options
					if ($(this).is(\':checked\')){
						$(\'.options_traiter.\'+$(this).val()).show();
						$(this).parents(\'.editer_traitements_choisis\').toggleClass(\'hover\');
					}
				})
				.click(function(){
					$(\'.options_traiter.\'+$(this).val()).slideToggle(\'fast\');
					$(this).parents(\'.editer_traitements_choisis\').toggleClass(\'hover\');
				});
		});
	</script>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_60fbb33d9f559644341bcaeb2b87d465', $Cache, $page, '../plugins/auto/formidable/v1.3.5/formulaires/editer_formulaire_traitements.html');
}
?>