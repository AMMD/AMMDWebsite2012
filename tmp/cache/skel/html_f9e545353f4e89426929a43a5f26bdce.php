<?php

/*
 * Squelette : ../plugins/auto/menus/formulaires/inc-menus_entrees.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:06 GMT
 * Boucles :   _sous_menu_test, _test_modifier, _sous_menu, _entrees, _pas_demande_entree
 */ 

function BOUCLE_sous_menu_testhtml_f9e545353f4e89426929a43a5f26bdce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_sous_menu_test';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'menus.id_menus_entree', sql_quote($Pile[$SP-1]['id_menus_entree'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_sous_menu_test',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				
				');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_test_modifierhtml_f9e545353f4e89426929a43a5f26bdce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),'id_menus_entree') == $Pile[$SP]['id_menus_entree'])) ?'' :' '));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_modifier';
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
		array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_test_modifier',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:formulaire_ajouter_sous_menu');
	$l2 = _T('menus:formulaire_modifier_entree');
	$l3 = _T('menus:formulaire_supprimer_entree');
	$l4 = _T('menus:confirmer_supprimer_entree');
	$l5 = _T('menus:formulaire_deplacer_bas');
	$l6 = _T('menus:formulaire_deplacer_haut');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		<div class="ligne">
			<div class="description arial2">
				' .
