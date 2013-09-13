<?php

/*
 * Squelette : ../plugins/auto/saisies/v1.27.0/formulaires/construire_formulaire.html
 * Date :      Thu, 20 Sep 2012 22:00:04 GMT
 * Compile :   Wed, 01 May 2013 13:02:04 GMT
 * Boucles :   _contenu, _saisies_disponibles, _editable
 */ 

function BOUCLE_contenuhtml_fa26ec7ff3b06f798e5f071a9765cb46(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_contenu', null),true)));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_contenu';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
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
		array('../plugins/auto/saisies/v1.27.0/formulaires/construire_formulaire.html','html_fa26ec7ff3b06f798e5f071a9765cb46','_contenu',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
((array_key_exists('saisie',interdire_scripts($Pile[$SP]['valeur'])))  ?
		(' ' . (	'
				' .
	formidable_generer_saisie_configurable($Pile[$SP]['valeur'],unserialize(@serialize($Pile[0]))) .
	'
			')) :
		'') .
'
			');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_saisies_disponibleshtml_fa26ec7ff3b06f798e5f071a9765cb46(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_saisies_disponibles', null),true)));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_saisies_disponibles';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
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
		array('../plugins/auto/saisies/v1.27.0/formulaires/construire_formulaire.html','html_fa26ec7ff3b06f798e5f071a9765cb46','_saisies_disponibles',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<button type="submit" name="ajouter_saisie" value="' .
interdire_scripts($Pile[$SP]['cle']) .
'" class="submit ajouter_saisie"' .
(($t1 = strval(interdire_scripts(table_valeur($Pile[$SP]['valeur'],'description'))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(((($a = table_valeur($Pile[$SP]['valeur'],'icone')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(find_in_path('images/formulaire-saisie-defaut.png'))))))!=='' ?
		('style="background-image:url(' . $t1 . ')"') :
		'') .
'>
					<span>' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'],'titre')) .
'</span>
				</button>
				');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_editablehtml_fa26ec7ff3b06f798e5f071a9765cb46(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'editable', null),true)) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_editable';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/auto/saisies/v1.27.0/formulaires/construire_formulaire.html','html_fa26ec7ff3b06f798e5f071a9765cb46','_editable',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:bouton_enregistrer');
	$l2 = _T('saisies:construire_reinitialiser_confirmer');
	$l3 = _T('saisies:construire_reinitialiser');
	$l4 = _T('saisies:construire_aucun_champs');
	$l5 = _T('saisies:construire_ajouter_champ');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
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
	'</div><input style="display:none;" type="submit" class="submit" name="enregistrer" value="' .
$l1 .
'" />

		<ul id="deplacable">
			
			<li id="reinitialiser" class="actions_formulaire' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'formulaire_modifie', null),true)) ?'' :' '))))!=='' ?
		(' ' . $t1 . ' invisible') :
		'') .
'">
				<button type="submit" class="submit" name="reinitialiser" value="oui" onclick="return confirm(\'' .
$l2 .
'\')">
					<img src="' .
interdire_scripts(find_in_path('images/formulaire-reinitialiser-24.png')) .
'" alt="" />
					' .
$l3 .
'
				</button>
			</li>

			' .
