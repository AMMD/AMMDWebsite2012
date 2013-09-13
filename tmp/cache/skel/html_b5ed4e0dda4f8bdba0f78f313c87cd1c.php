<?php

/*
 * Squelette : ../plugins/auto/menus/prive/squelettes/navigation/menus_editer.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/menus/prive/squelettes/navigation/menus_editer.html
// Temps de compilation total: 3.340 ms
//

function html_b5ed4e0dda4f8bdba0f78f313c87cd1c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(interdire_scripts(((intval(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_menu', null), '0'),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	boite_ouvrir('', 'info') .
	'
	<div class="infos">
		<div class="numero">
			' .
	_T('menus:info_numero_menu') .
	'
			<p>' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true)) .
	'</p>
		</div>
		' .
	filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=menu&id=' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true)))),'var_mode','calcul'),_T('public|spip|ecrire:icone_voir_en_ligne'),'racine') .
	'

		' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("yaml", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . (	'
			' .
		invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('exporter_menu',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true)))),_T('menus:editer_menus_exporter'),'menu-exporter-24.png')) .
		'
		')) :
			'') .
	'
	</div>
' .
	boite_fermer() .
	'
')) :
		'');

	return analyse_resultat_skel('html_b5ed4e0dda4f8bdba0f78f313c87cd1c', $Cache, $page, '../plugins/auto/menus/prive/squelettes/navigation/menus_editer.html');
}
?>