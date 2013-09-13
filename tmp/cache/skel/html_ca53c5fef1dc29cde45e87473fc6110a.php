<?php

/*
 * Squelette : plugins/auto/formidable/v1.3.5/formulaires/formidable.html
 * Date :      Thu, 06 Sep 2012 13:00:08 GMT
 * Compile :   Wed, 01 May 2013 21:35:30 GMT
 * Boucles :   _remplacer_le_formulaire
 */ 

function BOUCLE_remplacer_le_formulairehtml_ca53c5fef1dc29cde45e87473fc6110a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_remplacer_formulaire', null),true));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_remplacer_le_formulaire';
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
		array('plugins/auto/formidable/v1.3.5/formulaires/formidable.html','html_ca53c5fef1dc29cde45e87473fc6110a','_remplacer_le_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	
	' .
table_valeur(@$Pile[0], (string)'_remplacer_formulaire', null) .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/formidable/v1.3.5/formulaires/formidable.html
// Temps de compilation total: 6.693 ms
//

function html_ca53c5fef1dc29cde45e87473fc6110a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_remplacer_le_formulairehtml_ca53c5fef1dc29cde45e87473fc6110a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
<div class="formulaire_spip formulaire_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
	(($t2 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true))))!=='' ?
			((	' formulaire_' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'form', null),true)) .
		'-') . $t2) :
			'') .
	'">
	' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
			('<p class="reponse_formulaire reponse_formulaire_ok">' . $t2 . '</p>') :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
			('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t2 . '</p>') :
			'') .
	'

	' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'editable', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
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
			' .
		recuperer_fond( 'inclure/generer_saisies' , array_merge($Pile[0],array('saisies' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_saisies', null),true)) )), array('compil'=>array('plugins/auto/formidable/v1.3.5/formulaires/formidable.html','html_ca53c5fef1dc29cde45e87473fc6110a','',13,$GLOBALS['spip_lang'])), '') .
		'<li style="display:none;">
				<label for="mechantrobot-' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
		'">' .
		_T('public|spip|ecrire:antispam_champ_vide') .
		'</label>
				<input type="text" id="mechantrobot-' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
		'" name="mechantrobot" value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'mechantrobot', null),true)) .
		'" />
			</li>
		</ul>
		
		' .
		'
		<!--extra-->
		
		<p class=\'boutons\'>
			<span class=\'image_loading\'></span>
			<input type=\'submit\' class=\'submit\' value=\'' .
		_T('public|spip|ecrire:bouton_valider') .
		'\' />
		</p>
	</div></form>
	')) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(((@$Pile[0]['editable']) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'formidable_afficher_apres', null),true) == 'valeurs')) ?' ' :''))))!=='' ?
				($t3 . (	' 
			' .
			recuperer_fond( 'inclure/voir_saisies' , array_merge($Pile[0],array('valeurs' => interdire_scripts(entites_html(@serialize($Pile[0]),true)) ,
	'saisies' => interdire_scripts(table_valeur(@$Pile[0], (string)'_saisies', null)) )), array('compil'=>array('plugins/auto/formidable/v1.3.5/formulaires/formidable.html','html_ca53c5fef1dc29cde45e87473fc6110a','',32,$GLOBALS['spip_lang'])), ''))) :
				'') .
		'
		' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'formidable_afficher_apres', null),true) == 'rien')) ?' ' :''))))!=='' ?
				($t3 . ' 
		') :
				'') .
		'
	')) :
			'') .
	'
	<br />
</div>
'))) .
'
');

	return analyse_resultat_skel('html_ca53c5fef1dc29cde45e87473fc6110a', $Cache, $page, 'plugins/auto/formidable/v1.3.5/formulaires/formidable.html');
}
?>