(($t1 = BOUCLE_contenuhtml_fa26ec7ff3b06f798e5f071a9765cb46($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
			<li class="aucun"><em class="attention">' .
	$l4 .
	'</em></li>
			'))) .
'
			
			' .
(($t1 = BOUCLE_saisies_disponibleshtml_fa26ec7ff3b06f798e5f071a9765cb46($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<li class="editer haut saisies_disponibles" id="attrapable">
				<label>' .
		$l5 .
		'</label>
				') . $t1 . '
			</li>
			') :
		'') .
'
		</ul>

		
		' .
'
		<!--extra-->
		
		<span class=\'image_loading\'></span>
	</div></form>

	<script type="text/javascript">
		jQuery(function(){
			jQuery(\'.formulaire_construire_formulaire li.configurable\')
				.hover(
					function(){
						jQuery(this)
							.addClass(\'hover\')
							.find(\'> .actions\')
								.show()
							.end()
							.parents(\'li.configurable:not(.en_configuration)\')
								.mouseout();
					},
					function(){
						if (!jQuery(this).is(\'.en_configuration\'))
							jQuery(this)
								.removeClass(\'hover\')
								.find(\'> .actions\')
									.hide()
								.end()
								.parents(\'li.configurable\').eq(\'0\')
									.mouseover();
					}
				)
				.filter(\':not(.en_configuration)\')
					.find(\'> .actions\')
						.hide()
					.end()
				.end();
			
			// On lance la création des onglets
			formulaire_configurer_onglets();
			
			// Gérer la liste des vérifications
			jQuery(\'.liste_verifications\')
				.each(function(){
					var options = jQuery(this).siblings(\'.options_verifier\').hide();
					var select = jQuery(this).find(\'select\');
					
					select
						.change(function(){
							var montrer = jQuery(this).val() ? jQuery(this).val() : \'soigfeg\';
							options.hide().filter(\'.\'+montrer).show();
						})
						.change();
				});
			
			// On déplie toujours les fieldsets plés par défaut
			jQuery(\'li.fieldset.plie\')
				.each(function(){
					jQuery(this)
						.removeClass(\'plie\')
						.find(\'> fieldset > ul\').show();
				});
				
			' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true)) ?'' :' ')) AND (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)))) ?' ' :''))))!=='' ?
		($t1 . (	'
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.core.js'))) .
	'", function(){
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.widget.js'))) .
	'", function(){
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.mouse.js'))) .
	'", function(){
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.sortable.js'))) .
	'", function(){
					if ($.fn.sortable) {
						jQuery( "#deplacable, #deplacable ul" ).sortable({
							revert: true,
							containment: \'#deplacable\',
							connectWith: "#deplacable, #deplacable ul",
							placeholder: "ui-state-highlight",
							handle: \'>.actions .deplacer_saisie\',
							start: function(event, ui) {
								jQuery(\'.ui-state-highlight\')
									.css(\'height\', ui.item.css(\'height\'))
									.css(\'height\', \'+=20px\');
							},
							update: function(event, ui) {
								id = ui.item.data(\'id\');
								ou = ui.item.next().data(\'id\');
								// avant le suivant
								if (!ou) {
									// sinon dans le parent
									ou = ui.item.closest(\'.fieldset\').data(\'id\');
									if (ou) {
										ou = \'' .
	chr('91') .
	'\' + ou + \'' .
	chr('93') .
	'\';
									}
								}
								url = "' .
	generer_url_ecrire('') .
	'";
								$.get(url, {
									session: \'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_identifiant_session', null),true)) .
	'\',
									action: \'deplacer_saisie\',
									saisie: id,
									ou: ou
								}, function() {
									//jQuery(\'input.vide\').submit();
									jQuery(\'#reinitialiser\').removeClass(\'invisible\');
									jQuery(\'#message_attention\').removeClass(\'invisible\');
								});
							}
						});
					}
				});});});});
				
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.core.js'))) .
	'", function(){
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.widget.js'))) .
	'", function(){
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.mouse.js'))) .
	'", function(){
				$.getScript("' .
	interdire_scripts(find_in_path((	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_chemin_ui', null),true)) .
		'jquery.ui.draggable.js'))) .
	'", function(){
					if ($.fn.draggable) {
						jQuery( "#attrapable" ).draggable({
							connectToSortable: "#deplacable, #deplacable ul",
							helper: "clone"
						});
					}
				});});});});
			')) :
		'') .
'
		});
		
		function formulaire_configurer_onglets(){
			var formulaire_configurer = jQuery(\'.formulaire_configurer\');
			var onglets = jQuery(\'<ul class="formulaire_configurer-onglets"></ul>\');
			var contenus = formulaire_configurer.find(\'> ul > li.fieldset\');
			
			// On ajoute le conteneur des onglets
			formulaire_configurer
				.prepend(onglets);
			
			// On parcourt les contenus pour générer les onglets
			contenus
				.each(function(i){
					// On ajoute un identifiant et une classe
					jQuery(this)
						.attr(\'id\', \'formulaire_configurer-contenu-\'+i)
						.addClass(\'formulaire_configurer-contenu\');
					// On récupère le titre (en le cachant au passage)
					var titre = jQuery(this).find(\'h3\').eq(0).hide().text();
					// On crée un onglet
					var onglet = jQuery(\'<li><a href="#formulaire_configurer-contenu-\'+i+\'">\'+titre+\'</a></li>\');
					onglet
						.click(function(){
							contenus.hide();
							jQuery(
								jQuery(this)
									.siblings()
										.removeClass(\'actif\')
									.end()
									.addClass(\'actif\')
									.find(\'a\')
										.attr(\'href\')
							).show();
							return false;
						});
					
					// On active le premier onglet au démarrage
					if (i == 0) onglet.addClass(\'actif\');
					
					// S\'il y a des erreurs dans cette partie du contenu, on met une classe "erreurs" à l\'onglet aussi
					if (jQuery(this).find(\'li.erreur\').length > 0)
						onglet.addClass(\'erreur\');
					
					// On ajoute l\'onglet
					onglets
						.append(onglet);
				})
				.hide()
				.eq(0)
					.show();
		}
	</script>
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v1.27.0/formulaires/construire_formulaire.html
// Temps de compilation total: 11.395 ms
//

function html_fa26ec7ff3b06f798e5f071a9765cb46($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),'positionner')) ?' ' :''))))!=='' ?
		($t1 . (	'
	<a name="ajax_ancre" href="' .
	interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),'positionner')) .
	'"></a>
')) :
		'') .
'
<div class="formulaire_spip formulaire_editer formulaire_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
'">
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	<p id="message_attention" class="reponse_formulaire reponse_formulaire_ok' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'formulaire_modifie', null),true)) ?'' :' '))))!=='' ?
		(' ' . $t1 . ' invisible') :
		'') .
'">' .
interdire_scripts(table_valeur(@$Pile[0], (string)'_message_attention', null)) .
'</p>
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	
	' .
BOUCLE_editablehtml_fa26ec7ff3b06f798e5f071a9765cb46($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</div>
');

	return analyse_resultat_skel('html_fa26ec7ff3b06f798e5f071a9765cb46', $Cache, $page, '../plugins/auto/saisies/v1.27.0/formulaires/construire_formulaire.html');
}
?>