vide($Pile['vars'][(string)'supprimer_seulement'] = 'non') .
(($t1 = strval(interdire_scripts(((find_in_path((	'menus/' .
	interdire_scripts($Pile[$SP-1]['type_entree']) .
	'.html'))) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	interdire_scripts((!$Pile[$SP-1]['id_menus_entree']) ? _T('zbug_champ_hors_motif', array('champ'=>'AFFICHER_ENTREE', 'motif'=>'MENUS_ENTREES')) : recuperer_fond(
		'menus/'.$Pile[$SP-1]['type_entree'],
		array_merge(unserialize($Pile[$SP-1]['parametres']), array('appel_formulaire'=>true, env=>$Pile[0]))
	)))) :
		'') .
'
				' .
(($t1 = strval(interdire_scripts(((find_in_path((	'menus/' .
	interdire_scripts($Pile[$SP-1]['type_entree']) .
	'.html'))) ?'' :' '))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars'][(string)'supprimer_seulement'] = 'oui') .
	recuperer_fond( 'formulaires/inc-menus_entrees_inexistantes' , array('appel_formulaire' => 'oui' ,
	'titre' => interdire_scripts($Pile[$SP-1]['type_entree']) ), array('compil'=>array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_test_modifier',11,$GLOBALS['spip_lang'])), ''))) :
		'') .
'
			</div>
			<div class="actions">
				
				' .
(($t1 = BOUCLE_sous_menu_testhtml_f9e545353f4e89426929a43a5f26bdce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
				' .
	(((table_valeur($Pile["vars"], (string)'supprimer_seulement', null) == 'non'))  ?
			(' ' . (	'
				' .
		(($t3 = strval(interdire_scripts(((table_valeur(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'types_entrees', null),true),interdire_scripts($Pile[$SP-1]['type_entree'])),'refuser_sous_menu')) ?'' :' '))))!=='' ?
				($t3 . (	'
				<button name="demander_sous_menu" value="' .
			$Pile[$SP-1]['id_menus_entree'] .
			'" title="' .
			$l1 .
			'">
					' .
			(($t4 = strval(interdire_scripts(find_in_path('images/menus-24.png'))))!=='' ?
					('<img height="24" width="24" src="' . $t4 . '" alt="" />') :
					'') .
			'
				</button>
				')) :
				''))) :
			'') .
	'
				'))) .
'
				' .
(((table_valeur($Pile["vars"], (string)'supprimer_seulement', null) == 'non'))  ?
		(' ' . (	'
				<button name="modifier_entree" value="' .
	$Pile[$SP-1]['id_menus_entree'] .
	'" title="' .
	$l2 .
	'">
					' .
	(($t2 = strval(interdire_scripts(find_in_path('images/menus_action_modifier.png'))))!=='' ?
			('<img height="24" width="24" src="' . $t2 . '" alt="" />') :
			'') .
	'
				</button>')) :
		'') .
'
				<button name="supprimer_entree" value="' .
$Pile[$SP-1]['id_menus_entree'] .
'" title="' .
$l3 .
'"
                		onclick="return confirm(\'' .
$l4 .
'\')">
					' .
(($t1 = strval(interdire_scripts(find_in_path('images/menus_action_supprimer.png'))))!=='' ?
		('<img height="24" width="24" src="' . $t1 . '" alt="" />') :
		'') .
'
				</button>
				' .
(((table_valeur($Pile["vars"], (string)'supprimer_seulement', null) == 'non'))  ?
		(' ' . (	'
				<button name="deplacer_entree" value="' .
	$Pile[$SP-1]['id_menus_entree'] .
	'-bas" title="' .
	$l5 .
	'">
					' .
	(($t2 = strval(interdire_scripts(find_in_path('images/menus_action_bas.png'))))!=='' ?
			('<img height="24" width="24" src="' . $t2 . '" alt="" />') :
			'') .
	'
				</button>')) :
		'') .
'
				' .
(((table_valeur($Pile["vars"], (string)'supprimer_seulement', null) == 'non'))  ?
		(' ' . (	'
				<button name="deplacer_entree" value="' .
	$Pile[$SP-1]['id_menus_entree'] .
	'-haut" title="' .
	$l6 .
	'">
					' .
	(($t2 = strval(interdire_scripts(find_in_path('images/menus_action_haut.png'))))!=='' ?
			('<img height="24" width="24" src="' . $t2 . '" alt="" />') :
			'') .
	'
				</button>')) :
		'') .
'
			</div>
			<div class="nettoyeur"></div>
		</div>
		');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sous_menuhtml_f9e545353f4e89426929a43a5f26bdce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_sous_menu';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus.id_menu");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'menus.id_menus_entree', sql_quote($Pile[$SP]['id_menus_entree'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_sous_menu',52,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
recuperer_fond( 'formulaires/inc-menus_entrees' , array_merge($Pile[0],array('id_menu' => $Pile[$SP]['id_menu'] ,
	'sous_menu' => 'oui' )), array('compil'=>array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_sous_menu',53,$GLOBALS['spip_lang'])), ''));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_entreeshtml_f9e545353f4e89426929a43a5f26bdce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus_entrees';
		$command['id'] = '_entrees';
		$command['from'] = array('menus_entrees' => 'spip_menus_entrees');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus_entrees.id_menus_entree",
		"menus_entrees.type_entree",
		"menus_entrees.parametres",
		"menus_entrees.rang");
		$command['orderby'] = array('menus_entrees.rang');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'menus_entrees.id_menu', sql_quote(@$Pile[0]['id_menu'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_entrees',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<li class="entree"' .
(($t1 = strval(interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',table_valeur(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'types_entrees', null),true),interdire_scripts($Pile[$SP]['type_entree'])),'icone'),'24')),'src'))))!=='' ?
		(' style="background-repeat:no-repeat;background-position:5px 10px;background-image:url(' . $t1 . ')"') :
		'') .
'>
		' .
(($t1 = BOUCLE_test_modifierhtml_f9e545353f4e89426929a43a5f26bdce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		' .
	recuperer_fond( 'formulaires/inc-nouvelle_entree-2' , array_merge($Pile[0],array('id_menus_entree' => $Pile[$SP]['id_menus_entree'] )), array('compil'=>array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_entrees',48,$GLOBALS['spip_lang'])), '')))) .
'

		
		' .
BOUCLE_sous_menuhtml_f9e545353f4e89426929a43a5f26bdce($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</li>
	' .
vide($Pile['vars'][(string)'rang_suivant'] = plus($Pile[$SP]['rang'],'1')));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_pas_demande_entreehtml_f9e545353f4e89426929a43a5f26bdce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (((table_valeur($Pile["vars"], (string)'id_menu_nouvelle_entree', null) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true)))) ?'' :' ');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_pas_demande_entree';
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
		array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','_pas_demande_entree',62,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:formulaire_supprimer_sous_menu');
	$l2 = _T('menus:formulaire_ajouter_entree');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			<div class="boutons">
			' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'sous_menu', null),true)) ?'' :' '))))!=='' ?
		($t1 . '<span class="image_loading"></span>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'sous_menu', null),true) ? $l1:''))))!=='' ?
		((	'<button type="submit" class="submit link" name="supprimer_menu" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true)) .
	'">
				' .
	(($t2 = strval(interdire_scripts(find_in_path('images/menus_action_supprimer.png'))))!=='' ?
			('<img src="' . $t2 . '" alt="" />') :
			'') .
	'
				') . $t1 . '
			</button>') :
		'') .
'
			<button type="submit" class="submit" name="demander_nouvelle_entree" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true)) .
'">
				' .
(($t1 = strval(interdire_scripts(find_in_path('images/menus_action_ajouter.png'))))!=='' ?
		('<img src="' . $t1 . '" alt="" />') :
		'') .
'
				' .
$l2 .
'
			</button>
			</div>
		');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/menus/formulaires/inc-menus_entrees.html
// Temps de compilation total: 16.561 ms
//

function html_f9e545353f4e89426929a43a5f26bdce($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'rang_suivant'] = '1') .
'<ul id="menu-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu', null),true)) .
'" class="menus_entrees">
	' .
BOUCLE_entreeshtml_f9e545353f4e89426929a43a5f26bdce($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	<li class="editer_entree fieldset">
		' .
vide($Pile['vars'][(string)'id_menu_nouvelle_entree'] = interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),'id_menu_nouvelle_entree'))) .
vide($Pile['vars'][(string)'type_entree'] = interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),'type_entree'))) .
(($t1 = BOUCLE_pas_demande_entreehtml_f9e545353f4e89426929a43a5f26bdce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
			' .
	(!(table_valeur($Pile["vars"], (string)'type_entree', null))  ?
			(' ' . (	'
				' .
		recuperer_fond( 'formulaires/inc-nouvelle_entree-1' , array_merge($Pile[0],array('id_menu_nouvelle_entree' => table_valeur($Pile["vars"], (string)'id_menu_nouvelle_entree', null) )), array('compil'=>array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','',76,$GLOBALS['spip_lang'])), ''))) :
			'') .
	'
			' .
	((table_valeur($Pile["vars"], (string)'type_entree', null))  ?
			(' ' . (	'
				' .
		recuperer_fond( 'formulaires/inc-nouvelle_entree-2' , array_merge($Pile[0],array('id_menu_nouvelle_entree' => table_valeur($Pile["vars"], (string)'id_menu_nouvelle_entree', null) ,
	'rang_suivant' => table_valeur($Pile["vars"], (string)'rang_suivant', null) )), array('compil'=>array('../plugins/auto/menus/formulaires/inc-menus_entrees.html','html_f9e545353f4e89426929a43a5f26bdce','',77,$GLOBALS['spip_lang'])), ''))) :
			'') .
	'
		'))) .
'
	</li>
</ul>
');

	return analyse_resultat_skel('html_f9e545353f4e89426929a43a5f26bdce', $Cache, $page, '../plugins/auto/menus/formulaires/inc-menus_entrees.html');
}
?>