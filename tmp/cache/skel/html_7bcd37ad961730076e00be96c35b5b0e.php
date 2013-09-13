<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire.html
 * Date :      Thu, 06 Sep 2012 16:00:54 GMT
 * Compile :   Wed, 01 May 2013 13:01:52 GMT
 * Boucles :   _traitements, _formulaire
 */ 

function BOUCLE_traitementshtml_7bcd37ad961730076e00be96c35b5b0e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(((($a = unserialize($Pile[$SP]['traitements'])) OR (is_string($a) AND strlen($a))) ? $a : array())));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_traitements';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle");
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
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire.html','html_7bcd37ad961730076e00be96c35b5b0e','_traitements',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<li>' .
table_valeur(table_valeur(table_valeur($Pile["vars"], (string)'traitements_disponibles', null),interdire_scripts($Pile[$SP]['cle'])),'titre') .
'</li>
			');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_formulairehtml_7bcd37ad961730076e00be96c35b5b0e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires.traitements",
		"formulaires.id_formulaire",
		"formulaires.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'formulaires.id_formulaire', sql_quote(@$Pile[0]['id_formulaire'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire.html','html_7bcd37ad961730076e00be96c35b5b0e','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
boite_ouvrir((	(($t2 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire', invalideur_session($Cache, $Pile[$SP]['id_formulaire']))?" ":"")) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		filtre_icone_verticale_dist(generer_url_ecrire('formulaire_edit',(	'id_formulaire=' .
			$Pile[$SP]['id_formulaire'])),_T('formidable:editer_modifier_formulaire'),'formulaire','formulaire-editer-24','right') .
		'
	')) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))!=='' ?
			('<h1>' . $t2 . (	interdire_scripts(filtre_balise_img_dist(chemin_image('formulaire-24.png'),'formulaire','cadre-icone')) .
		'</h1>')) :
			'') .
	'
'), 'simple fiche_objet') .
'


<!--affiche_milieu-->

<div id="wysiwyg">
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/contenu/formulaire') . ', array(\'id\' => ' . argumenter_squelette($Pile[$SP]['id_formulaire']) . ',
	\'id_formulaire\' => ' . argumenter_squelette($Pile[$SP]['id_formulaire']) . ',
	\'virtuel\' => ' . argumenter_squelette('oui') . ',
	\'wysiwyg\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire.html\',\'html_7bcd37ad961730076e00be96c35b5b0e\',\'\',8,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('wysiwyg') . '))?$v:true), _request("connect"));
?'.'>
</div>

	' .
vide($Pile['vars'][(string)'traitements_disponibles'] = traitements_lister_disponibles('')) .
boite_ouvrir(interdire_scripts(concat(filtre_balise_img_dist(chemin_image('formulaire-config-traitements-24.png'),'','cadre-icone'),_T('formidable:traitements_actives'))), 'simple traitements') .
'
	' .
(($t1 = BOUCLE_traitementshtml_7bcd37ad961730076e00be96c35b5b0e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
		<ul class=\'spip\'>
			' . $t1 . '
		</ul>
	') :
		((	'
		<p>' .
	_T('formidable:aucun_traitement') .
	'</p>
	'))) .
'
	' .
boite_fermer() .
'

	' .
executer_balise_dynamique('FORMULAIRE_FORMIDABLE',
	array($Pile[$SP]['id_formulaire']),
	array('../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire.html','html_7bcd37ad961730076e00be96c35b5b0e','_formulaire',32,$GLOBALS['spip_lang'])) .
boite_fermer() .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire.html
// Temps de compilation total: 6.687 ms
//

function html_7bcd37ad961730076e00be96c35b5b0e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_formulairehtml_7bcd37ad961730076e00be96c35b5b0e($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_7bcd37ad961730076e00be96c35b5b0e', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaire.html');
}
?>