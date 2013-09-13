<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/objets/contenu/formulaire.html
 * Date :      Thu, 06 Sep 2012 16:00:52 GMT
 * Compile :   Wed, 01 May 2013 13:01:52 GMT
 * Boucles :   _formulaire
 */ 

function BOUCLE_formulairehtml_03de938d957f2e4521e482ab5a9a4fa8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaire';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("formulaires.descriptif");
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
		array('../plugins/auto/formidable/v1.3.5/prive/objets/contenu/formulaire.html','html_03de938d957f2e4521e482ab5a9a4fa8','_formulaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_descriptif');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class="champ contenu_descriptif' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['descriptif']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
	<div class=\'label\'>' .
$l1 .
'</div>
	<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'' .
'descriptif\'>' .
interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['descriptif'], $connect, $Pile[0]),'500','0'))) .
'</div>
</div>
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/objets/contenu/formulaire.html
// Temps de compilation total: 2.001 ms
//

function html_03de938d957f2e4521e482ab5a9a4fa8($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_formulairehtml_03de938d957f2e4521e482ab5a9a4fa8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_03de938d957f2e4521e482ab5a9a4fa8', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/objets/contenu/formulaire.html');
}
?>