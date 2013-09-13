<?php

/*
 * Squelette : ../plugins/auto/videos/v0.10.2/prive/contenu/videos_affiche_boite.html
 * Date :      Mon, 13 Aug 2012 19:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:46:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/videos/v0.10.2/prive/contenu/videos_affiche_boite.html
// Temps de compilation total: 1.075 ms
//

function html_4275f2f417bc61c635b772806fa837c0($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="box info">
	<div class=\'inner cadre cadre-r\'>
		<img src="' .
interdire_scripts(find_in_path('theme/img/videos-24.png')) .
'" class=\'cadre-icone\' alt=\'\' />
		<div onmouseover="jQuery(this).depliant(\'#plugin_videos\');" class="titrem replie">
			<a class="titremancre" onclick="return jQuery(this).depliant_clicancre(\'#plugin_videos\');" href="#"></a>
			<strong style=\'text-transform:uppercase\'>' .
_T('videos:label_ajouter_video') .
'</strong>
		</div><!-- .titrem -->
		<div>
			<div class=\'bd cadre_padding\'>
	      	' .
_T('videos:explication_ajouter_video') .
'
				<div id=\'plugin_videos\' class=\'bloc_depliable blocreplie\'>
					<div class=\'ajax\' style=\'text-align:left\'>' .
executer_balise_dynamique('FORMULAIRE_INSERTION_VIDEO',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true))),
	array('../plugins/auto/videos/v0.10.2/prive/contenu/videos_affiche_boite.html','html_4275f2f417bc61c635b772806fa837c0','',12,$GLOBALS['spip_lang'])) .
'</div>
				</div>	
			</div><!-- .cadre_padding -->
		</div>
	</div><!-- .cadre .cadre-e -->
</div>');

	return analyse_resultat_skel('html_4275f2f417bc61c635b772806fa837c0', $Cache, $page, '../plugins/auto/videos/v0.10.2/prive/contenu/videos_affiche_boite.html');
}
?>