<?php

/*
 * Squelette : ../plugins/auto/menus/formulaires/editer_menus_entree.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/menus/formulaires/editer_menus_entree.html
// Temps de compilation total: 1.986 ms
//

function html_1d5d3d3f0ac9d0bec340f43ae499509f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
	_T('menus:formulaire_partie_construction') .
	'</h3>
					<input style="display:none;" type="submit" class="submit" name="enregistrer" value="' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'" />

					' .
	recuperer_fond( 'formulaires/inc-menus_entrees' , array_merge($Pile[0],array()), array('compil'=>array('../plugins/auto/menus/formulaires/editer_menus_entree.html','html_1d5d3d3f0ac9d0bec340f43ae499509f','',17,$GLOBALS['spip_lang'])), '') .
	'</fieldset>
			</li>
		</ul>
	</div></form>

	')) :
		'') .
'
</div>

<script type="text/javascript">
	$(function(){
		$(\'.entree .actions\').hide();
		$(\'.entree .ligne\')
			.hover(
				function(){
					$(this).find(\'.actions\').show();
				},
				function(){
					$(this).find(\'.actions\').hide();
				}
			);
	});
</script>');

	return analyse_resultat_skel('html_1d5d3d3f0ac9d0bec340f43ae499509f', $Cache, $page, '../plugins/auto/menus/formulaires/editer_menus_entree.html');
}
?>